<?php

namespace Classes;

use PDOException;

include("images.php");

class Contents{
    private $dbh;
    private $images;
    function __construct(){
        //$dbh=parent::__construct();
        $this->dbh=new Database();
        $this->images=new Images();
    }

    public function create($item){      
        $query=$this->dbh->connect()->prepare("INSERT INTO mica.contents (`title`, `content`, `keywords`, `description`, `category`,`cod`) VALUES (:title,:content,:keywords,:description,:category,:cod)");
        try{
            $query->execute([
                'title'=>$item['title'],
                'content'=>$item['content'],
                'keywords'=>$item['keywords'],
                'description'=>$item['description'],
                'category'=>$item['category'],
                'cod'=>$item['cod'],

            ]);
            return true;
        }catch(\PDOException $e){
            return false;
        }
    }

    public function list(){
        $items=[];
        try{
            $query= $this->dbh->connect()->query("SELECT * FROM mica.contents");

            while($row=$query->fetch()){
                $imagesData=$this->images->getByCod($row['cod']);
                $row['images']=$imagesData;
                array_push($items,$row);
            }
            return $items;
        }catch(\PDOException $e){
            return[];
        }
    }

    public function view($id){
        try{
            $query=$this->dbh->connect()->query("SELECT * FROM mica.contents WHERE id='$id'");
            $row=$query->fetch();
            $imagesData=$this->images->getByCod($row['cod']);
            $row['images']=$imagesData;
            return $row;
        }catch (\PDOException $e){
            return[];
        }
    }

    public function getById($id){
        $item=new Contents();
        try{
            $query=$this->dbh->connect()->prepare("SELECT * FROM mica.contents WHERE id=:id");
            $query->execute(['id'=>$id]);

            $row=$query->fetch();
            
            return $row;

        }catch(\PDOException $e){
            return null;
        }
    }

    public function update($item,$id){
        $query=$this->dbh->connect()->prepare("UPDATE mica.contents SET title=:title, content=:content, keywords=:keywords, description=:description, category=:category WHERE id=:id");
        try{
            $query->execute([
                'title'=>$item['title'],
                'content'=>$item['content'],
                'keywords'=>$item['keywords'],
                'description'=>$item['description'],
                'category'=>$item['category'],
                'id'=>$id

            ]);
            return true;

        }catch(\PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query=$this->dbh->connect()->prepare("DELETE FROM mica.contents WHERE id=:id");

        if($query->execute(['id'=>$id])){
            echo "Registro eliminado.";
        }else{
            echo "Error al eliminar registro.";
        }

    }


}

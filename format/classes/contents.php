<?php

namespace Classes;

use PDOException;

include("database.php");

class Contents{
    private $dbh;
    function __construct(){
        //$dbh=parent::__construct();
        $this->dbh=new Database();

    }

    public function create($item){
        var_dump($item);       
        $query=$this->dbh->connect()->prepare("INSERT INTO contents (`title`, `content`, `keywords`, `description`, `category`) VALUES (:title,:content,:keywords,:description,:category)");
        try{
            $query->execute([
                'title'=>$item['title'],
                'content'=>$item['content'],
                'keywords'=>$item['keywords'],
                'description'=>$item['description'],
                'category'=>$item['category'],
            ]);
            return true;
        }catch(\PDOException $e){
            return false;
        }
    }

    public function list(){
        $items=[];
        try{
            $query=$this->dbh->connect()->query("SELECT * FROM contents");
            while($row=$query->fetch()){
                array_push($items,$row);
                var_dump($row);
            }
            return $items;
        }catch(\PDOException $e){
            return[];
        }
    }

    public function view($id){
        try{
            $query=$this->dbh->connect()->query("SELECT * FROM contents WHERE id='$id'");
            $row=$query->fetch();
            return $row;
        }catch (\PDOException $e){
            return[];
        }
    }

    public function getById($id){
        $item=new Contents();
        try{
            $query=$this->dbh->connect()->prepare("SELECT * FROM contents WHERE id=:id");
            $query->execute(['id'=>$id]);

            $row=$query->fetch();
            
            return $row;

        }catch(\PDOException $e){
            return null;
        }
    }

    public function update($item,$id){
        $query=$this->dbh->connect()->prepare("UPDATE contents SET title=:title, content=:content, keywords=:keywords, description=:description, category=:category WHERE id=:id");
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
        $query=$this->dbh->connect()->prepare("DELETE FROM contents WHERE id=:id");

        if($query->execute(['id'=>$id])){
            echo "Registro eliminado.";
        }else{
            echo "Error al eliminar registro.";
        }

    }


}

?>
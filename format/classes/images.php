<?php

namespace Classes;


class Images{
    private $dbh;
    function __construct(){
        //$dbh=parent::__construct();
        $this->dbh=new Database();
    }

    public function create($url,$content){
        $query=$this->dbh->connect()->prepare("INSERT INTO mica.images (`url`, `content`) VALUES (:url,:content)");
        try{
            $query->execute([
                'url'=>$url,
                'content'=>$content
            ]);
            return true;         
        }catch(\PDOException $e){
            return false;
        }
    }
    
    public function getByCod($cod){
        $item=new Images();
        try{
            $query=$this->dbh->connect()->prepare("SELECT * FROM mica.images WHERE content=".$cod."");
            $query->execute();
            $row=$query->fetch();
            return $row;
        }catch(\PDOException $e){
            return null;
        }
    }

    public function list($id){
        $query=$this->dbh->connect()->query("SELECT * FROM mica.images WHERE content=:id");
        try{
            $query->execute(['id'=>$id]);
            return $query->fetchAll();
        }catch(\PDOException $e){
            return [];
        }        
    }

    public function view($id){
        try{
            $query=$this->dbh->connect()->query("SELECT * FROM mica.images WHERE id='$id'");
            $row=$query->fetch();
            return $row;
        }catch (\PDOException $e){
            return[];
        }
    }

    public function update($url,$id){
        $query=$this->dbh->connect()->prepare("UPDATE mica.images SET url=:url WHERE id=:id");
        try{
            $query->execute([
                'url'=>$url,
                'id'=>$id
            ]);
            return true;
        }catch(\PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query=$this->dbh->connect()->prepare("DELETE FROM mica.images WHERE id=:id");

        if($query->execute(['id'=>$id])){
            echo "Registro eliminado.";
        }else{
            echo "Error al eliminar registro.";
        }

    }

}




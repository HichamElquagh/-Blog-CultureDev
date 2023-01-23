<?php
include_once(__DIR__.'/database.class.php');

   





 class Category{
     private $id = null ;
     private $name;


     public function __construct( $ID="",$NAME=""){
      $this->id=$ID;
      $this->name=$NAME;
     }
   
      public function insertcategory(){
       $database = new Database();
       $sql = "INSERT INTO categorys (category_article) VALUES(?)";
       $conn= $database->connect()->prepare($sql);
       $conn->execute([$this->name]);

      }
      public function updateCategory(){

      $database = new Database();
      $sql = "UPDATE categorys
      SET category_article ='$this->name'
      WHERE id ='$this->id'";
       $conn= $database->connect()->prepare($sql);
       $conn->execute();
        }
        
      public function deleteCategory($id){
        $database = new Database();
        $sql = "DELETE FROM `categorys` WHERE id='$id'";
        $conn= $database->connect()->prepare($sql);
        $conn->execute();
      }



 }


















?>
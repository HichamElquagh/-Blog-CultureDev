<?php
include_once(__DIR__.'/database.class.php');

   





 class Category{
 
     private $name;


     public function __construct($NAME=""){
      $this->name=$NAME;
     }
   
      public function insertcategory(){

       $database = new Database();
       $sql = "INSERT INTO categorys (category_article) VALUES(?)";
       $conn= $database->connect()->prepare($sql);
       $conn->execute([$this->name]);

      }




 }


















?>
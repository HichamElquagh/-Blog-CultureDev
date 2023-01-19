<?php
include_once(__DIR__.'/database.class.php');



class Article{

    private  $id = NULL;
    private  $id_user;
    private  $category;
    private  $title;
    private  $image;
    private  $description;
    private  $datetime;


    public function __construct($ID_USER="",$CATEGORY="",$TITLE="",$IMAGE="",$DESCRIPTION="",$DATETIME=""){

     $this->id_user=$ID_USER;
     $this->category=$CATEGORY;
     $this->title=$TITLE;
     $this->image=$IMAGE;
     $this->description=$DESCRIPTION;
     $this->datetime=$DATETIME;


    }
    
 
    public function insertarticle(){
    
            $database = new Database();
            $sql = "INSERT INTO articles(user,category_id,title,image,description,datetime) VALUES(?,?,?,?,?,?)";
            $conn= $database->connect()->prepare($sql);
            $conn->execute([$this->id_user,$this->category,$this->title,$this->image,$this->description,$this->datetime]);
        
    }

    public function selectcategory(){
   
      $database = new Database();
      $sql = "SELECT * FROM categorys";
      $conn = $database->connect()->prepare($sql);
      $conn->execute();
      $dbCategory = $conn->fetchAll(PDO::FETCH_ASSOC); 
       return $dbCategory;
    }

    public function displayarticle(){
        $database = new Database();
        $sql = "SELECT *,articles.id as id_article ,categorys.category_article AS Carticle  FROM articles 
        INNER JOIN categorys ON  articles.category_id  = categorys.id";
        $conn = $database->connect()->prepare($sql);
        $conn->execute();
        $dbCategory = $conn->fetchAll(PDO::FETCH_ASSOC); 
         return $dbCategory;
    }



    public function editarticle($id){
   
        $database = new Database();
        $sql = "SELECT *,articles.id as id_article ,categorys.category_article AS Carticle  FROM articles 
        INNER JOIN categorys ON  articles.category_id  = categorys.id  WHERE id='$id' " ;
        $conn = $database->connect()->prepare($sql);
        $conn->execute();
        $dbCategory = $conn->fetchAll(PDO::FETCH_ASSOC); 
         return $dbCategory;
      }





}












?>
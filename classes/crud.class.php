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


    public function __construct($ID="",$ID_USER="",$CATEGORY="",$TITLE="",$IMAGE="",$DESCRIPTION="",$DATETIME=""){

     $this->id=$ID;
     $this->id_user=$ID_USER;
     $this->category=$CATEGORY;
     $this->title=$TITLE;
     $this->image=$IMAGE;
     $this->description=$DESCRIPTION;
     $this->datetime=$DATETIME;


    }
    
 
    public function insertarticle(){
            $database = new Database();
            foreach($this->id_user as $key => $value){  

            // var_dump($value,$this->category[$key],$this->title[$key],$this->image[$key],$this->description[$key],$this->datetime[$key]);
            $sql = "INSERT INTO articles(user,category_id,title,image,description,datetime) VALUES(?,?,?,?,?,?)";
            $conn= $database->connect()->prepare($sql);
            $conn->execute(array($value,$this->category[$key],$this->title[$key],$this->image[$KEY],$this->description[$key],$this->datetime[$key]));
            $upload_file = '../assets/img/' . $image[$key];
            move_uploaded_file($image_temp, $upload_file);
          }
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
        $sql = "SELECT *,articles.id as id_article , categorys.id as CategoID ,categorys.category_article AS Carticle   FROM articles 
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

      public function updatearticle($image){
        
        $database = new Database();
        $sql = "UPDATE articles
        SET category_id ='$this->category',image ='$image[0]',
        title='$this->title', description='$this->description', datetime='$this->datetime'
        WHERE id ='$this->id'";
       
        
        
        $conn= $database->connect()->prepare($sql);
        $conn->execute();
      }
      public function updatearticlewithoutimage(){
        $database = new Database();
        $sql = "UPDATE articles
        SET category_id ='$this->category',
        title='$this->title', description='$this->description', datetime='$this->datetime'
        WHERE id ='$this->id'";
        
        $conn= $database->connect()->prepare($sql);
        $conn->execute();
      }

      public function deleteArticle($id){

        $database = new Database();
        $sql = "DELETE FROM `articles` WHERE id='$id'";
        $conn= $database->connect()->prepare($sql);
        $conn->execute();

      }





}












?>
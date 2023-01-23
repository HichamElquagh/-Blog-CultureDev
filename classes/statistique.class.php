
<?php
include_once (__DIR__.'/database.class.php');

  class Statistique {

         
    public function numUser(){

        $database = new Database();
        $sql="SELECT COUNT(id) AS usid FROM admin";   
        $stmt= $database->connect()->prepare($sql);
        $stmt->execute();
        $dbstmt =$stmt->fetchAll(PDO::FETCH_ASSOC); 
        // $this->setStadStatistique($dbstmt);
         return $dbstmt; 
        }


        public function numCategory (){
            $database = new Database();
            $sql="SELECT COUNT(id) AS Cid FROM categorys";   
            $stmt= $database->connect()->prepare($sql);
            $stmt->execute();
            $dbstmt =$stmt->fetchAll(PDO::FETCH_ASSOC); 
            // $this->setStadStatistique($dbstmt);
             return $dbstmt; 
        }

        public function numArticls(){

            $database = new Database();
            $sql="SELECT COUNT(id) AS Aid FROM articles";   
            $stmt= $database->connect()->prepare($sql);
            $stmt->execute();
            $dbstmt =$stmt->fetchAll(PDO::FETCH_ASSOC); 
            // $this->setStadStatistique($dbstmt);
             return $dbstmt; 


        }

        public function numAdminPost($id){

            $database= new Database();
            $sql="SELECT count(user) FROM articles
            WHERE user= '$id'";   
            $stmt= $database->connect()->prepare($sql);
            $stmt->execute();
            $dbstmt =$stmt->fetchAll(PDO::FETCH_ASSOC); 
            // $this->setStadStatistique($dbstmt);
             return $dbstmt; 



        }


    }
     




  



?>
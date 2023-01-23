<?php 
include_once ('../classes/crud.class.php');
include_once ('../classes/crud.category.php');
include_once ('../classes/statistique.class.php');
include_once ('../classes/admin.class.php');
// include_once ('../pages/dashboard.php');

if(isset($_POST['save']))  insertArtic(); 



    function insertArtic(){ 
        $id='';
        $id_user= $_POST['id_user'];
        $category = $_POST['category'];
        $title = $_POST['title'];
        $image = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        $description = $_POST['description'];
        $date = $_POST['date']; 
        // echo $image;
        
        // $image='';

        // var_dump("this is id_user" . $id_user);
        // var_dump($category);
        // var_dump($title);
        // var_dump($description);
        // var_dump($date);
        $insert = new Article ($id,$id_user,$category,$title,$image,$description,$date);
        $insert->insertarticle();
        
        
            header('location:../pages/dashboard.php');
        
    }

     // for delete article 
     if(isset($_POST['article-delete-btn'])) deletearticle();

     function deletearticle(){
        $id= $_POST['article-delete-btn'];
     $deletearticle = new Article();
     $deletearticle->deleteArticle($id);
     header('location:../pages/dashboard.php');


     }

    //  for update article 
    if (isset($_POST['article-update'])) updaterticle();
      
    function updaterticle(){

       $id=$_POST['id'];
      $category=$_POST['category'];
      $title=$_POST['title'];
      $image = $_FILES['image']['name'];
      $description=$_POST['description'];
      $date=$_POST['date'];
    //     echo $category ;
    //   die() ;
    //   echo $image;
    if($image){
        $image_temp = $_FILES['image']['tmp_name'];
        $upload_file = '../assets/img/' . $image;
        move_uploaded_file($image_temp, $upload_file);
        $update = new Article ($id,'',$category,$title,'',$description,$date);
      $update->updatearticle($image);
      header('location:../pages/dashboard.php');
    }
    else{ 
        $update = new Article ($id,'',$category,$title,'',$description,$date);
        $update->updatearticlewithoutimage();
        header('location:../pages/dashboard.php');
    }
      

        
      

    }



    //  for insert category 
    if(isset($_POST['save-bn'])) insertCatego();
                                  
        function insertCatego(){
         $namecategoey= $_POST['Name'];

         $insertC = new Category($id,$namecategoey);
         $insertC->insertcategory();
         header('location:../pages/category.php');



    }

        // for update category 
        if(isset($_POST['update-bn'])) update();
     
        function update(){ 
           $id=$_POST['ID'];
           $name=$_POST['Name'];
        //    echo $id;
        //    echo $name;
        $deletecategory= new Category($id,$name);
        $deletecategory->updateCategory();
        header('location:../pages/category.php');
       }

     // for delete categoty
     if(isset($_POST['delete-btn'])) delete();
     
     function delete(){ 
        $id=$_POST['delete-btn'];
        // echo $id;
     $deletecategory= new Category();
     $deletecategory->deleteCategory($id);
     header('location:../pages/category.php');
    }
    
    // for category modal 
    $category= new Article ();
    $dbcategory=$category->selectcategory();
    // for display data 
    $displayarticle = new Article();
    $displayarticl=$displayarticle->displayarticle(); 
   


    // statistique of post if user 
    $postuser = new  Statistique();
    $postUSER= $postuser->numAdminPost($_SESSION['id']);
    // statistique for post 
    $statpost = new Statistique();
    $statistiquepost=$statpost->numArticls();
    // statistique for category 
    $statcategory = new Statistique();
    $statistiquecategory= $statcategory->numCategory ();
   // statistique for user 
   $statuser = new Statistique();
   $statistiqueuser=$statuser->numUser();
//    var_dump($statistiqueuser);

?>
    

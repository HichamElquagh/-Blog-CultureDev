<?php 
include_once ('../classes/crud.class.php');
// include_once ('../pages/dashboard.php');

if(isset($_POST['save'])) {
        $id_user= $_POST['id_user'];
        $category = $_POST['category'];
        $title = $_POST['title'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $date = $_POST['datetime']; 
          
        $insert = new Article ($id_user,$category,$title,$image,$description,$date);
        $insert->insertarticle();
        // if ($insert == true) {
            header('location:../pages/dashboard.php');
        // }
    }
    // for category modal 
    $category= new Article ();
    $dbcategory=$category->selectcategory();
    // for display data 
    $displayarticle = new Article();
    $displayarticl=$displayarticle->displayarticle(); 
    // print_r ($displayarticl);


   

?>
    
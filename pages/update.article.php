
<?php
 include_once('../classes/crud.class.php');
  
 if (isset($_GET['id'])){ 
    $id=$_GET['id'];
    // echo $id
    $showedit = new Article();
    $showdata= $showedit->editarticle($id);
//    print_r ($displayarticl); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main CSS-->
    <link href="../assets/css/style.css" rel="stylesheet" >

<div class="container" id="modal"&>
    <div class="app-content">
        <form action="" method="POST" id="form" data-parsley-validate>
            <div class="modal-header">
                <h5 class="modal-title">Edit Match</h5>
            </div>
            <div class="modal-body">
                                <h6 class="modal-title my-2" id="exampleModalLabel">Category</h6>
                        <select class="form-select" id="selectstatus" name="category"
                            aria-label="Default select example">
                            <option selected>Category </option>

                                        <option value="<?php echo $show["id"] ?>"><?php echo $show["category_article"] ?> </option>
                        </select>
                             <div>
                            <input type="hidden" class="form-control" id="recipient-name" value="<?php echo $show["id_article"] ?>" name="id_user">
                            </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="article">Title</label>
                            <input type="text"  class="form-control" value="<?php echo $show['title'] ?>" id="recipient-name" name="title">
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label" id="image">image</label>
                            <input type="file" class="form-control" value="<?php echo $show['image'] ?>" id="images" name="image">
                        </div>
                         
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Description</label>
                            <input type="text" class="form-control" id="recipient-name" value="<?php echo $show['description'] ?>" step="any" name="description">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Datetime</label>
                            <input type="date" class="form-control" value="<?php echo $show['datetime'] ?>" id="recipient-name" step="any" name="datetime">
                        </div>
                    </div>
                    
            <div class="modal-footer">
                <a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
                <button type="submit" name="updateMatch" class="color btn  text-light task-action-btn" id="save-btn">Save changes</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
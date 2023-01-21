<?php
include '../include/head.php';
include '../scripts.php/crud.scripts.php';
//  $title = 'dashboard';


?>


<div class="cont"> 
  <div class="sidebar">
    <a onclick="arctivearticle();" class="active" href="dashboard.php">Article</a>
    <a  href="#news">Category</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
       <div class="cont-body container">
        
         <div class="statt row ">
           <div class="card-statistique   col-md-2  col-5 ">
           </div>
           <div class="card-statistique  col-md-2  col-5 ">

           </div>
           <div class="card-statistique  col-md-2  col-5 ">
           </div>
           
           <div class="card-statistique  col-md-2 col-5">
           </div>
         </div>


       <div class="tab table-responsive articleTable">
      <!-- <div class="form-group w-25 my-3 d-flex ">
         <div class="d-flex justify-content-end my-3">
        <input class="w-25" type="text" class="form-control" id="recipient-name" name="insertcategory"> -->
        <button class="btn mb-3 float-end btn-dark px-4 rounded-pill btn-cart" id="btntask" data-bs-toggle="modal"
                data-bs-target="#modal"><i class="fa fa-plus"></i>Add Category</a></button>
        
      <table class="table">
          <thead>                                                        
            <tr class="table-dark">
              <th scope="col">#</th>
              <th scope="col">Category</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
           
          </thead>
          <tbody>
            <tr>
            
                                        
            <?php foreach($dbcategory as $categotymodal):?>
              <th scope="row">1</th>
              <td id="Categoryvalue<?php echo $categotymodal['id'];?>"> <?php echo $categotymodal["category_article"] ?></td>
              <td > <button onClick="getCategoryvalue(<?php echo $categotymodal['id'];?>);" data-bs-toggle="modal"
              data-bs-target="#modal" > <i class=" text-success  fa fa-edit"></i></button> </td>
              <td><i class=" text-danger fa fa-trash"></i></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
</div>
 
<!-- MODAL Category -->
<div class="modal fade" id="modal">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal"
                id="modalboton">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
       
      <form action="../scripts.php/crud.scripts.php" method="POST" id="form" >
                    <div class="modal-body">
                    <div class="form-group">
                            <input type="hidden" class="form-control" id="inputhiddenid" name="ID">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="article">Name</label>
                            <input type="text" class="form-control" id="valuecategory" name="Name">
                        </div>
                       
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="save-bn" class="btn btn-primary" data-bs-dismiss="modal"
                            id="saveBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>           
     <!-- <script src="../assets/js/scripts.js"></script> -->
    <!-- <script src="../assets/js/scripts.js"></script> -->
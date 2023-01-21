<?php
include '../include/head.php';
include '../scripts.php/crud.scripts.php';
//  $title = 'dashboard';


?>


    
<div class="cont"> 
  <div class="sidebar">
    <a   class="article" href="#home">Article</a>
    <a  class ="category" onclick="activecategory();"   href="category.php">Category</a>
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
       <div class="  mt-4">
                <button class="btn mb-3 float-end btn-dark px-4 rounded-pill btn-cart" id="btntask" data-bs-toggle="modal"
                data-bs-target="#modal"><i class="fa fa-plus"></i> Add Article </a>
            </div>
              <table class="table ">
          <thead>
            
            <tr class="table-dark">
              <th scope="col">#</th>
              <th scope="col">Category</th>
              <th scope="col">Image</th>
              <th scope="col"> Title</th>
              <th scope="col">Desciption</th>
              <th scope="col">Date</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
           
          </thead>
          <tbody>
            <tr>
            <?php foreach($displayarticl as $display):?>
              <th scope="row">1</th>
              <td><?php echo  $display['Carticle']?></td>
              <td><?php echo  $display['image']?></td>
              <td><?php echo $display['title']?></td>
              <td> <?php echo $display['description']?></td>
              <td> <?php echo  $display['datetime']?></td>
              <td><a href="update.article.php?id=<?php echo  $display['id_article']  ?>"><i class=" text-success  fa fa-edit"></i></a> </td>
              <td><i class=" text-danger fa fa-trash"></i></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
      <div class="categoryTable">
      <!-- <div class="form-group w-25 my-3 d-flex "> -->
        <div class="d-flex justify-content-end my-3">
        <input class="w-25" type="text" class="form-control" id="recipient-name" name="insertcategory">
        <button class="btn mb-3 float-end btn-dark px-4 rounded-pill btn-cart" id="btntask" data-bs-toggle="modall"
                data-bs-target="#modall"><i class="fa fa-plus"></i>Add Category</a>
        </div>
        
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
            <?php foreach($displayarticl as $display):?>
              <th scope="row">1</th>
              <td><?php echo  $display['Carticle']?></td>
              <td><a href="update.article.php?id=<?php echo  $display['id_article']  ?>"><i class=" text-success  fa fa-edit"></i></a> </td>
              <td><i class=" text-danger fa fa-trash"></i></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
</div>
 
 <!-- TASK MODAL -->


 
 <div class="modal fade" id="modal">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal"
                id="modalboton">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
       
      <form action="../scripts.php/crud.scripts.php" method="POST" id="form" ">
                    <div class="modal-body">
                        <h6 class="modal-title my-2" id="exampleModalLabel">Category</h6>
                        <select class="form-select" id="selectstatus" name="category"
                            aria-label="Default select example">
                            <option selected>Category </option>
                                    <?php foreach($dbcategory as $categotymodal):?>
                                        <option value="<?php echo $categotymodal["id"] ?>"><?php echo $categotymodal["category_article"] ?> </option>
                                    <?php endforeach;?>
                        </select>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="recipient-name" value="<?php echo $_SESSION["id"] ?>" name="id_user">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="article">Title</label>
                            <input type="text" class="form-control" id="recipient-name" name="title">
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label" id="image">image</label>
                            <input type="file" class="form-control" id="images" name="image">
                        </div>
                         
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Description</label>
                            <input type="text" class="form-control" id="recipient-name" step="any" name="description">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" id="Title">Datetime</label>
                            <input type="date" class="form-control" id="recipient-name" step="any" name="datetime">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="save" class="btn btn-primary" data-bs-dismiss="modal"
                            id="saveBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>           

          




















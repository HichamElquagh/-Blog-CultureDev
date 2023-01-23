<?php
include '../include/head.php';
include '../scripts.php/crud.scripts.php';
//  $title = 'dashboard';


?>


    
<div class="cont "> 
  <div class="sidebar">
    <a   class="article" href="#home">Article</a>
    <a  class ="category" onclick="activecategory();"   href="category.php">Category</a>
    <a href="#contact">Contact</a>
    <a href="#about">Logout</a>
  </div>
       <div class="cont-body h-auto  container">
         <div class="statt row ">
         <div class=" text-light card-statistique   col-md-2  col-5 ">
           <div class="text-light">
              <i class=" fa-sharp fa-solid fa-upload fs-2 mt-3 text-white me-2"></i>
              <span class="fs-1 "><?php echo  $postUSER[0]['count(user)']?></span>
              <h3>My Post</h3>
           </div>
          </div>
          <div class=" text-light card-statistique  col-md-2 col-5">
          <div class="text-light">
              <i class="fa fa-users fs-2 mt-3 text-white me-2"></i>
              <span class="fs-1 "><?php echo $statistiqueuser[0]['usid']?></span>
              <h3> Admins</h3>
           </div>
           </div>
                             
           <div class=" text-light card-statistique  col-md-2  col-5 ">
           <div class="text-light">
              <i class="fa-solid fa-signs-post fs-2 mt-3 text-white me-2"></i>
              <span class="fs-1 "><?php echo $statistiquepost[0]['Aid']?></span>
              <h3>Total Post</h3>
           </div>
           </div>
           <div class=" text-light card-statistique  col-md-2  col-5 "> 
           <div class="text-light">
              <i class="fa-solid fa-signs-post fs-2 mt-3 text-white me-2"></i>
              <span class="fs-1 "><?php echo $statistiquecategory[0]['Cid']?></span>
              <h3>Category</h3>
           </div>
          </div>
          </div> 
         

         <div class="  mt-4">
                <button class="btn mb-3 float-end btn-dark px-4 rounded-pill btn-cart" id="btntask" data-bs-toggle="modal"
                data-bs-target="#modal"><i class="fa fa-plus"></i> Add Article </a>
            </div>
       <div class="tab table-responsive articleTable">
              <table class="table table-striped "id="table">
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
            <tr class="update">
            <?php foreach($displayarticl as $display):?>
              <th scope="row">1</th>
              <td id="categoryValue<?php echo  $display['CategoID'];?>"><?php echo  $display['Carticle']?></td>
              <td > <img class="rounded"  id="imageValue<?php echo  $display['id_article'];?>"  style="width:8rem;" src="../assets/img/<?php echo $display['image']?>"></td>
              <td id="titleValue<?php echo  $display['id_article'];?>"><?php echo $display['title']?></td>
              <td id="descriptionValue<?php echo  $display['id_article'];?>"> <?php echo $display['description']?></td>
              <td id="datetimeValue<?php echo  $display['id_article'];?>"> <?php echo  $display['datetime']?></td>
              <td id="<?php echo  $display['id_article'];?>"> 
              <button class="bg-light border-0"  onClick="getArticlevalue(<?php echo $display['id_article'];?>,<?php echo $display['CategoID'];?>);" data-bs-toggle="modal"
              data-bs-target="#modal" id="editbtn"><i class=" text-success  fa fa-edit"></i></a> </td>
              <form action="../scripts.php/crud.scripts.php" method="POST" id="form" >
              <td> <button type="submit" value="<?php echo $display['id_article'];?>" class="bg-light border-0" name="article-delete-btn" ><i class=" text-danger fa fa-trash"></i></button></td>
            </form>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
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
        
        <form action="../scripts.php/crud.scripts.php" method="POST" id="form" enctype="multipart/form-data">
          <div id="allForms">
            <div class="modal-body" id="form1">
                          <div class="form-group">
                              <label for="recipient-name" class="col-form-label" id="Title">Datetime</label>
                              <input type="date" class="form-control" id="Date_value" step="any" name="date[]">
                          </div>
                          <div class="form-group">
                              <label for="recipient-name" class="col-form-label" id="article">Title</label>
                              <input type="text" class="form-control " id="Title_value" name="title[]">
                          </div>
                          
                          <div class="form-group">
                              <label for="recipient-name" class="col-form-label" id="Title">Description</label>
                              <textarea class="form-control " id="Description_value" rows='4' name="description[]"></textarea>
                          </div>
                          
                          <div class="form-group">
                              <label for="image" class="col-form-label" id="image">image</label>
                              <input type="file" class="form-control " id="Image_value"  name="image" accept=".jpg, .png, .jpeg, .webp">
                          </div>

                          <img id="Image" src="../assets/img/" style="width:140px;" alt="image">
                          <input id='hiddenpic' type="hidden" name="hiddenphoto">
                              <h6 class="modal-title my-2" id="exampleModalLabel">Category</h6>
                              <select class="form-select" id="Category_value" name="category[]"
                                  aria-label="Default select example">
                                  <option selected>Category </option>
                                          <?php foreach($dbcategory as $categotymodal):?>
                                              <option id="Category_value" value="<?php echo $categotymodal["id"] ?>"><?php echo $categotymodal["category_article"] ?> </option>
                                          <?php endforeach;?>
                              </select>
                              <div class="form-group">
                                  <input type="hidden" class="form-control" id="idArticle"  name="id">
                              </div>
                              <div class="form-group">
                                  <input type="hidden" class="form-control" id="recipient-name" value="<?php echo $_SESSION["id"] ?>" name="id_user[]">
                              </div>
                              

                              <center>
                              <a onClick="CopyAr();" class="mt-2 btn btn-primary">Another</a >
                              </center>
                        </div>
  
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <button type="submit" name="save" class="btn btn-primary" data-bs-dismiss="modal"
                              id="saveBtn">Save</button>
                              <button type="submit" name="article-update" class="btn btn-primary" data-bs-dismiss="modal"
                              id="article-update-btn">Update</button>
                      </div>
                </form>
            </div>
        </div>
    </div>           

    <script src="../assets/js/datatable.js"></script>
    
    


  

          




















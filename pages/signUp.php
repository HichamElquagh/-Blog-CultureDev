<?php 

include_once ('../scripts.php/signup.script.php');
$adminn = new Getadmin();
$adminn->signupUser();
// if(isset($_POST['signup'])){
//   $userController->signupUser();
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title></title>
</head>
<body> 

<div class=" d-flex justify-content-end ">
        <div class=" form-box row mx-4  p- " id="form-bx">
            <div class=" col-md-5 col">
                <form  method="POST" id="form" class="form" >
                    <h2 class="  fw-bold text-light mb-3">Sign up</h2>
                    <div class=" mb-3">
                        <input type="text" class="form-control" id="flo" aria-describedby="emailHelp" name="name"
                            placeholder="user name" required />
                    </div>
                     
                    <div class=" mb-3">
                        <input type="email" class="form-control" id="flo" aria-describedby="emailHelp" name="email"
                            placeholder="Email address" required />
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                            placeholder="Password" />
                     </div>
                     <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="Rpassword"
                            placeholder=" Confirm Password" />
                     </div>

                    <button type="submit" class="btn login-btn text-light" name="signup" >Sign up</button>
                    <div class="mt-3">
                        <span class="text-light">if you have account?</span> <a href="login.php" class="text-success">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

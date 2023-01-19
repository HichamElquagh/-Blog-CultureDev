<?php


   include_once ('../classes/admin.class.php');
//    session_start();
//    include_once('../pages/signUp.php');
//    include_once('../pages/login.php');
   
   
   class Getadmin extends Admin {
   
         /* SignUp */
       public function signupUser(){
           if($_SERVER['REQUEST_METHOD'] == 'POST'){
               if(isset($_POST['signup'])){             
                   extract($_POST);

                   echo $_SESSION["name"] = $name;
                   echo $_SESSION["email"] = $email;
                   echo $_SESSION["password"] = $password;
                   echo $_SESSION["Rpassword"] = $Rpassword;
                   $this->validateSignup($name,$email,$password,$Rpassword);
               }
               }
           
       }
       
   
       public function validateSignup($name,$email,$password,$RepeatPassword){
           if(!$this->emptyInputSignup($name, $email, $password, $RepeatPassword)){
               $_SESSION['error'] = 'Inputs are required';
            //    echo $userName;
               header("location: ../pages/signUp.php?error=emptyinput");
               exit();
           }
           elseif(!$this->invalidName($name)){
               $_SESSION['error'] = 'Provide a valid username';
               header("location: ../pages/signUp.php?error=Errorusername");
               exit();
           }
           elseif(!$this->invalidEmail($email)){
               $_SESSION['error'] = 'Provide a valid email';
               header("location: ../pages/signUp.php?error=Erroremail");
               exit();
           }
           elseif(!$this->passwordAdmin($password, $RepeatPassword)){
               $_SESSION['error'] = 'Passwords doesnt match';
               header("location: ../pages/signUp.php?error=Matchpassword");
               exit();
           }
           elseif(!$this->checkEmailSignup($email)){
               $_SESSION['error'] = 'This email already exist';
               header("location: ../pages/signUp.php?error=emailtaken");
               exit();
           }else{
               
               $this->signUp($name, $email, $password);
               header('location: ../pages/login.php');
           }
   
   
       }
        /*  Login */
        public function loginUser(){
           // if($_SERVER['REQUEST_METHOD'] == 'POST'){
               if(isset($_POST['login'])){
   
                   extract($_POST);
                   $this->validateLogin($email,$password);
   
               }
           // }
       }
   
       public function validateLogin($email,$password){
   
           if(!$this->emptyInputLogin($email, $password)){
               $_SESSION['error'] = 'Inputs are required';
               header("location: ../pages/login.php?error=emptyinput");
               exit();
           }elseif(!$this->invalidEmail($email)){
               $_SESSION['error'] = 'Provide a valid email';
               header("location: ../pages/login.php?error=Erroremail");
               exit();
           }else{
               $this->login($email, $password);
               header('location: ../pages/dashboard.php');
           }
       }
   
   /*  Validation-signup= */

   function emptyInputSignup($name,$email,$password,$RepeatPassword): bool
   {
       if(empty($name) ||empty($email) ||empty($password) ||empty($RepeatPassword)){
           $result = false;
       }else{
           $result = true;
       }

       return $result;
   }
   function invalidEmail($email): bool
  {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $result = false;
      }else{
          $result = true;
      }

      return $result;
  }

  function invalidName($name): bool
  {
      if(!preg_match("/^([a-zA-Z0-9]*[ ]{0,1}[a-zA-Z0-9]*)$/",$name )){
          $result = false;
      }else{
          $result = true;
      }

      return $result;
  }
  function passwordAdmin($password,$RepeatPassword): bool
  {
      if($password !== $RepeatPassword){
          $result = false;
      }else{
          $result = true;
      }
      return $result;
  }
  function checkEmailSignup($email): bool
  {
      if($this->checkEmailSignupBD($email)){
          $result = false;
      }else{
          $result = true;
      }
      return $result;
  }
/* Validation-login*/   
  
function emptyInputLogin($email,$password): bool
{
   if(empty($email) ||empty($password)){
       $result = false;
   }else{
       $result = true;
   }

   return $result;
}

}



?>
<?php
session_start();
require_once 'db.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirmpassword'];
    $after_hash = password_hash($password,PASSWORD_DEFAULT);
    

    if (empty($name)) {
      
      $_SESSION['name_error'] = "Name is required";
      
    }

   
if (empty($email)) {
 
  $_SESSION['email_error'] = "Email is Required";
  
 
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  
  $_SESSION['invalid_email'] = "Invalid Email Address";
    
    
}
if (empty($password)) {
  
  $_SESSION['pass_error'] = "Password is Required";
  
 
}
if (empty($confirm_pass)) {
  
  $_SESSION['confirm_pass_error'] = "Confirm_password is Required";
  
 
}
if($password == $confirm_pass){
  $count_select = "SELECT count(*) AS total FROM users WHERE EMAIL =  '$email'"; 
  $count_query = mysqli_query($bd_connect, $count_select);
  $after_assoc = mysqli_fetch_assoc($count_query);

    if( $after_assoc['total'] == 0){
      $insert = "INSERT INTO users (NAME, EMAIL, PASSWORD) VALUES ('$name', '$email', '$after_hash')";
      $insert_query = mysqli_query($bd_connect, $insert);
      $_SESSION['reg_success'] = "Registration successfull";
      header("location: login.php") ;

    }    else{
      $_SESSION['used_email'] = "This email is already taken";
      header("location: registration.php") ;
    }
}else{

 $_SESSION['pass_&_confirm_pass_error'] = "Confirm_password is wrong";
 header("location: registration.php") ;
 
}





die();



if($password == $confirm_pass){
  $count_select = "SELECT count(*) AS total FROM users WHERE EMAIL =  '$email'"; 
  $count_query = mysqli_query($bd_connect, $count_select);
  $after_assoc = mysqli_fetch_assoc($count_query);

 if($after_assoc['total'] == 0){
  $insert = "INSERT INTO users (NAME, EMAIL, PASSWORD) VALUES ('$name', '$email', '$password')";
  $insert_query = mysqli_query($bd_connect, $insert);
  header("location: registration.php") ;

 }else{
    $_SESSION['used_email'] = "This email is already taken";
    header("location: registration.php") ;
 }

 
}





// $firstName = $lastName = $birthdayDate = $gender = $emailAddress = $phoneNumber = $subject = $confirmCheck = null;
$firstNameError = $lastNameError = $birthdayDateError = $genderError = $emailAddressError = $phoneNumberError = $subjectError = $confirmCheckError = $userNameError = null;
$flag= true;


// storage value after submit 
if (isset($_POST['submit'])) {
   $firstName = $_POST['firstName'] ;
   $lastName = $_POST['lastName'] ;
   $birthdayDate = $_POST['birthdayDate'] ;
   $gender = $_POST['gender'] ;
   $emailAddress = $_POST['emailAddress'] ;
   $phoneNumber = $_POST['phoneNumber'] ;
   $userName = $_POST['userName'] ;
   $confirmCheck = '';

   if(isset($_POST['confirmCheck'])){
    $confirmCheck = $_POST['confirmCheck'];
   }


// first name error
//=================================
if (empty($_POST['firstName'])   ) {

  $firstNameError = "First Name is required";
  $flag = false;
} elseif(preg_match_all("/^[A-Za-z\s\.]{6,32}+$/", $firstName ) == false ) {

  $firstNameError = "Invalid First Name ";
  $flag = false;
} else {

  $firstNameError = "";
}

// Birthday  name error
//===============================
if (empty($_POST['birthdayDate']) ) {

  $birthdayDateError = "Date Of Birth is required";
  $flag = false;
}
 elseif (preg_match_all("/^[0-9]{1,2}$/", $birthdayDate) == false) {

  $birthdayDateError = "Invalid Age";
  $flag = false;
 }
 elseif ( $birthdayDate < 18 ){

 $birthdayDateError = " Your Must be 18+ ";
 $flag = false;
}
else{

  $birthdayDateError = "";
 }


// Email  name error
//===============================
if (empty($emailAddress)) {

  $emailAddressError = " Email is Required";
  $flag = false;
}
elseif( filter_var($emailAddress, FILTER_VALIDATE_EMAIL) == false ){
   
    $emailAddressError = " Invalid Email Address";
    $flag = false;
}
else{
  $emailAddressError = "";
}


// Phone Number error
//===============================
if (empty($phoneNumber)) {

  $phoneNumberError = " Phone Number is Required";
  $flag = false;
}
elseif( preg_match_all('/^[0-9]{11,11}$/', $phoneNumber) == false  ) {
   
    $phoneNumberError = " Invalid Phone Number";
    $flag = false;
}
else{
  $phoneNumberError = "";
}

// confirmCheck  error
//===============================
 if(empty($_POST['confirmCheck'])){

  $confirmCheckError = " You Need to Allow Term a Conditions";
  $flag = false;

 } else {

  $confirmCheckError = "";

 }

// user name  error
//===============================
if(empty($_POST['userName'])){

  $userNameError = " User name is required";
  $flag = false;

 } elseif( preg_match_all("/^[a-zA-Z0-9]{5,12}[^\W]+$/", $userName) == false ){
  $userNameError = " Don't use any (white space and special characters) in user Name";
  $flag = false;

 }
  else {

  $userNameError = "";

 }

  // clearing old value after submit
  if($flag){
    $formSuccess = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"> Your Form is Submited! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </div>";
    $_POST = '';
  }

  
}

//  old value functions are
function oldValue($fieldName){

  if (isset($_POST[$fieldName])) {
   return $_POST[$fieldName];
  }
   else {
     return '';
   }

}





// echo  "this is First error ". $firstNameError."<br>";
// echo  "this is First type of Firsname ".gettype($firstName)."<br>";
// echo "this is First Name ".$firstName;
?>

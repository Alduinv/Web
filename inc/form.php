<?php

$firstName =    $_POST['firstName'];
$lastName =     $_POST['lastName'];
$email =        $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if(isset($_POST['submit'])){
    
if(empty($firstName)){
    $errors['firstNameError' ] = 'First Name empty';
}
if(empty($lastName)){
    $errors['lastNameError' ] ='Last Name empty';
}
if(empty($email)){
    $errors['emailError' ] = 'Email empty';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError' ] = 'Write the correct email';
} 

if(!array_filter($errors)){
    $firstName =    mysqli_real_escape_string ($conn, $_POST['firstName']); 
    $lastName =     mysqli_real_escape_string ($conn, $_POST['lastName']); 
    $email =        mysqli_real_escape_string ($conn, $_POST['email']); 

    $sql = "INSERT INTO users(firstName, lastName, email) 
    values ('$firstName', '$lastName', '$email' )";

if(mysqli_query($conn, $sql)){
    header('Location:' . $_SERVER['PHP_SELF'] );
  } else{
    echo 'Error: ' . mysqli_error($conn);
  }

}


} 






  
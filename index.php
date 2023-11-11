<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
 
?>


<?php include_once './parts.header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Punny headline</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>
<!--
  <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
-->
<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    </div>
  </div>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
  <h3> enter your info </h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">firstName</label>
    <input type="text" name="firstName" class="form-control" id="firstName"  value = "<?php echo $firstName ?>" >
    <div  class="form-text error"><?php echo $errors['firstNameError'] ?> </div>
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">lastName</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value = "<?php echo $lastName ?>" >
    <div  class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="email"  value = "<?php echo $email ?>" >
    <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>




<div class="row">
<?php foreach($users as $user) : ?>
 <h1> <?php echo htmlspecialchars($user['firstName']) 
 . ' '. htmlspecialchars($user['lastName']) . '<br>' 
 . htmlspecialchars($user['email']);  ?> </h1>

<?php endforeach; ?> 


<?php include_once './parts.footer.php'; ?>
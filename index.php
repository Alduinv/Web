<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
 
?>


<?php include_once './parts.header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">

    <img src="images/images.jpeg" alt="" >
      <h1 class="display-4 fw-normal">Punny headline</h1>
      <p class="lead fw-normal"> pages.</p>
      <h3 id="#countdown"></h3>
      <p class="lead fw-normal"> pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="container">
    <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
    </div>
  </div>

 

<div class="container">
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




<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary" >
choose winner
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">The winner is</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"> <?php echo htmlspecialchars($user['firstName']) 
         . ' '. htmlspecialchars($user['lastName'])  ?> </h1>

        <?php endforeach; ?> 
      </div>
     
    </div>
  </div>
</div>






<div class="row">



<?php include_once './parts.footer.php'; ?>
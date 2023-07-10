<?php 

include 'header.php';
?>

<section class="container"> 

<h1>Registration Form</h1>
<form action="register.php" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" name="fname" class="form-control"  required/>
        <label class="form-label" for="form6Example1">Full Name</label>
      </div>
    </div>


  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" name="email" class="form-control"  required/>
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="password" id="form6Example6" name="password" class="form-control" />
    <label class="form-label" for="form6Example6">Password</label>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" name="contact" class="form-control" />
    <label class="form-label" for="form6Example6">Contact</label>
  </div>


  <button type="submit" name="register" class="btn btn-primary btn-block mb-4">Register</button>
</form>

</section>

<?php include 'footer.php' ?>


<?php 

if(isset($_POST['register'])){

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO `registration` (`fname`, `email`, `password`, `contact`) 
    VALUES ( '$fname', '$email', '$password', '$contact')";


$res = mysqli_query($conn , $query);

if($res){

    echo "<script>Swal.fire(
        'Success!',
        'You have been registered !',
        'success'
    ); window.location.href = 'index.php' </script>";



}

// print_r($_POST);
}




?>
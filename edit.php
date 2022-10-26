

<?php

include "connection.php";
$id = "";
$name ="";
$email= "";
$phone="";

$error="";
$success = "";

if ($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
        header("location:crud100/index.php");
        exit;
    }
    $id = $_GET['id'];
    $sql = "select * from crud1 where id =$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
        header("location:crud100/index.php");
        exit;
    }
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
}
else{
    $id =$_POST["id"];
     $name =$_POST["name"];
      $email =$_POST["email"];
       $phone=$_POST["phone"];

       $sql ="update crud1 set name ='$name', email ='$email', phone='$phone' where id='$id'";
       $result = $conn->query($sql);
}




?>
<?php
include "connection.php";

if(isset ($_POST['submit'])){
    $name = $_POST['name'];
    $email =$_POST['email'];
    $phone = $_POST['phone'];
    $q= " INSERT INTO `crud1`(`name`, `email`, `phone`) VALUES('$name', '$email', '$phone')";
    //   $query = mysqli_query($conn,$q);
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>

      
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Add New</a>
        </li>
   </ul>
 </div>
  </div>
   </nav>

    <div class="col-lg-6 m-auto">
    
    <form method ="post">
        <br><br><div class="card">
        
        <div class="card-header  bg-primary">
        <h1 class="text-white text-center"> Update Member </h1>

</div> <br>

<input type="hidden" name="id" value="<?php echo $id?>" class="form-control"> <br>

<label> NAME: </label>
<input type="text" name ="name" value="<?php echo $name?>" class="form-control"> <br>

<label> EMAIL: </label>
<input type ="text" name ="email" value="<?php echo $email?>" class="form-control"> </br>

<label> PHONE: </label>
<input type ="text" name ="phone" value="<?php echo $phone?>" class="form-control"> </br>

<button class="btn btn-success" type="submit" name ="submit"> Submit </button> <br>


</div>
</form>




        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
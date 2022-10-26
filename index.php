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

      <
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
  <div class="container my-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">JOINING DATE</th>
       <th scope="col">ACTIONS</th>

    </tr>
  </thead>
  <tbody>
    <?php 
    include "connection.php";
    $sql = "select * from crud1";
    $result = $conn->query($sql);

    if(!$result){
        die("Invalid query");
    }
    while($row=$result->fetch_assoc()){
      echo "
    
    <tr>
      <th >$row[id]</th>
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
       <td>$row[join_date]</td>
       <td>
       
       <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit </a>
       <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete </a>
        </td>
       
       </tr>
    ";
    }
    ?>
  </tbody>
</table>
</div>
  
  
  
  
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
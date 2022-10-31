<?php 
require("db.php");
$a = "";
if(isset($_POST['uname']) && isset($_POST['pass'])){
  $uname = $_POST['uname'];
  $pass = md5($_POST['pass']);
  if($uname == "" || $pass == ""){
    $a = "Fill all data";
  } else {
    $result = mysqli_query($con,"SELECT * FROM users WHERE username=\"$uname\" AND password=\"$pass\";");
    if(mysqli_num_rows($result)>0){
      session_start();
      $_SESSION["name"] = $uname;
      header("location: index.php");
    } else {
      $a = "User not found";
    }
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miguflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <body class="bg-dark">
    <div class="container d-flex " style="height:100vh;">
        <form class="m-auto w-50 border p-5 rounded-5 border-danger text-center text-white" method="POST">
            <img src="img/logo.png" width="70%">
            <p class="text-danger"><?php if($a!=""){echo $a;} ?></p>
            <div class="mb-3">
              <label for="uname" class="form-label">Username</label>
              <input name="uname" type="text" class="form-control" id="uname">

            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Password</label>
              <input name="pass" type="password" class="form-control" id="pass">
            </div>
            <button type="submit" class="btn btn-danger">Log-in</button>
          </form> 
    </div>
    
  </body>
</html>
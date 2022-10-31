<?php 
require("session.php");
require("db.php");
$result = mysqli_query($con,"SELECT * FROM videos");
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
    <div class="m-auto w-100 text-center">
    <h1 class="text-white">Avaliable content</h1><br>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Series</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Length</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
while($row = mysqli_fetch_row($result)){
    echo "<tr><td>$row[0]</td><td>$row[5]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td><a href=\"watch.php?id=$row[0]\"><button class=\"btn btn-info\">Watch</button></a></td></tr>";
}
?>
  </tbody>
    </div>
    </div>
    
  </body>
</html>
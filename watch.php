<?php 
require("session.php");
require("db.php");
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM videos WHERE id=$id");
$data = mysqli_fetch_row($result);
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
        <h1 class="text-white"><?php echo $data[1]; ?></h1>
    <video
      id="my-video"
      class="video-js"
      controls
      preload="auto"
      width="1200"
      height="600"
      data-setup="{}"0
    >
      <source src="<?php echo $data[4] ?>" type="video/mp4" />
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
      </p>
    </video>
    <br><br>
    <a href="index.php"><button class="btn btn-danger">Go back</button>
    </div>
    </div>
    
  </body>
</html>
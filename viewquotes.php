<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotify</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="main-style.css">
    <style type="text/css">
     @font-face {
  font-family: JosefinSans-VariableFont_wght;
  src: url(JosefinSans-VariableFont_wght.ttf);
}
.panel-body{
  font-family: JosefinSans-VariableFont_wght;
  font-weight: 400;
  font-size: 30px;

}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  height: 30px;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #111;
  color: white;
  text-align: center;
}

    </style>
</head>
<body >
<div class="container-fluid">
  <div class="row">
    <?php
    include('connect.php');
    $sql = "select * from data";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
      echo "<div class='col-md-12' style='margin-top: 20px;'>";
      echo "<div class='panel panel-primary'>";
      echo "<div class='panel-heading'>";
      echo $row['name']." [".$row['email']."]";
       echo "</div>";
      echo "<div class='panel-body'>";
      echo "“".$row['quote']."”";
    echo "</div></div></div>";
    }
    ?>
  </div>
</div> 
<div class="footer">
  <p style="font-size:15px;font-family: consolas; margin-top: 2px;">Made with&nbsp;<font color="red">&hearts;&nbsp;</font>by Sarfu</p>
</div>
</body>
</html>
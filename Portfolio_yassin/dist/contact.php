<?php include("connect/db.php");
$query = "SELECT * FROM contact";
$runquery = mysqli_query($db, $query);
if (!$db) :
  header("location:index.html");
endif;
$data = mysqli_fetch_array($runquery);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <title>Contact Me</title>
  </head>
  <body>
  <?php include("navbar/navbar.php"); ?>
    <main id="about">
      <h1 class="lg-heading">Contact <span class="text-secondary">Me</span></h1>
      <h2 class="sm-heading">
        This is how you can reach me...
      </h2>
      <div class="boxes">
        <div>
          <span class="text-secondary">Email: </span><?= $data['cemail'] ?>
        </div>
        <div><span class="text-secondary">Phone: </span><?= $data['Phone'] ?></div>
        <div>
          <span class="text-secondary">Address: </span><?= $data['Address'] ?>
        </div>
      </div>
    </main>

    <footer id="main-footer">
      Copyright &copy; 2020
    </footer>

    <script src="js/main.js"></script>
  </body>
</html>

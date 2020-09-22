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

    <title>View My Work</title>
  </head>
  <body>
  <?php include("navbar/navbar.php"); ?>

    <main id="work">
      <h1 class="lg-heading">My <span class="text-secondary">Work</span></h1>
      <h2 class="sm-heading">
        Check out some of my projects...
      </h2>
      <div class="projects">
      <?php
            include("connect/db.php");
            $query = "SELECT * FROM projects";
            $row = mysqli_query($db, $query);
            while ($Call = mysqli_fetch_array($row)) {
            ?>
        <div class="item">
          <a href="#!">
            <img src="img/projects/<?= $Call['projectpic'] ?>" alt="project 1" />
          </a>
          <a href="<?= $Call['projectlink'] ?>" class="btn-light"> <i class="fas fa-eye"></i> Project </a>
          <a href="<?= $Call['github'] ?>" class="btn-dark">
            <i class="fab fa-github"></i> Github
          </a>
        </div>
            <?php }?>
        <!-- <div class="item">
          <a href="#!">
            <img src="img/projects/project2.png" alt="project 1" />
          </a>
          <a href="#" class="btn-light"> <i class="fas fa-eye"></i> Project </a>
          <a href="#" class="btn-dark">
            <i class="fab fa-github"></i> Github
          </a>
        </div>
        <div class="item">
          <a href="#!">
            <img src="img/projects/project3.png" alt="project 1" />
          </a>
          <a href="#" class="btn-light"> <i class="fas fa-eye"></i> Project </a>
          <a href="#" class="btn-dark">
            <i class="fab fa-github"></i> Github
          </a>
        </div>
        <div class="item">
          <a href="#!">
            <img src="img/projects/project4.png" alt="project 1" />
          </a>
          <a href="#" class="btn-light"> <i class="fas fa-eye"></i> Project </a>
          <a href="#" class="btn-dark">
            <i class="fab fa-github"></i> Github
          </a>
        </div>
        <div class="item">
          <a href="#!">
            <img src="img/projects/project5.png" alt="project 1" />
          </a>
          <a href="#" class="btn-light"> <i class="fas fa-eye"></i> Project </a>
          <a href="#" class="btn-dark">
            <i class="fab fa-github"></i> Github
          </a>
        </div> -->
      </div>
    </main>

    <footer id="main-footer">
      Copyright &copy; 2020
    </footer>

    <script src="js/main.js"></script>
  </body>
</html>

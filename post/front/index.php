<?php
session_start();
echo $_SESSION['email'];

echo"<a href='logout.php'><input type='button' value='logout' name='logout'>";
if(isset($_SESSION['email'])){
 

}else{
    
  echo"<script>location.href='login.php'</script>";
}






?>


<!doctype html>
<html lang="en">

<head>
  <title>BUY SELL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <div class="wrap">

    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">social">
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
            </div>
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form action="#" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" placeholder="Type keyword to search...">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button"
              aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="index.html">BUY SELL</a></h1>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Travel</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="category.php">Asia</a>
                  <a class="dropdown-item" href="category.php">Europe</a>
                  <a class="dropdown-item" href="category.php">Dubai</a>
                  <a class="dropdown-item" href="category.php">Africa</a>
                  <a class="dropdown-item" href="category.php">South America</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="category.php">Lifestyle</a>
                  <a class="dropdown-item" href="category.php">Food</a>
                  <a class="dropdown-item" href="category.php">Adventure</a>
                  <a class="dropdown-item" href="category.php">Travel</a>
                  <a class="dropdown-item" href="category.php">Business</a>
                </div>

              </li>

            </ul>

          </div>
        </div>
      </nav>
    </header>
    <h1> 
    <!-- END header -->

    <section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4">Latest Posts</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
              <?php
              include 'configpost.php';
              $pic= mysqli_query($conn,"SELECT * FROM `product`");

              while($row = mysqli_fetch_array($pic)){
                ?>

               <div class='col-md-6'>
                <a href='blog-single.html' class='blog-entry element-animate'data-animate-effect='fadeIn'>
                  <img src="<?php echo $row["picture"];   ?>"  >
                  <div class='blog-content-body'>
                    <div class='post-meta'>
                      <span class='author mr-2'>BUY SELL</span>&bullet;
                      <span class='mr-2'><?php echo $row["prize"];   ?> </span> 
                      <span class='author mr-2'><?php echo $row["pname"];   ?></span>&bullet;
                      <span class='ml-2'><span class='fa fa-comments'></span> 3</span>
                    </div>
                    <h2> <?php echo $row["ptitle"];   ?></h2>
                  </div>
                </a>
              </div>
              <?php

              }
              ?>
               </div>

           


            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-12 text-center">
              <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                  <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                </ul>
              </nav>
            </div>
          </div>






        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
              <div class="bio-body">
                <h2>David Craig</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus
                  excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="postpage.php" class="btn btn-primary btn-sm rounded">Post</a></p>
                <p><a href="view_post.php" class="btn btn-primary btn-sm rounded">View</a></p>
                <p class="social">
                  <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
              </div>
            </div>
          </div>
          <!-- END sidebar-box -->


        </div>
      </div>
    </section>



  </div>

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#f4b214" />
    </svg></div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script> 


  <script src="js/main.js"></script>
</body>

</html>
<?php



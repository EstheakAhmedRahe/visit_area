<?php
session_start();
echo $_SESSION['email'];

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


    <form action="postadd.php" method="POST" enctype="multipart/form-data">
        <h1 class="text-center my-2 mb-5">Product Information</h1>

                <div class="mb-3">
                    <span>Product Name</span>
                    <input type="text" name="pname"class="form-control" placeholder="name" >
                </div>
                <div class="mb-3">
                    <span>Title of Product</span>
                    <input type="text" name="ptitle"class="form-control" placeholder="Title eg Product">
                </div>
                <div class="mb-3">
                    <span>Contact</span>
                    <textarea name="contact"class="form-control" placeholder="contact"></textarea>
                </div>
            </div>

        
                <div class="mb-3">
                    <span>Used Information</span>
                    <textarea name="usedinfo"class="form-control" placeholder="Used Information"></textarea>
                </div>
                <div class="mb-3">
                    <span>Details</span>
                    <textarea name="details"class="form-control" placeholder="Details"></textarea>
                </div>
                <div class="mb-3">
                    <span>Picture</span>
                    <input type="file" name="picture" class="form-control" placeholder="Picture" />
                </div>

                <div class="mb-3">
                    <span>Sell Prize</span>
                    <input type="text" name="prize" class="form-control" placeholder="Expected Prize" />
                </div>
               

                <div class="container text-center mt-3">
                    <button name="submit" type="submit"  class="btn btn-primary "> Add Post</button>
                </div>
            
    </form>
   

  


    










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
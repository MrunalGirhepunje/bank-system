<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Accurate Sparks Bank</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/icon.png">
    <script src="index.js"></script>
</head>
<body  style="background-color: snow;" onload="loader()">
<!-- loader for splash screen -->
<div id="loading">
    <div class="wrapper flex-center">
        <div class="container">
            <div class="container-dot dot-a">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-b">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-c">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-d">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-e">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-f">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-g">
            <div class="dot"></div>
            </div>
            <div class="container-dot dot-h">
            <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
    <div class="hero-content">
    <div class="container-fluid myclass" style="padding:0px; margin:0px; h">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color: Lavender; opacity:1;"> 
            <img  height="90"src="./images/iconimg.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold zoomIn animated" id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color: teal; ,font-family: 'raleway', cursive;font-size:2em;">
                &nbsp;Accurate Sparks Bank
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color: lavender; "> 
                    <li class="nav-item">
                        <a class="nav-link" href="create.php" style="color:teal;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <!-- <i class="material-icons"style="font-size: x-large;text-align:center;">
                                    account_circle
                                </i> -->
                                <img height="60"src="./images/custimg.png">
                            </div>
                            Add Customers
                        </a> 
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="viewcustomers.php" style="color:teal;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <!-- <i class="material-icons"style="font-size: x-large;text-align:center;">
                                    account_circle
                                </i> -->
                                <img height="60"src="./images/custimg.png">
                            </div>
                            View Customers
                        </a> 

                    </li> 
                </ul> 
            </div>
        </nav> 
    
    <div>
        <div class="row" style="margin:0px; padding:0px;">
            <div class="col-sm font-weight-bold typing_effect" style="padding-left:15px;color:teal ;font-family: 'raleway', cursive;font-size:2.2em;text-align:center;justify-content: flex-start;">
                <p class="zoomIn animated" style="margin:10% auto; font-size: 50px; color: brown; "> 
             Welcome To <br> Accurate Sparks Bank</p>
             <p class="zoomIn animated" style="margin:20% auto;"> 
             The Fastest Way To Send Money</p>
            </div>
            <div class="col-sm">
                <img id="square" class="slideInRight animated " height="430"src="./images/money_transfer_4.svg" alt="" style="align-self: flex-end;">
            </div>
        </div>
       
    </div>
</div>
<script>
setTimeout(function(){$('#loading').hide();}, 500); 
  var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
</script>
</html>
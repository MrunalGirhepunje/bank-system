
<?php
    $con = mysqli_connect("localhost", "root", "", "bank");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks | Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <!-- Icon -->
    <link rel="icon" height="50px" href="./images/icon.png">
</head>
<body style="background-color: "snow" onload="loader()">
<!-- loader for splash screen -->
<div id="loading">
    
    </div>
</div>
<div class="container-fluid myclass" style="padding:0px; margin:0px;">
        <!--Navbar-->
        <nav class="navbar navbar-expand-sm  navbar-toggler navbar-light" style="background-color:transparent; background-color:lavender; opacity:1;"> 
            <img  height="90"src="./images/iconimg.png">
            &nbsp;
            <div class="navbar-brand font-weight-bold " id="title" data-anijs="if: mouseover, do: slideInUp animated" style="color:teal;font-family: 'raleway', cursive;font-size:2em;">
                &nbsp;Accurate Sparks Bank
            </div>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="float:right;">
                <ul class="navbar-nav ml-auto font-weight-bold"  style="font-size:small; color:lavender; "> 
                <li class="nav-item">
                        <a class="nav-link " href="index.php" style="color:teal;font-weight:1em;">
                            <div style="padding-right:0px;" >
                                <img height="60"src="./images/hicon.png">
                            </div>
                            <span style="padding-right:20px;" >&nbsp;&nbsp;Home</span>
                        </a> 
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewcustomers.php" style="color:teal;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <img height="60"src="./images/custimg.png">
                            </div>
                            <span style="padding-right:10px;" >&nbsp;&nbsp;View Customer</span>
                    

                        </a>
                        </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="transferrecords.php" style="color:teal;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <img height="60"src="./images/transfer.png">
                            </div>
                            <span style="padding-right:10px;" >&nbsp;&nbsp;Transfer Records</span>
                            
                        </a>  
                    </li>
                </ul> 
            </div>
        </nav> 
    
    <div>


<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
    	$customer_id=$_POST['customer_id'];
    	    $name=$_POST['name'];
    $email=$_POST['email'];
    $current_balance=$_POST['current_balance'];
    $sql="insert into customers(customer_id,name,email,current_balance) values('{$customer_id}','{$name}','{$email}','{$current_balance}')";
    $result=mysqli_query($conn,$sql);
    if($result== true){
               echo "<script> alert('Hurray! your account is created');
                               window.location.href='viewcustomers.php';
                     </script>";
                    
    }
    if($result== false){
               echo "<script> alert('customer id is already in used');
                               window.location.href='create.php';
                     </script>";

     }       
  }
?>

<body>
<form id="msform" method="post">
  
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    
    <input type="text" name="name" placeholder="Name" />
    <input type="email" name="email" placeholder="Email" />
    <input type="text" name="current_balance" placeholder="Account Balance" />
    <input type="submit" name="submit" class="next action-button" value="Create"/>
  </fieldset>
  
</form>

</body>
<div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: grey;text-align:center;color:white;">
                © 2021 Copyright - Made by <strong>Mrunal Girhepunje</strong> :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank" style="color:white;">Accurate Sparks
                    BAnk </a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</html>
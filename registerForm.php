<!DOCTYPE html>
<html lang="en">
    <head>
    <title>YAM - Database | Register Form</title>
    <link rel="icon" type="image/png" href="Images/yamLogo.jpg"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" tyle="text/css" href="style.css"/>
    </head>

    <body>
        <nav class="navbar sticky-top navbar-dark bg-dark">
            <body data-spy="scroll" data-target=".navbar" data-offset="50">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
    
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <span class="navbar-text">
                            Navigation
                            </span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mainMenu.html">Main Menu</a>
                        </li>

                    </ul>
                </div>
                
            </body>
        </nav>   
    </body>

    <?php
// registerForm.php
$userID = $_REQUEST["userID"]; //get the data from the form
$userFirstname = $_REQUEST["userFirstname"]; 
$userSurname = $_REQUEST['userSurname'];
$userEmail = $_REQUEST['userEmail'];
$userPass = $_REQUEST['userPass'];
$userTele = $_REQUEST['userTele'];
$userServiceNumb = $_REQUEST['userServiceNumb'];
$userAdd1 = $_REQUEST['userAdd1'];
$userCounty = $_REQUEST['userCounty'];
$userPostcode = $_REQUEST['userPostcode'];

//include('conn.php');  
$conn=mysqli_connect('localhost','daniel.tang','J3TA77AK','danieltang_YAMDB'); 
$sql="INSERT INTO userDetailForm (userID,userFirstname,userSurname,userEmail,userPass,userTele,userServiceNumb,userAdd1,userCounty,userPostcode) 
VALUES ('$userID','$userFirstname','$userSurname','$userEmail','$userPass','$userTele','$userServiceNumb','$userAdd1','$userCounty','$userPostcode')";

if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
if (mysqli_query($conn,$sql)) {
    $userID = mysqli_insert_id($conn); // This will look at the recent ID that been inserted by the user.
    echo "<center>New record added. Your ID is: $userID</center><br><center><a href="authorised.html">Return Home</a></center>";
    $userID = $conn-> insert_id;
    //echo "New ID inserted - " .$conn-> insert_id;
	}
mysqli_close($conn);				//close connection to database

?>

<div class="jumbotron jumbotron-light"> 
    <div id="Contact">
        <pre></pre>
        
        <div class="container">
            <div class="col-sm">
            <ul><center><h6><b>YAM Collectors Database Mangement</b></h6></center></ul>
                <pre></pre>
                <hr class="small">
                
                <div class="row justify-content-md-center">
                    <div class="col col-lg-1">
                        <ul><center><a href="index.html">Home</a></center></ul>
                    </div>
                    
                    <div class="col col-lg-1">
                        <ul><center><a href="menu.html">Login</a></center></ul>
                    </div>
                    
                </div>
                
            </div>
            
        </div>

        <div id="Property">
        <div class="container">
            <pre></pre>
            <div class="row justify-content-md-center">
                <div class="col-sm">
                    <ul><center><p><font size="2" class="text-muted">Copyright &copy; danieltang.uk 2019</font></p></center></ul>
                    <ul><center><a href="privacyPolicy.html">Privacy Policy</a></center></ul>
                </div>
            </div>
            <pre></pre>
        </div>
    </div>
    
    </div>
</div>
    </body>

</html>

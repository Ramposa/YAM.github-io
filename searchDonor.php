<!DOCTYPE html>
<html lang="en">
    <head>
    <title>YAM - Database | Search Donor</title>
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

$search = $_POST['search'];
$column = $_POST['column'];


include('conn.php');  
//$conn=mysqli_connect('localhost','daniel.tang','J3TA77AK','danieltang_YAMDB');
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM searchDonor WHERE $column LIKE '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
    echo "<pre></pre>". "<b>Owner Number: </b> " . $row["userID"]. "<br><b>Owner Name: </b> " . $row["userName"]. "<br><b>Email: </b> " . $row["userEmail"].
    "<br><b>Telephone</b> " . $row["userTele"]. "<br><b>Service Number:</b> " . $row["userServiceNumb"]. "<br><b>userOrg</b> " . $row["userOrg"].
    "<br><b>userHouseNumb</b> " . $row["userHouseNumb"]. "<br><b>userStreet</b> " . $row["userStreet"].  "<br><b>userTown</b> " . $row["userTown"]. 
    "<br><b>userPostcode</b> " . $row["userPostcode"]. "<br><b>userCounty</b> " . $row["userCounty"]."<br><br>";
}
} else {
	echo "0 Records recieved. Please Try again.";
}

$conn->close();

?>

<center><p>Click <a href='searchMenu.html'>here</a> to return to previous page.</p></center>

<div class="jumbotron jumbotron-light"> 
    <div id="Contact">
        <pre></pre>
        
        <div class="container">
            <div class="col-sm">
            <ul><center><h6><b>YAM Collector Database Management</b></h6></center></ul>
                <pre></pre>
                <hr class="small">
                
                <div class="row justify-content-md-center">
                    <div class="col col-lg-1">
                        <ul><center><a href="index.html">Home</a></center></ul>
                    </div>
                    
                    <div class="col col-lg-1">
                    <ul><center><a href="searchMenu.html">Previous Page</a></center></ul>
                    </div>
                    
                    <div class="col col-lg-1">
                    <ul><center><a href="mainMenu.html">Main Menu</a></center></ul>
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

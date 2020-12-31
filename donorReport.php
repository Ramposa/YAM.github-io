<!DOCTYPE html>
<html lang="en">
    <head>
    <title>YAM - Database | Donor Report</title>
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
        </nav>   
    </body>
        <pre></pre>
    
    
    
    <?php
        $conn=mysqli_connect('localhost','daniel.tang','J3TA77AK','danieltang_YAMDB');
        $sql = "SELECT * FROM searchDonor";
        if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        $rs = mysqli_query($conn,$sql);
        if (!$rs)
        {
	        die("Could not get data ".mysql_error());
        }
        else	
        {
	        echo "<table>";
            echo "<tr><th>ID<br></th> <th>Name</th> <th>Email</th> <th>Telephone</th> </th> <th>Service Number</th> <th>Organization</th> <th>House Number</th> <th>Street Name</th> <th>Village/Town/City Name</th> <th>Postcode</th> <th>County</th> </tr>";
        }
        while($row = mysqli_fetch_array($rs))
        {
            echo "<center>";
            echo "<tr>";
            echo "<td>" . $row['userID'] . "</td><td>" . $row['userName'] . "</td><td>" . $row['userEmail'] . "</td><td>" . $row['userTele'] . "</td><td>" . $row['userServiceNumb'] . "</td><td>" . $row['userOrg'] . "</td><td>" . $row['userHouseNumb'] . "</td><td>" . $row['userStreet'] . "</td><td>" . $row['userTown'] . "</td><td>" . $row['userPostcode'] . "</td><td>" . $row['userCounty'] . "</td><td>";
            echo "</tr>";
            echo "</center>";
        }

        echo "</table>";
        mysqli_close($conn);
    ?>

<center><p><pre></pre>Click <a href='reportMenu.html'>here</a> to return to previous page.</p></center>



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
                    <ul><center><a href="reportMenu.html">Previous Page</a></center></ul>
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

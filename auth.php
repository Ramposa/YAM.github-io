<!DOCTYPE html>
<html lang="en">
    <head>
    <title>YAM - Database </title>
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

                    </ul>
                </div>
                
            </body>
        </nav>   
    </body>
    
    <div id="Home">
    </div>
        <div class="hero-image">
            <div class="hero-text">
                
                <center><h1><b>Yorkshire Air Museum</b></h1></center>
                <center><h6><i>YAM - Database Home Page</i></h6></center>
                
            </div>
        </div>

        <?php      
        include('conn.php');  
        $userID = $_POST['userID'];  
        $userPass = $_POST['userPass'];  
          
            // Prevent from MySQL injection  
            $userID = stripcslashes($userID);  
            $userPass = stripcslashes($userPass);  
            $userID = mysqli_real_escape_string($con, $userID);  
            $userPass = mysqli_real_escape_string($con, $userPass);  
          
            $sql = "SELECT * FROM userDetailForm WHERE userID = '$userID' AND userPass = '$userPass'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  

            if($count == 1){  
                echo "<pre></pre><h1><center> Login successful </center><br><center><p>Click <a href='mainMenu.html'>here</a> to proceed.</p></center></h1><pre></pre>";  
            }  
            else{  
                echo "<pre></pre><h1> Login failed. Invalid userName or password.<br><center><p>Click <a href='menu.html'>here</a> to return to previous page.</p></center></h1><pre></pre>";  
            }     

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
                            <ul><center><a href="menu.html">Login/Register</a></center></ul>
                        </div>
                        
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

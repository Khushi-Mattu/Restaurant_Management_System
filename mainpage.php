<!doctype html>
<html lang="en">
    
    <head>
        <!-- webstite name -->
        <title>
            Restaurant
        </title>
        
            <!-- Bootstrap CSS -->
            
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- header section reqirement -->
            <link rel="stylesheet" href="header.css">

    </head>

    <body style="background-color: burlywood; color: white;">
        <!-- Main container -->
        
        
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0%;">
                <a class="navbar-brand my-2 my-lg-0" href="#">
                    <img src="images\logo_rest.png" width="30" height="30" alt="">
                </a>
                <a class="navbar-brand" href="#">The Restaurant</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div>
                    <form class="form-inline my-2 my-lg-0" action="logout.php">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
                    </form>
                </div>
                
            </nav>
        



            <div class="container-fluid" style="margin-top: 0%; height: 100vh; background-size: cover; background-position: center center; background-repeat: no-repeat;
  background-image: url(https://b.zmtcdn.com/mx-onboarding-hero87f77501659a5656cad54d98e72bf0d81627911821.webp); ">
                    <div class="hero">
                        <hgroup>
                            <h1>No 1 In Taste</h1>
                            <h3>Place your order to enjoy awesome food</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button" ><a style="color: white; text-decoration: none;" href="#menu">Order Now</a></button>
                    </div>        
        </div> 
        
        
        <div class="container">
            <div class="jumbotron" style="margin-top:30px; background-color: black; text-align : center;">
                <h1 id="menu" >Menu</h1>
                <h3>Choose your Fantasy</h3>

            </div>

            <div>
                <form method="post" action="order_con.php">
                <?php
                // database connetion 
                $conn = mysqli_connect("localhost", "root", "", "restaurant");
                $query = "SELECT * FROM menu";  
                $result = mysqli_query($conn, $query);
                
                echo "<div class='row' style= 'color : black; margin-top : 1px;'>";
                    while($row = mysqli_fetch_array($result)){
                    
                    echo  "<div class='col-sm-4' style='margin-top : 20px;' >
                            <div class='card' style='height : 100%; width: 18rem; '>
                                <img class='card-img-top' src='nimages/veg burger.jpg' alt='Card image cap'>
                                <div class='card-body'>
                                    <h5 class='card-title' style= 'color : black'>";
                                    echo $row['menu_item'];
                                    echo "</h5>
                                    <p class='card-text' >";
                                    echo $row['des'];
                                    echo "</p>
                                    <h5>Price : ";
                                    echo $row['price'];
                                    echo "</h5>"; 
                                    echo "Quantity";
	                                    echo "<input type = 'number' name = 'username[]' class = 'class_name form-control input-number' value='0'/><br/>";
                                echo "</div>  
                            </div>  
                        </div>";

                    }
                echo "</div>";?>
                <input type="submit" style="float : right; margin-top : 30px;" class="btn btn-primary btn-lg btn-block">
                
                </form>
            </div>
        </div> 






        
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    </body>
</html>
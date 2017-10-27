<!-- Connect Require Class -->
<?php require_once("admin/db.php"); ?>
<?php require_once("admin/sessions.php"); ?>
<?php require_once("admin/functions.php"); ?>
<?php
// Click Submit Button
if (isset($_POST["Submit"])) {
    //Get Data Form Input Field and Check String prevent for SQL Injection
    $Branch = mysqli_real_escape_string($connection, $_POST["Branch"]);
    $Address = mysqli_real_escape_string($connection, $_POST["Address"]);
    $Division = mysqli_real_escape_string($connection, $_POST["Division"]);
    $Latitude = mysqli_real_escape_string($connection, $_POST["Latitude"]);
    $Longitude = mysqli_real_escape_string($connection, $_POST["Longitude"]);

    // Check Category input data
    if (empty($Branch) && empty($Address) && empty($Address) && empty($Latitude) && empty($Longitude)) {
        $_SESSION["ErrorMessage"] = "All Fields must be filled out";
        Redirect_to("kbz.php");
    } else {
        global $connection;
        $Query = "INSERT INTO kbz(name,address,division,lat,lon) VALUES('$Branch','$Address','$Division','$Latitude','$Longitude')";
        $Execute = mysqli_query($connection, $Query);
        // Check for State add data to Registration Database
        if ($Execute) {
            $_SESSION["SuccessMessage"] = "New Branch Add Successfully";
            Redirect_to("kbz.php");
        } else {
            $_SESSION["ErrorMessage"] = "New Branch Add Failure";
            Redirect_to("kbz.php");
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KBZ</title>
        <!-- Connect Require Style -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dashboardstyles.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Inline CSS -->
        <style>
            .FieldInfo {
                color: rgb(251,174,44);
                font-family: Bitter,Georgia,"Times New Roman",Times,serif;
                font-size: 1.2em;
            }
            #Side_Menu {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div style="height: 4px; background: #3f51b5;"></div>     
        <nav class="navbar navbar-inverse" role="navigation" >
            <div class="container">
                <span><h3 style="text-align: center"><font color="white">ATM Finder</font></h3></span>
            </div>
        </nav>
        <div class="Line" style="height: 4px; background: #3f51b5;"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <!-- Side Menu Area -->
                    <ul id="Side_Menu" class="nav nav-pills nav-stacked">
                        <li class="active"><a href="kbz.php">
                                <span class="glyphicon glyphicon-th"></span>
                                &nbsp;KBZ</a></li>
                        <li><a href="aya.php"> <span class="glyphicon glyphicon-list-alt"></span>
                                &nbsp;AYA</a></li>               
                        <li><a href="cb.php"><span class="glyphicon glyphicon-tags"></span>
                                &nbsp;CB</a></li>
                        <li><a href="agd.php"> <span class="glyphicon glyphicon-user"></span>
                                &nbsp;AGD</a></li>
                        <li><a href="uab.php"><span class="glyphicon glyphicon-comment"></span>
                                &nbsp;UAB</a></li>
                        <li><a href="mab.php"> <span class="glyphicon glyphicon-equalizer"></span>
                                &nbsp;MAB</a></li>
                    </ul>

                </div> <!-- Ending of Side Area -->
                <div class="col-sm-10">
                    <h1>KBZ</h1>
                    <!-- Check Session -->
                    <?php
                    echo Message();
                    echo SuccessMessage();
                    ?>
                    <!-- Ending of Check Session -->
                    <!-- Input Form Area --> 
                    <div>
                        <form action="kbz.php" method="post"> 
                            <fieldset>
                                <!-- Branch Input Field -->
                                <div class="form-group">
                                    <label for="Branch"><span class="FieldInfo">Branch:</span></label>
                                    <input class="form-control" type="text" name="Branch" id="Branch" placeholder="Branch"/>
                                </div>
                                <!-- Address Input Field -->
                                <div class="form-group">
                                    <label for="Address"><span class="FieldInfo">Address:</span></label>
                                    <input class="form-control" type="text" name="Address" id="Address" placeholder="Address"/>
                                </div>
                                <!-- Address Input Field -->
                                <div class="form-group">
                                    <label for="Division"><span class="FieldInfo">Division:</span></label>
                                    <input class="form-control" type="text" name="Division" id="Division" placeholder="Division"/>
                                </div>
                                <!-- Latitude Input Field -->
                                <div class="form-group">
                                    <label for="Latitude"><span class="FieldInfo">Latitude:</span></label>
                                    <input class="form-control" type="text" name="Latitude" id="Latitude" placeholder="Latitude"/>
                                </div>
                                <!-- Longitude Input Field -->
                                <div class="form-group">
                                    <label for="Longitude"><span class="FieldInfo">Longitude:</span></label>
                                    <input class="form-control" type="text" name="Longitude" id="Longitude" placeholder="Longitude"/>
                                </div>
                                <br>
                                <!-- Submit Button -->
                                <input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add ATM Branch"/>
                            </fieldset>  
                            <br>
                        </form>
                    </div>
                </div> <!-- Ending of Main Area -->
            </div> <!-- Ending of Row -->
        </div> <!-- Ending of Container -->
        <!-- Footer Area -->
        <div id="Footer">
            <hr><p>Theme By | Sapphire | &copy;2017-2020 --- All right reserved.
            </p>
            <a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;" href="http://Sapphire.com/coupons/" target="_blank">
                <p>
                    This site is only used for Study purpose Sapphire.com have all the rights. no one is allow to distribute
                    copies other then <br>&trade; Sapphire.com &trade;  Udemy ; &trade; Skillshare ; &trade; StackSkills</p><hr>
            </a>

        </div>
        <div style="height: 10px; background: #3f51b5;"></div> 
        <!-- Ending of Footer Area -->
    </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="iot_in";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  echo "Connection failed " ;
}


$sql="select Time,Moisture_content,Light_int from ind_plant";

$result=mysqli_query($conn,$sql);
header("Refresh : 2");
?>

<?php

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{
    $val = $row["Moisture_content"];
    $val1= $row["Light_int"];
    $val3= $row["Time"];
}
}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeniest</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="navbar">
        <h1>Automated Plant Cultivation<br>System</h1>
    </div>
    <div class="maincontainer">
        <div class="container">
            <div class="left-maincontainer">
                <div class="title"><h1>Analytics</h1>
                </div>
                <div class="left-container">
                    <div class="moisture_details">
                        <!-- <div class="plant_info">
                            <div class="plant_img">
                                <img src="images/Green-Beans.png">
                            </div>
                            <label class="plant_name">Peas<br>
                                <span>Pisum sativum</span>
                            </label>
                        </div> -->

                        <div class="moisture_box">
                            <div class="moisture_box_heading">
                                <!-- <i class="fa-solid fa-droplet"></i> -->
                                <div class="date">
                                    <h3>Date and time</h3>
                                </div>
                                <div class="dt">
                                <h3 class="dt">
                                    <script>
                                    // document.write('Hello');
                                    const date = new Date();
                                    document.write(date); // Fri Jun 17 2022 11:27:28 GMT+0100 (British Summer Time)
                                    </script>
                                </h3>
                                </div>
                                 
                                
                                <!-- <?php
                                    //echo $val1;
                                    // header("Refresh : 2");
                                    // echo  $row["Moisture_content"];
                                ?> -->
                            </div>
                            <div class="reading">
                                
                            </div>
                        </div>
                    </div>
                    <div class="plant_details">
                        <div class="details-heading">
                            <h2>Watering details</h2>
                            <!-- <div class="searchbar">
                                <form action="" method="post">
                                <input type="date" name="filter_value" id="filter_date">
                                <button type="submit" name="datebtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div> -->
                        </div>
                        <div id="date"></div>
                        <div class="details-box">
                           <div class="time-box morning">
                            <!-- <i class="fa-solid fa-sun"></i> -->
                                <div class="center">
                                    <h2>Light Intensity</h2>
                                <div class="time">
                                    <table>
                                        <h3>
                                            <?php
                                                if($val == 1){
                                                    echo "Light Needed";
                                                }else{
                                                    echo "Not Need";
                                                }
                                    // echo $val;
                                    // echo  $row["Light_int"];
                                ?>
                                        </h3>
                                    </table>
                                
                                </div>
                                </div>
                                
                           </div>
                           <div class="time-box afternoon">
                           <!-- <i class="fa-solid fa-droplet"></i> -->

                                <h2>Humidity</h2>
                                <div class="time">
                                <table>
                                    <h3>69%</h3>
                                    
                                </table>
                                </div>
                           </div>
                           <div class="time-box night">
                           <!-- <i class="fa-solid fa-water"></i> -->
                                <h2>Soil Moisture</h2>
                                <div class="time">
                                    <table>
                                        <h3>
                                            <?php
                                        echo $val1;
                                        // echo  $row["Moisture_content"];
                                    ?>
                                        </h3>
                                        
                                    </table>
                                
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-container">
                <div class="right-container-content">
                    <div class="title"><h1>About</h1></div>
                    <div class="description">
                        <p>A soil moisture sensor is used to monitoring water content and light sensors are used to regulate the sun light effect.Display mechanism is available to assess the light intensity and soil moisture level for plant growth. Wifi network system can be used to display the information to a web page.</p>
                        <div class="icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                        
                    </div>
                </div>
                <div class="right-container-img">
                    <img src="images/—Pngtree—creative watercolor green big leaves_4763809.png">
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/5b62121174.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
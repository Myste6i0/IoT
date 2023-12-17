
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
    <title>Document</title>
    <style>
        body {
            background-image:linear-gradient(to right,rgb(1, 204, 255),rgb(104, 244, 120));
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            
            

        }
        .flexbox {
            height: 200px;
            width: 300px;
            border: none black;
            text-transform: uppercase;
            border-radius: 20px;
            background-image:linear-gradient(to right,rgb(104, 244, 120),rgb(1, 204, 255));
            margin: 10px;
            font-size: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            box-shadow: 0 18px 16px black;
            
        }
        .main {
            margin-top: 150px;
        }
        .dant {
            background-image:linear-gradient(to right,rgb(104, 244, 120),rgb(1, 204, 255));
            width: 610px;
            height: 100px;
            /* border:solid black; */
            border-radius: 20px;
            margin-top: 25px;
            box-shadow: 0 18px 16px black;
            

        }
        .header {
            text-transform: uppercase;
            font-size: 40px;

            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        
    </style>
</head>
<body>
    <div align="center" class="main">
        <H1 class="header">Automatic Indoor Hydroponic Plant Grow Pot</H1>
        <div class="container">
        
            <div class="flexbox">
                <h2>Moisture Content</h2>
                <H1 class="value">
                    <?php
                    echo $val1;
                // echo  $row["Moisture_content"];
                ?>
                </H1>
                
            </div>
    
            <div class="flexbox">
                <h2>Light Intensity</h2>
                <h1>
                    <?php
                    echo $val;
                    // echo  $row["Light_int"];
                ?>
                </h1>
                
            </div>
    
        </div>
        
        <div class="dant">
            <p>
               <h2><b> Date and time</b></h2>
               <h3>
                <script>
                    // document.write('Hello');
                    const date = new Date();
                    document.write(date); // Fri Jun 17 2022 11:27:28 GMT+0100 (British Summer Time)
                </script>
               </h3>
                
                
            </p>
        </div>

    </div>
</body>
</html>

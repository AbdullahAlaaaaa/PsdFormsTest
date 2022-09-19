<?php 
        include_once 'index.php';
         ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
    <center>
        <div class="Section-cover double" style="padding:30px;margin: 35px">




            <?php 
        include_once 'index.php';



         ?>
            <?php
 
        $Timestamp = date("F j, Y, g:i a");
        $Date = $_REQUEST['ActivityDate'];
        $BnFCode =  $_REQUEST['BnFCode'];
        $Name =  $_REQUEST['FullName'];
        $PhoneNumber = $_REQUEST['Phone'];
        $Email =  $_REQUEST['Email'];
        $Gender = $_REQUEST['Gender'];
        $Education = $_REQUEST['Education'];
        $WorkStatus = $_REQUEST['WorkStatus'];
        $MigrationStatus = $_REQUEST['MigrationStatus'];
        $Governorate = $_REQUEST['Governorate'];


         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO t0  VALUES ('$Timestamp','$Date','$BnFCode','$Name','$PhoneNumber','$Email','$Gender','$Education','$WorkStatus','$MigrationStatus','$Governorate')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for submitting your information, you can see the information submitted below, if you want to change your information you can go back to the form page and change your information and re-submit it again</h3>";



        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <div style="padding:20px;">

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Timestamp</th>
                    <th>Date</th>
                    <th>BnFCode</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Education</th>
                    <th>WorkStatus</th>
                    <th>MigrationStatus</th>
                    <th>Governorate</th>
                </tr>
            </thead>
            <tbody>
                <?php 
    $Timestamp = date("F j, Y, g:i a");
    $Date = $_REQUEST['ActivityDate'];
    $BnFCode =  $_REQUEST['BnFCode'];
    $Name =  $_REQUEST['FullName'];
    $PhoneNumber = $_REQUEST['Phone'];
    $Email =  $_REQUEST['Email'];
    $Gender = $_REQUEST['Gender'];
    $Education = $_REQUEST['Education'];
    $WorkStatus = $_REQUEST['WorkStatus'];
    $MigrationStatus = $_REQUEST['MigrationStatus'];
    $Governorate = $_REQUEST['Governorate'];
    
    ?>
                <tr>
                    <td>
                        <?php echo $Timestamp; ?>
                    </td>
                    <td>
                        <?php echo $Date; ?>
                    </td>
                    <td>
                        <?php echo $BnFCode; ?>
                    </td>
                    <td>
                        <?php echo $Name; ?>
                    </td>
                    <td>
                        <?php echo $PhoneNumber; ?>
                    </td>
                    <td>
                        <?php echo $Email; ?>
                    </td>
                    <td>
                        <?php echo $Gender; ?>
                    </td>
                    <td>
                        <?php echo $Education; ?>
                    </td>
                    <td>
                        <?php echo $WorkStatus; ?>
                    </td>
                    <td>
                        <?php echo $MigrationStatus; ?>
                    </td>
                    <td>
                        <?php echo $Governorate; ?>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    </div>
</body>

</html>
        <?php 
        include_once 'index.php';
         ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div class="col-md-12 head">
    <div class="float-right">
        <a href="exportData.php" class="btn btn-success"><i class="dwn"></i> Export</a>
    </div>
</div>

<!-- Data list table --> 
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
    // Fetch records from database 
    $result = $db->query("SELECT * FROM t0"); 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){ 
    ?>
        <tr>
            <td><?php echo $row['Timestamp']; ?></td>
            <td><?php echo $row['Date']; ?></td>
            <td><?php echo $row['BnFCode']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['PhoneNumber']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            <td><?php echo $row['Education']; ?></td>
            <td><?php echo $row['WorkStatus']; ?></td>
            <td><?php echo $row['MigrationStatus']; ?></td>
            <td><?php echo $row['Governorate']; ?></td>
        </tr>
    <?php } }else{ ?>
        <tr><td colspan="8">No member(s) found...</td></tr>
    <?php } ?>
    </tbody>
</table>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registered apple information</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
  	<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" 
    integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link  rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background: #db88cb;
            }
            h1 {
                text-align: center;
                font-size: 50px;
    
            }
    
            .nav-bar {
                margin-top:10px;
                list-style-type: none;
                text-transform: uppercase;
                font-size: 15px;
                float:right;
            } 
            li {
                margin: 10px 5px;
            }

            a {
                text-decoration: none;
                color: black;
            }
            a:hover{
                color: orangered;
            }
            a:active{
                color: purple;
            }

        </style>
</head>
<body>
<div class="container-fluid" style="margin-bottom:2px; background:linear-gradient(green, #db88cb); height: 100px;">
<div class="col-md-12">
    <nav >
        <ul class="nav-bar">
            <li><a href="logout.php"><i style="margin-right:5px;" class="fa-regular fa-right-from-bracket"></i>Logout</a></li>
        </ul>
    </nav>

    <h1>Registered apple information</h1>
<?php
require ("dbConnection.php");
//Prepare and executethe SQL statement to retrieve the registered information from the database
$stmt = $conn->prepare ("SELECT * FROM apples ORDER BY apple_id ASC");
$stmt->execute();

//Get result set from the executed statement
$result = $stmt->get_result();


//Check if there are any rows returned
if ($result->num_rows > 0) {
    echo '<div class="table">
    <table class="table table-striped table-hover align-middle">
      <thead>
        <tr>
            <th>Apple Id</th>
            <th>YOP</th><th>Breed</th>
            <th>Apple row</th>
            <th>Apple column</th>
            <th>Latitude</th>
            <th>Longitude</th>
        </tr>
      </thead>';
//Loop through each row of the result set
while ($row = $result->fetch_assoc()){
    //Display the information in table rows
    echo '<tr>';
    echo '<td>' . $row['apple_id'] . '</td>';
    echo '<td>' . $row['yop'] . '</td>';
    echo '<td>' . $row['breed'] . '</td>';
    echo '<td>' . $row['apple_row'] . '</td>';
    echo '<td>' . $row['apple_column'] . '</td>';
    echo '<td>' . $row['latitude'] . '</td>';
    echo '<td>' . $row['longitude'] . '</td>';
    echo '<tr>';
}
    echo '</table>';
    echo '</div>';
} else {
    echo '<p>No registered information found.</p>';
}
$stmt->close();
$conn->close();
?>

</div>
</div>
</body>   
</html>

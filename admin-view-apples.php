<!DOCTYPE html>
<html>
<head>
    <title>Registered apple information</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
            h2 {
                text-align: center;
                font-size: 30px
            }
            nav{
                width: 100%; 
                height: 50px;
                display: flex;
                justify-con
            }
            .nav-bar{
                margin-left:1200px;
                list-style-type: none;
                text-transform: uppercase;
                font-size: 12px;
            }
            li {
                margin: 10px 5px;
            }

            a {
                text-decoration: none;
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
<nav>
    <ul class="nav-bar">
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
    <h2>Registered apple information</h2>
<?php
require ("dbConnection.php");
//Prepare and executethe SQL statement to retrieve the registered information from the database
$stmt = $conn->prepare("SELECT * FROM apples");
$stmt->execute();

//Get result set from the executed statement
$result = $stmt->get_result();

//Check if there are any rows returned
if ($result->num_rows > 0) {
    echo '<table class="table table-stripped table-hover">';
    echo '<tr>
            <th>Apple Id</th>
            <th>YOP</th><th>Breed</th>
            <th>Apple row</th>
            <th>Apple column</th>
            <th>Latitude</th>
            <th>Longitude</th>
        </tr>';
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
} else {
    echo '<p>No registered information found.</p>';
}
$stmt->close();
$conn->close();
?>


</body>   
</html>

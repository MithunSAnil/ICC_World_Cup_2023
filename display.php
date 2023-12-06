<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connection = mysqli_connect('localhost', 'root', '','world_cup_beta'); //The Blank string is the password
        
        $query = "SELECT * FROM player"; //You don't need a ; like you do in SQL
        $result = mysqli_query($connection,$query);
        
        echo "<table>"; // start a table tag in the HTML
        
        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><td>" . htmlspecialchars($row['firstName']) . "</td><td>" . htmlspecialchars($row['lastName']) . "</td></tr>";  //$row['index'] the index here is a field name
        }
        
        echo "</table>"; //Close the table in HTML
        
        mysqli_close($connection); //Make sure to close out the database connection
    ?>
</body>


</html>
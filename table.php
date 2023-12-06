<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: lightskyblue;
    }
</style>
<body>
    <center> <h1><i>Registered Players</i></h1></center>
    <?php
        $con=mysqli_connect("localhost","root","","world_cup_beta");
        if(!$con)
        {
            echo "unsuccessful";
        }
        else{
            $sql="SELECT * FROM player";
            if(mysqli_query($con,$sql))
            {
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    echo'<table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Player ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Player Role</th> 
                    <th scope="col">Player Num of Matches</th> 
                    <th scope="col">Team ID</th> 
                    <th scope="col">Total Runs</th> 
                    <th scope="col">Num of Sixes</th> 
                    <th scope="col">Num of Fours</th> 
                    <th scope="col">Total Wickets</th> 
                    <th scope="col">Bowler type</th> 
                  </tr>
                </thead>
                <tbody>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['playerID'] . "</td><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td><td>" . $row['playerRole'] . "</td><td>" . $row['numOfMatches'] . "</td><td>" . $row['teamID'] . "</td><td>" . $row['totalRuns'] . "</td><td>" . $row['numOfSixes'] . "</td><td>" . $row['numOfFours'] . "</td><td>" . $row['totalWickets'] . "</td><td>" . $row['bowlerType'] . "</td></tr>";
                    }
                    echo "</tbody>
                    </table>";
                }
                else{
                    echo "<center><h1>No data</h1></center>";
                }
            }
            else{
                echo "Failed in loading table";
            }
            mysqli_close($con);
        }
    ?>
    <center> <h1><i>Registered Coaches</i></h1></center>
    <?php
        $con=mysqli_connect("localhost","root","","world_cup_beta");
        if(!$con)
        {
            echo "unsuccessful";
        }
        else{
            $sql="SELECT * FROM coach";
            if(mysqli_query($con,$sql))
            {
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    echo'<table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">coach ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Player Num of Matches</th> 
                    <th scope="col">Team ID</th> 
                    <th scope="col">Coach Role</th>
                  </tr>
                </thead>
                <tbody>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['coachID'] . "</td><td>" . $row['firstName'] . "</td><td>" . $row['lastName'] . "</td><td>" . $row['numOfMatches'] . "</td><td>" . $row['teamID'] . "</td><td>" . $row['coachRole'] ."</td></tr>";
                    }
                    echo "</tbody>
                    </table>";
                }
                else{
                    echo "<center><h1>No data</h1></center>";
                }
            }
            else{
                echo "Failed in loading table";
            }
            mysqli_close($con);
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
    <style>    
    #intro h1{
        color: white;
        text-align: center;
        padding-top: 50px;
        font-size: 3rem;
        font-weight: bolder;
    }

    button{
        padding: 5px 20px;
        font-weight: bold;
        font-size: 20px;
        border-radius: 4px;
        margin: 5px 20px;
        position:absolute;
        top: 10px;
        right: 10px;
        background-color: #28a745;
        color: white;
        border-color: #28a745;
    }

    button:hover{
        background-color:chocolate;
        border-color: chocolate;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 60px;
    }

    table td , th{
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid black;
        color: black;
    }

    table th {
        font-weight: bold;
        font-size: 200%;
        background-color: white;
    }

    table tr:nth-child(even) {
        background-color: lightgray;
    }
    table tr:nth-child(odd) {
        background-color: lightcyan;
    }

    body{
        background-color: grey;
    }
    
</style>
</head>
<body>
    <div id="intro">
        <h1 id="primary">Hello Admin! Welcome to your PIZZERIA!❤️</h1>
        <form action="logout.php">
            <button id="logout">Logout</button>
        </form>
    </div>

    <section id="show-data">
        <table>
            <tr>
                <th>Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
            <tr>
            <?php
                include 'db_connect.php';
                session_start();
                $name = $_SESSION['user'];    
                        $sql = "SELECT * FROM booking";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['phno'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['time'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No data available</td></tr>";
                        }
            ?>
        </table>
    </section>
</body>
</html>
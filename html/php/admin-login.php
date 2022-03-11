<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 20px;
        text-align: left;
        }

        th {
        background-color: #588c7e;
        color: white;
        }

        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
<body>


<!--Table 1 - Rgistration table-->
<table>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "University");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo"The database of Registered Students details";
        echo "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] ."</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>


<!--Table 2 - Contact table-->
<table>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>message</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "University");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo"The database of Conatct details";
    while($row = $result->fetch_assoc()) {
        echo  "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] ."</td> </tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>

<!--Table 3 - Subscribe table-->
<table>
    <tr>
        <th>email</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "University");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT email FROM subscribe";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo"The database of Subscribed email list";
    while($row = $result->fetch_assoc()) {
        echo  "</td><td>" . $row["email"] ."</td> </tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
echo"<br><br><br>";
?>
</table>
<button><label><a href="http://127.0.0.1/EDUmax-education-website-/html/">HOME</a></button>
</body>
</html>
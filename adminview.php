<?php

$servername = "your_host";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($servername, $username, $password, $database);

//FOR CUSTOMER 1
$query1 = "SELECT quantity, weighty, box_count FROM customer c INNER JOIN auth2 a ON c.ID = a.ID WHERE a.username ='customer1' AND c.ID=1 ";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

//FOR CUSTOMER 2
$query2 = "SELECT quantity, weighty, box_count FROM customer c INNER JOIN auth2 a ON c.ID = a.ID WHERE a.username ='customer2' AND c.ID=2 ";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);

echo "<style>
body, html {
    height: 100%;
    margin: 0;
    background-color:white;
}
.table-container {
    display: flex;
    justify-content: center;
    align-items:center;
    height:100%;
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
}
    table {
        
        width: 80%;
        border: 2px solid #000;
        height:250px;
        border-spacing:0;
        border-radius:5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    th, td {
        padding: 8px;
        text-align: center;
        border: 2px solid #000;
        font-size:25px;
        
    }

    th:nth-child(1){
        font-weight:bold;
        background-color:#fff;
    } 
    tr:nth-child(3){
        background-color:#fff;
    } 
    tr:nth-child(4){
        background-color:#FFF0F5;
    }

    th:nth-child(2), th:nth-child(3), th:nth-child(4) {
        background-color:#7B68EE;
    }
    td:nth-child(1){
        font-weight:bold;
        background-color:#FFD700;
    } 


    tr:nth-child(2) {
        background-color: #DCDCDC;
    }
</style>";




echo "<div class=table-container>";
echo "<table>";
echo "<tr><th>Item/Customer</th><th>Customer1</th><th>Customer2</th><th>Total</th></tr>";


    echo "<tr>";
    echo "<td>Quantity</td>";
    echo "<td>" . $row1["quantity"] . "</td>";
    echo "<td>" . $row2["quantity"] . "</td>";
    echo "<td>" . $row1["quantity"] + $row2["quantity"] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Weight</td>";
    echo "<td>" . $row1["weighty"] . "</td>";
    echo "<td>" . $row2["weighty"] . "</td>";
    echo "<td>" . $row1["weighty"] + $row2["weighty"] . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>Box Count</td>";
    echo "<td>" . $row1["box_count"] . "</td>";
    echo "<td>" . $row2["box_count"] . "</td>";
    echo "<td>" . $row1["box_count"] + $row2["box_count"] . "</td>";
    echo "</tr>";

    echo "</table>";
echo "</div>";


?>

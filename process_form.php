<?php
$servername = "your_host";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_date = $_POST['order_date'];
    $company = $_POST['company'];
    $owner = $_POST['ownerr'];
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $weight = $_POST['weighty'];
    $shipment_request = $_POST['shipment_request'];
    $tracking_id = $_POST['tracking_id'];
    $shipment_size = $_POST['shipment_size'];
    $box_count = $_POST['box_count'];
    $specification = $_POST['specification'];
    $checklist_quantity = $_POST['checklist_quantity'];
    
    $stmt = $conn->prepare("INSERT INTO customer (order_date, company, ownerr, item, quantity, weighty, shipment_request, tracking_id, shipment_size, box_count, specification, checklist_quantity) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssidsissis", $order_date, $company, $owner, $item, $quantity, $weight, $shipment_request, $tracking_id, $shipment_size, $box_count, $specification, $checklist_quantity);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {

        echo "Data inserted in table successfully!";
        // echo $tracking_id;
        echo '<a href="login.html">Back to Login</a>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    
}
$conn->close();
?>


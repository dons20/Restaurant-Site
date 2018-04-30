<?php
// Include config file
require_once 'connection.php';
header('Content: application/json', 1);
 
// Define variables and initialize with empty values
$id = $item_name = $type = $availability = "";
$items;

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Prepare a select statement
    $sql = "SELECT * FROM `menu` WHERE 1";
    if($stmt = $pdo->prepare($sql)){
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Check if at least one record exists
            if($stmt->rowCount() >= 1){
                session_start();
                $items = array();
                while($row = $stmt->fetch()){
                    $id = $row['ID'];
                    $item_name = $row['item_name'];
                    $type = $row['type'];
                    $availability = $row['availability'];
                    array_push($items, ["id" => $id, "item_name" => $item_name, "type" => $type, "availability" => $availability]);
                }
                $_SESSION['items'] = $items;
                loadData();
            } else{
                // Display an error message if username doesn't exist
                $error = 'No available items on the menu';
                $returnVal = array("error" => $error);
                echo json_encode($returnVal);
            }
        } else{
            $returnVal = array("error" => "Oops! Something went wrong. Please try again later.");
            echo json_encode($returnVal);
        }
    }
    
    // Close statement
    unset($stmt);
    
    // Close connection
    unset($pdo);
}

function loadData() {
    $returnVal = array("items" => $_SESSION["items"]);
    echo json_encode($returnVal);
}
?>
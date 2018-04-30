<?php
// Include config file
require_once 'connection.php';
header('Content: application/json', 1);
 
// Define variables and initialize with empty values
$item_name = $type = "";
$items;

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Prepare a select statement
    $sql = "SELECT `item_name`, `type` FROM `menu` WHERE `availability` = :isAvailable";
    if($stmt = $pdo->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(':isAvailable', $param_available, PDO::PARAM_STR);
        
        // Set parameters
        $param_available = 'Y';
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Check if at least one record exists
            if($stmt->rowCount() >= 1){
                session_start();
                $items = array();
                while($row = $stmt->fetch()){
                    $item_name = $row['item_name'];
                    $type = $row['type'];
                    array_push($items, ["item_name" => $item_name, "type" => $type]);
                }
                $_SESSION['menuItems'] = $items;
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
    $returnVal = array("menuItems" => $_SESSION["menuItems"]);
    echo json_encode($returnVal);
}
?>
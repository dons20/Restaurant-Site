<?php
// Include config file
require_once 'connection.php';
 
// Define variables and initialize with empty values
$id = $item_name = $type = $availability = "";
$id_err = $item_name_err = $type_err = $availability_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["id"]))){
        $id_err = "Please enter a ID";
        $returnVal = array("error" => $id_err);
        echo json_encode($returnVal);
    } else {
        $id = trim($_POST["id"]);
    }
    
    // Check input errors before inserting in database
    if(empty($id_err) && empty($item_name_err) && empty($type_err) && empty($availability_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO menu (id, item_name, first_name, last_name, registration_date, permissions) VALUES (:username, :password, :fname, :lname, NOW(), :permissions)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $param_password, PDO::PARAM_STR);
            $stmt->bindParam(':fname', $param_fname, PDO::PARAM_STR);
            $stmt->bindParam(':lname', $param_lname, PDO::PARAM_STR);
            $stmt->bindParam(':permissions', $param_permissions, PDO::PARAM_STR);
            
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_fname = $first_name;
            $param_lname = $last_name;
            $param_permissions = $permissions;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: ./");
            } else{
                $returnVal = array("error" => "Something went wrong. Please try again later.");
                echo json_encode($returnVal);
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
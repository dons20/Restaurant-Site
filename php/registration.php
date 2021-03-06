<?php
// Include config file
require_once 'connection.php';
header('Content: application/json', 1);
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $first_name = $last_name = "";
$username_err = $password_err = $confirm_password_err = $first_name_err = $last_name_err = "";
$permissions = 'C';
$date = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                    $returnVal = array("error" => $username_err);
                    echo json_encode($returnVal);
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                $returnVal = array("error" => "Oops! Something went wrong. Please try again later.");
                echo json_encode($returnVal);
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
        $returnVal = array("error" => $password_err);
        echo json_encode($returnVal);
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
        $returnVal = array("error" => $password_err);
        echo json_encode($returnVal);
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    //if (empty($confirm_password)) $confirm_password = '';
    if (isset($_POST["confirm_password"]))
    {
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = 'Please confirm password.';     
        } else{
            $confirm_password = trim($_POST['confirm_password']);
            if($password != $confirm_password){
                $confirm_password_err = 'Password did not match.';
                $returnVal = array("error" => $confirm_password_err);
                echo json_encode($returnVal);
            }
        }
    } else {
        $confirm_password = null;
    }

    // Validate first name
    //if (empty($first_name)) $first_name = '';
    if (isset($_POST["first_name"]))
    {    
        if(empty(trim($_POST['first_name']))){
            $first_name_err = "Please enter your first name.";     
        } else{
            $first_name = trim($_POST['first_name']);
        }
    } else {
        $first_name = null;
    }

    // Validate last name
    //if (empty($last_name)) $last_name = '';
    if (isset($_POST["last_name"]))
    {    
        if(empty(trim($_POST['last_name']))){
            $last_name_err = "Please enter your last name.";     
        } else{
            $last_name = trim($_POST['last_name']);
        }
    } else {
        $last_name = null;
    }

    //Validate access code if present
    if (isset($_POST["access_code"]))
    {
        if(!empty(trim($_POST['access_code']))) {
            $accessCode = trim($_POST['access_code']);
            if ($accessCode === "SUPERUSER") {
                $permissions = 'A';
            } else if ($accessCode === "STAFF") {
                $permissions = 'S';
            }
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($first_name_err) && empty($last_name_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, first_name, last_name, registration_date, permissions) VALUES (:username, :password, :fname, :lname, NOW(), :permissions)";
         
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
                $returnVal = array("message" => "Successfully Registered!", "location" => "../");
                echo json_encode($returnVal);
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
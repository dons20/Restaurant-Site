<?php
// Include config file
require_once 'connection.php';
header('Content: application/json', 1);
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
//$gender = 'M';
//$age = 0;
//$date = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT `username`, `password`, `first_name` FROM `users` WHERE `username` = :username";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $hashed_password = $row['password'];
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            $_SESSION['first_name'] = $row['first_name'];
                            $_SESSION['permissions'] = $row['permissions'];
                            welcome();
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                            $returnVal = array("error" => $password_err);
                            echo json_encode($returnVal);
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                    $returnVal = array("error" => $username_err);
                    echo json_encode($returnVal);
                }
            } else{
                $returnVal = array("error" => "Oops! Something went wrong. Please try again later.");
                echo json_encode($returnVal);
            }
        }
        
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}

function welcome() {
    $returnVal = array("username" => $_SESSION["username"], "person" => $_SESSION["first_name"]);
    echo json_encode($returnVal);
    
    // If session variable is not set it will redirect to login page
    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
        header("location: ./");
        exit;
    }
}
?>
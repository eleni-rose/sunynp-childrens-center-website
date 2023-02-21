<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Get username & password 
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);   
        
    // Prepare an insert statement
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
         

        
     // Use DB info in $link from config.php to construct MySQL message/command
        if($stmt = mysqli_prepare($link, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = $password; 
            
            // Attempt to EXECUTE the prepared statement
            mysqli_stmt_execute($stmt);            

            // Close statement
            mysqli_stmt_close($stmt);
            $message = "You have created a new account!";

        } else {
                 $message = "Unable to create your account. Please try again.";            
        }

    // Close connection
    mysqli_close($link);
}
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>

<?php echo $message; ?>
 
</body>
</html>

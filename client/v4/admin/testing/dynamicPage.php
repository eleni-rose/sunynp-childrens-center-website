<?php

    // Access Database
    require 'config.php';

    // Construct the DB querry to PICK a row in a TABLE
    $key = 3;
    $thisrow = 'select * from a_users where uid=' . $key; 

    // Make a querry to MySQL Database using login info (via $link) from 'config.php'
    $allusers_q = mysqli_query($link, $thisrow);
?> 

<html>
<head>
    <title>Dynamic Page</title>
</head>
<body>

<CENTER>

    <h1> USERS TABLE </h1>
        <table border="0" cellpadding ="5" style="border-collapse: collapse; ">
            <tbody>
                <tr style="border-bottom: 1px solid">
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>

<?php

// DISPLAY the dynamic content of each cell/field in the given ROW
//-----------------------------------------------------------------

        $users_t_vals = mysqli_fetch_object($allusers_q);

?>
                <tr style="border-bottom: 1px solid">
                    <td>
    				 <?php echo $users_t_vals->uid; ?>
                    </td>
                    <td>
                    		<?php echo $users_t_vals->username; ?>
                    </td>
                    <td>
                        	<?php echo $users_t_vals->password; ?> 
                    </td>
                </tr>

            </tbody>
        </table>
  
<p> <br>
</CENTER>

</body>
</html>
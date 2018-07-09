<!DOCTYPE html>
<html>
    <head>
        <title>VIEWING SELLERS</title>
    </head>
    
    <body>
        <table border="2" >
            <thead>
                <th>School Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
            </thead>
            <tbody>
                <?php 
                require('conn.php');
                //Select Records from a table
                $query ="SELECT * FROM seller LIMIT 100;";
                $result = mysqli_query($conn, $query);
                //Use a while loop to make a table row for every DB row
                //The mysqli_fetch_assoc() function fetches a result row as an associative array
                while( $row = mysqli_fetch_assoc($result)){
              ?>
                <tr>
                    <td><?php echo $row['school_id']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                </tr>
                <?php
                }
              ?>
            </tbody>
        </table>
    </body>
</html>
<?php 
require_once("../model/user_model.php");
$search=$_REQUEST['search'];
$result1 = show_users();

echo "<tr align='center'>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Age</th>
                <th colspan='2'>Action</th>
            </tr>";

while ($row = mysqli_fetch_assoc($result1)) {
        if (strpos($row['name'], $search) !== false) {
            echo "
                <tr align='center'>                          
                <td>{$row['name']}</td>
                <td> {$row['password']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td>
                    <a href='../view/edit_user.php?name={$row['name']}'> EDIT </a> 
                </td>
                <td>
                <button onclick=\"delete_user(event, '{$row['name']}')\"> DELETE </button>  
                </td>
                <?php } ?>
            </tr>
            ";
        }
    }
   


?>
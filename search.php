<?php
    include 'config.php';
    $sql = "select * from registration";

$result = $connection->query($sql);

if($result->num_rows > 0){

    echo "<table border = 1>";
    echo "<tr>
        <th>userName</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>PasswordRepeat</th>
        <tr>";

        while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>".$row["username"]."</td>
                <td>".$row["first_name"]."</td>
                <td>".$row["last_name"]."</td>
                <td>".$row["phone_no"]."</td>
                <td>".$row["Email"]."</td>
                <td>".$row["password"]."</td>
                <td>".$row["repeat_password"]."</td>
                </tr>";
        }
}

else{
    echo "empty table";
}

?>


<!DOCTYPE html>
<html>
<body>
<?php
include 'User.php';
$user = new User();
$result = $user->getAllUsers();
while($row = $result->fetch_assoc()){
    echo $row['first_name'];
}
?>
</body>
</html>

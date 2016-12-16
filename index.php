<!DOCTYPE html>
<html>
<body>
<?php
include 'User.php';
$user = new User();
$result1 = $user->getAllUsers();
while($row1 = $result1->fetch_assoc()){
    echo $row1['first_name'];
    $result2 = $user->getTeamByID($row1['id']);
    while($row2 = $result2->fetch_assoc()){
        echo " ".$row2['team_id'];
    }
    echo '<br/>';
}
?>
</body>
</html>

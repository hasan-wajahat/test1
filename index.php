<!DOCTYPE html>
<html>
<body>
<?php
include 'User.php';
include 'Team.php';
$user = new User();
$team = new Team();
$result1 = $user->getAllUsers();
while($row1 = $result1->fetch_assoc()){
    echo $row1['first_name'];
    $result2 = $user->getTeamByUserID($row1['id']);
    if($result2->num_rows > 0){
        while($row2 = $result2->fetch_assoc()){
            $result3 = $team->getTeamByID($row2['team_id']);
            while($row3 = $result3->fetch_assoc()){
                echo " ".$row3['name'];
            }
        }
    }
    echo '<br/>';
}
?>
</body>
</html>

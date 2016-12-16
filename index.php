<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="index.css">
<body>
    <div class = "container">
        <table class = "table mtop-100">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Teams</th>
                </tr>
            </thead>
            <?php
            include 'User.php';
            include 'Team.php';
            $user = new User();
            $team = new Team();
            ?>
            <tbody>
                <?php
                $result1 = $user->getAllUsers();
                while($row1 = $result1->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>";
                    echo $row1['id'];
                    echo "</td>";
                    echo "<td>";
                    echo $row1['first_name'];
                    echo " ".$row1['last_name'];
                    echo "</td>";
                    echo "<td>";
                    $str = '';
                    $result2 = $user->getTeamByUserID($row1['id']);
                    if($result2->num_rows > 0){
                        while($row2 = $result2->fetch_assoc()){
                            $result3 = $team->getTeamByID($row2['team_id']);
                            while($row3 = $result3->fetch_assoc()){
                                $str .= " ".$row3['name'].",";
                            }
                        }
                    }
                    echo rtrim($str, ",");
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

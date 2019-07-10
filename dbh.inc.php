<?php
include_once 'include'/dbh.inc.php;

?>

<!DOCTYPE html>
<htlm>
<head>
<meta charset="UTF-set">
<title> </title>
<body>
<?php
    $sql = "SELECT * FROM users; "; //fucntion
    $result = mysqli_query($conn, $sql); //function
    $resultcheck = mysqli_num_rows(result); //function

    if ($resultcheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['User_Uid'] . "<br>";

        }

    }
?>

</body>

</head>
</html>
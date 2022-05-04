<?php 
    $host = 'localhost';
    $user = 'rightn';
    $pw = 'aa5983!!';
    $db = 'rightn';
    $conn = mysqli_connect($host, $user, $pw, $db);
    // db 접속 성공 여부에 대한 결과
    if(!$conn) {
        die('ERROR');
    }
?>


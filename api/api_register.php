<?php
    include '../connect.php';
    $sql = 'INSERT INTO tb_user(username,password,fullname,tel,email,linetoken) VALUES("'.$_REQUEST['username'].'","'.$_REQUEST['password'].'","'.$_REQUEST['fullname'].'","'.$_REQUEST['tel'].'","'.$_REQUEST['email'].'","'.$_REQUEST['linetoken'].'")';
    $query = $conn->query($sql);
    if ($query) {
        echo "<script>
            alert('เพิ่มข้อมูลสำเร็จ')
            window.location.href='../register.php';
        </scipt>";
    } else {
        echo $conn->error;
    }
?>
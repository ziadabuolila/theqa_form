<?php
    require('../inc/config.php');
    $IDuser = $_GET['userid'];

    $ID = $_POST['id'];
    $table_name = '';
    $page = '';
    $type_database_table = $_POST['typedatabase'];
    if($type_database_table == 'defult'){
        $table_name = 'delete_specific';
        $page = 'index.php';
    }else if($type_database_table == 'delete_appointed'){
        $table_name = 'delete_appointed';
        $page = 'index_appointed.php';
    }else if($type_database_table == 'delete_postpone'){
        $table_name = 'delete_postpone';
        $page = 'index_postpone.php';
    }
    mysqli_query($conection, "DELETE FROM $table_name WHERE user_id=$ID");
    header('location:'.$page.'?userid='.$IDuser);
?>
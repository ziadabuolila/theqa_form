<?php
    require('../inc/config.php');
    $ID = $_POST['id'];
    $IDuser = $_GET['userid'];
    
    $table_name = '';
    $page = '';
    $type_database_table = $_POST['typedatabase'];
    if($type_database_table == 'defult'){
        $table_name = 'employee_specific';
        $page = 'index.php';
    }else if($type_database_table == 'employee_appointed'){
        $table_name = 'employee_appointed';
        $page = 'index_appointed.php';
    }else if($type_database_table == 'employee_postpone'){
        $table_name = 'employee_postpone';
        $page = 'index_postpone.php';
    }
    
    $conection->query("INSERT INTO employee_appointed(dateOfdate , user_name, job_name, user_email, enlistment, nationality, religion, marital_status, dateOFbirth, placeOFbirth, address, address_street, numberOFphpne, frontOFcard, backOFcard, photoOFuser, sideOFstudy, specialization, graduation_year, educational_qualification, course_name, course_location, course_duration, typeOFcertificate, photoOFcertificate, job_name_1, job_duration_1, pointOFstart_1, pointOFend_1, salary_1, reasonFORleaving_1, do_you_work_1, attached_1, responsibilities_1, job_name_2, job_duration_2, pointOFstart_2, pointOFend_2, salary_2, reasonFORleaving_2, attached_2, responsibilities_2, job_name_3, job_duration_3, pointOFstart_3, pointOFend_3, salary_3, reasonFORleaving_3, attached_3, responsibilities_3, job_name_4, job_duration_4, pointOFstart_4, pointOFend_4, salary_4, reasonFORleaving_4, attached_4, responsibilities_4, person_name_1, person_employer_1, person_address_1, person_phone_1, person_name_2, person_employer_2, person_address_2, person_phone_2, person_name_3, person_employer_3, person_address_3, person_phone_3) SELECT dateOfdate , user_name, job_name, user_email, enlistment, nationality, religion, marital_status, dateOFbirth, placeOFbirth, address, address_street, numberOFphpne, frontOFcard, backOFcard, photoOFuser, sideOFstudy, specialization, graduation_year, educational_qualification, course_name, course_location, course_duration, typeOFcertificate, photoOFcertificate, job_name_1, job_duration_1, pointOFstart_1, pointOFend_1, salary_1, reasonFORleaving_1, do_you_work_1, attached_1, responsibilities_1, job_name_2, job_duration_2, pointOFstart_2, pointOFend_2, salary_2, reasonFORleaving_2, attached_2, responsibilities_2, job_name_3, job_duration_3, pointOFstart_3, pointOFend_3, salary_3, reasonFORleaving_3, attached_3, responsibilities_3, job_name_4, job_duration_4, pointOFstart_4, pointOFend_4, salary_4, reasonFORleaving_4, attached_4, responsibilities_4, person_name_1, person_employer_1, person_address_1, person_phone_1, person_name_2, person_employer_2, person_address_2, person_phone_2, person_name_3, person_employer_3, person_address_3, person_phone_3 FROM $table_name WHERE user_id=$ID");
    mysqli_query($conection, "DELETE FROM $table_name WHERE user_id=$ID");
    header('location:../'.$page."?userid=".$IDuser);    
?>
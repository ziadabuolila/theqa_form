<?php
require('../inc/config.php');

if(isset($_POST['submit'])){
    // table 1
    $user_name = $_POST['username'];
    $user_email = $_POST['useremail'];
    $job_name = $_POST['job'];
    $enlistment = $_POST['enlistment'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $marital_status = $_POST['marital_status'];
    $dateOFbirth = $_POST['dateOFbirth'];
    $placeOFbirth = $_POST['placeOFbirth'];

    $address = $_POST['address'];
    $address_street = $_POST['address_street'];
    $numberOFphpne = $_POST['numberOFphpne'];

    // Process frontOFcard
    $frontOFcard = $_FILES['frontOFcard'];
    $frontOFcard_location = !empty($frontOFcard['tmp_name']) ? $frontOFcard['tmp_name'] : null;
    $frontOFcard_name = !empty($frontOFcard['name']) ? basename($frontOFcard['name']) : null;
    $frontOFcard_up = $frontOFcard_name ? "../uploads/" . $frontOFcard_name : null;

    // Process backOFcard
    $backOFcard = $_FILES['backOFcard'];
    $backOFcard_location = !empty($backOFcard['tmp_name']) ? $backOFcard['tmp_name'] : null;
    $backOFcard_name = !empty($backOFcard['name']) ? basename($backOFcard['name']) : null;
    $backOFcard_up = $backOFcard_name ? "../uploads/" . $backOFcard_name : null;

    // Process photoOFuser
    $photoOFuser = $_FILES['photoOFuser'];
    $photoOFuser_location = !empty($photoOFuser['tmp_name']) ? $photoOFuser['tmp_name'] : null;
    $photoOFuser_name = !empty($photoOFuser['name']) ? basename($photoOFuser['name']) : null;
    $photoOFuser_up = $photoOFuser_name ? "../uploads/" . $photoOFuser_name : null;

    // table 2
    $sideOFstudy = $_POST['sideOFstudy'];
    $specialization = $_POST['specialization'];
    $graduation_year = $_POST['graduation_year'];
    $educational_qualification = $_POST['educational_qualification'];
    // table 3
    $course_name = $_POST['course_name'];
    $course_location = $_POST['course_location'];
    $course_duration = $_POST['course_duration'];
    $typeOFcertificate = $_POST['typeOFcertificate'];

    $photoOFcertificate = $_FILES['photoOFcertificate'];
    $photoOFcertificate_location = !empty($photoOFcertificate['tmp_name']) ? $photoOFcertificate['tmp_name'] : null;
    $photoOFcertificate_name = !empty($photoOFcertificate['name']) ? basename($photoOFcertificate['name']) : null;
    $photoOFcertificate_up = $photoOFcertificate_name ? "../uploads/" . $photoOFcertificate_name : null;
    // table 4
    $job_name_1 = $_POST['job_name_1'];
    $job_duration_1 = $_POST['job_duration_1'];
    $pointOFstart_1 = $_POST['pointOFstart_1'];
    $pointOFend_1 = $_POST['pointOFend_1'];
    $salary_1 = $_POST['salary_1'];
    $reasonFORleaving_1 = $_POST['reasonFORleaving_1'];
    $do_you_work_1 = $_POST['do_you_work_1'];

    $attached_1 = $_FILES['attached_1'];
    $attached_1_location = !empty($attached_1['tmp_name']) ? $attached_1['tmp_name'] : null;
    $attached_1_name = !empty($attached_1['name']) ? basename($attached_1['name']) : null;
    $attached_1_up = $attached_1_name ? "../uploads/" . $attached_1_name : null;

    $responsibilities_1 = $_POST['responsibilities_1'];
    // table 5
    $job_name_2 = $_POST['job_name_2'];
    $job_duration_2 = $_POST['job_duration_2'];
    $pointOFstart_2 = $_POST['pointOFstart_2'];
    $pointOFend_2 = $_POST['pointOFend_2'];
    $salary_2 = $_POST['salary_2'];
    $reasonFORleaving_2 = $_POST['reasonFORleaving_2']; 
    
    $attached_2 = $_FILES['attached_2'];
    $attached_2_location = !empty($attached_2['tmp_name']) ? $attached_2['tmp_name'] : null;
    $attached_2_name = !empty($attached_2['name']) ? basename($attached_2['name']) : null;
    $attached_2_up = $attached_2_name ? "../uploads/" . $attached_2_name : null;

    $responsibilities_2 = $_POST['responsibilities_2'];
    // table 6
    $job_name_3 = $_POST['job_name_3'];
    $job_duration_3 = $_POST['job_duration_3'];
    $pointOFstart_3 = $_POST['pointOFstart_3'];
    $pointOFend_3 = $_POST['pointOFend_3'];
    $salary_3 = $_POST['salary_3'];
    $reasonFORleaving_3 = $_POST['reasonFORleaving_3'];
    
    $attached_3 = $_FILES['attached_3'];
    $attached_3_location = !empty($attached_3['tmp_name']) ? $attached_3['tmp_name'] : null;
    $attached_3_name = !empty($attached_3['name']) ? basename($attached_3['name']) : null;
    $attached_3_up = $attached_3_name ? "../uploads/" . $attached_3_name : null;

    $responsibilities_3 = $_POST['responsibilities_3'];
    // table 7
    $job_name_4 = $_POST['job_name_4'];
    $job_duration_4 = $_POST['job_duration_4'];
    $pointOFstart_4 = $_POST['pointOFstart_4'];
    $pointOFend_4 = $_POST['pointOFend_4'];
    $salary_4 = $_POST['salary_4'];
    $reasonFORleaving_4 = $_POST['reasonFORleaving_4'];

    $attached_4 = $_FILES['attached_4'];
    $attached_4_location = !empty($attached_4['tmp_name']) ? $attached_4['tmp_name'] : null;
    $attached_4_name = !empty($attached_4['name']) ? basename($attached_4['name']) : null;
    $attached_4_up = $attached_4_name ? "../uploads/" . $attached_4_name : null;

    $responsibilities_4 = $_POST['responsibilities_4'];
    // table 8
    $person_name_1 = $_POST['person_name_1'];
    $person_employer_1 = $_POST['person_employer_1'];
    $person_address_1 = $_POST['person_address_1'];
    $person_phone_1 = $_POST['person_phone_1'];
    // table 9
    $person_name_2 = $_POST['person_name_2'];
    $person_employer_2 = $_POST['person_employer_2'];
    $person_address_2 = $_POST['person_address_2'];
    $person_phone_2 = $_POST['person_phone_2'];
    // table 10
    $person_name_3 = $_POST['person_name_3'];
    $person_employer_3 = $_POST['person_employer_3'];
    $person_address_3 = $_POST['person_address_3'];
    $person_phone_3 = $_POST['person_phone_3'];

    // Check if image files are actual images or fake images
    $check1 = $frontOFcard_location ? getimagesize($frontOFcard_location) : false;
    $check2 = $backOFcard_location ? getimagesize($backOFcard_location) : false;
    $check3 = $photoOFuser_location ? getimagesize($photoOFuser_location) : false;
    $check4 = $photoOFcertificate_location ? getimagesize($photoOFcertificate_location) : false;
    $check5 = $attached_1_location ? getimagesize($attached_1_location) : false;

    if($check1 !== false && $check2 !== false && $check3 !== false && $check4 !== false && $check5 !== false ) {
        // Move the uploaded files to the target directory
        $uploadSuccess = true;
        if ($frontOFcard_location && !move_uploaded_file($frontOFcard_location, $frontOFcard_up)) $uploadSuccess = false;
        if ($backOFcard_location && !move_uploaded_file($backOFcard_location, $backOFcard_up)) $uploadSuccess = false;
        if ($photoOFuser_location && !move_uploaded_file($photoOFuser_location, $photoOFuser_up)) $uploadSuccess = false;
        if ($photoOFcertificate_location && !move_uploaded_file($photoOFcertificate_location, $photoOFcertificate_up)) $uploadSuccess = false;
        if ($attached_1_location && !move_uploaded_file($attached_1_location, $attached_1_up)) $uploadSuccess = false;
        if ($attached_2_location && !move_uploaded_file($attached_2_location, $attached_2_up)) $uploadSuccess = false;
        if ($attached_3_location && !move_uploaded_file($attached_3_location, $attached_3_up)) $uploadSuccess = false;
        if ($attached_4_location && !move_uploaded_file($attached_4_location, $attached_4_up)) $uploadSuccess = false;

        if ($uploadSuccess) {
            // Insert data into the database
            $insert = "INSERT INTO employee_specific (user_name, job_name, user_email, enlistment, nationality, religion, marital_status, dateOFbirth, placeOFbirth, address, address_street, numberOFphpne, frontOFcard, backOFcard, photoOFuser, sideOFstudy, specialization, graduation_year, educational_qualification, course_name, course_location, course_duration, typeOFcertificate, photoOFcertificate, job_name_1, job_duration_1, pointOFstart_1, pointOFend_1, salary_1, reasonFORleaving_1, do_you_work_1, attached_1, responsibilities_1, job_name_2, job_duration_2, pointOFstart_2, pointOFend_2, salary_2, reasonFORleaving_2, attached_2, responsibilities_2, job_name_3, job_duration_3, pointOFstart_3, pointOFend_3, salary_3, reasonFORleaving_3, attached_3, responsibilities_3, job_name_4, job_duration_4, pointOFstart_4, pointOFend_4, salary_4, reasonFORleaving_4, attached_4, responsibilities_4, person_name_1, person_employer_1, person_address_1, person_phone_1, person_name_2, person_employer_2, person_address_2, person_phone_2, person_name_3, person_employer_3, person_address_3, person_phone_3) VALUES ('$user_name', '$job_name', '$user_email', '$enlistment', '$nationality', '$religion', '$marital_status', '$dateOFbirth', '$placeOFbirth', '$address', '$address_street', '$numberOFphpne', '$frontOFcard_up', '$backOFcard_up', '$photoOFuser_up', '$sideOFstudy', '$specialization', '$graduation_year', '$educational_qualification', '$course_name', '$course_location', '$course_duration', '$typeOFcertificate', '$photoOFcertificate_up', '$job_name_1', '$job_duration_1', '$pointOFstart_1', '$pointOFend_1', '$salary_1', '$reasonFORleaving_1', '$do_you_work_1', '$attached_1_up', '$responsibilities_1', '$job_name_2', '$job_duration_2', '$pointOFstart_2', '$pointOFend_2', '$salary_2', '$reasonFORleaving_2', '$attached_2_up', '$responsibilities_2', '$job_name_3', '$job_duration_3', '$pointOFstart_3', '$pointOFend_3', '$salary_3', '$reasonFORleaving_3', '$attached_3_up', '$responsibilities_3', '$job_name_4', '$job_duration_4', '$pointOFstart_4', '$pointOFend_4', '$salary_4', '$reasonFORleaving_4', '$attached_4_up', '$responsibilities_4', '$person_name_1', '$person_employer_1', '$person_address_1', '$person_phone_1', '$person_name_2', '$person_employer_2', '$person_address_2', '$person_phone_2', '$person_name_3', '$person_employer_3', '$person_address_3', '$person_phone_3')";
            if (mysqli_query($conection, $insert)) {
                echo "Record inserted successfully.";
            } else {
                echo "Error: " . $insert . "<br>" . mysqli_error($conection);
            }
        } else {
            echo "Sorry, there was an error uploading your files.";
        }
    } else {
        echo "One or more files are not images.";
    }
    header("location:../win.php");
}
?>
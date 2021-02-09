<?php
    session_start();

    include "perfect_function.php";

    $table_name="students";

    $id=$_POST['id'];
    $year_level=$_POST['year_level'];
    $section=$_POST['section'];
    $program=$_POST['program'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];

    $user_data=array(
        "id" => $id,
        "year_level" => $year_level,
        "section" => $section,
        "program" => $program,
        "firstname" => $firstname,
        "middlename" => $middlename,
        "lastname" => $lastname,
        "email" => $email,
        "contact" => $contact,

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;

    
     // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['firstlast'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Added in students(".$id.")";
    
    $user_data=array(
        "username" => $username ,
        "fullname" => $fullname ,
        "user_type" => $user_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);
    
// ______________________________________________________________________________________________________________________

    header("Location: stud_manage.php");

?>
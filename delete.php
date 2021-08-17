<?php
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    if(!$_GET['id']){
        // echo 'ERROR';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");

    } else {
        // Get ID values
        $id = $_GET['id'];

        // Call DELETE function
        $result = $crud->deleteAttendee($id);

        // Redirect to list
        if ($result) {
            header("Location: viewrecords.php");
        } else {
            // echo 'ERROR';
            include 'includes/errormessage.php';
        }
    }
?>
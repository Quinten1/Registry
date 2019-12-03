<?php

require_once 'db/conn.php';



    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $specialty = $_POST['specialty'];
        

        $result = $crud->editAccount($id, $firstname, $lastname, $gender, $email, $address, $specialty);


        if($result){
            header("Location: viewrecords.php");
        }
        else{
            //echo 'error';
            include 'includes/errormessage.php';
        }

    }
    else{
        //echo 'error';
        include 'inlcudes/errormessage.php';
    }










?>
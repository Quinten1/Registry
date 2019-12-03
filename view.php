<?php

$title = 'View A Record';

require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php'; 



    if(!isset($_GET['id'])){
        //echo "<h1 class='text-danger'>Please check details and try again</h1>";
        include 'includes/errormessage.php';
        
    }else{
        $id = $_GET['id'];
        $result = $crud->getAccountDetails($id);
         //$specialtyName = $crud->getSpecialtyById($specialty);
        //$genderName = $crud->getGenderById($gender);

?><br>

        

<div class="card-group text-white bg-info mb-3 text-center" style="width: 18rem; margin:auto">

<div style="margin:auto"><br>

<img src="<?php echo empty($result['avatar_path'])? "uploads/avatar.jpg" : $result['avatar_path'];?>" 
        class="rounded-circle card-img-top center" style="width:50%; height:50%"/>

        <div class="card-body ">
            <h5 class="card-title"><?php echo $result['firstname'] .' '. $result['lastname']?></h5>
            
            <p class="card-text">Specialty: <?php echo $result['name']?></p>
            <p class="card-text">Email: <?php echo $result['email']?></p>
            <p class="card-text">Address: <?php echo $result['homeaddress']?></p>

        </div>
        </div>
</div>
    <br>
        <a href="viewrecords.php" class="btn btn-info">Back to List</a>
        <a href="edit.php?id=<?php echo $result['account_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick = "return confirm('Are you sure you want to delete this record?');"
         href="delete.php?id=<?php echo $result['account_id'] ?>" class="btn btn-danger">Delete</a>

        <?php } ?>


    <br/>
    <br/>
    <br/>
    <?php require_once 'includes/footer.php'; ?>
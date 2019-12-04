<?php 

    $title = 'Registration Success';

    require_once 'includes/header.php'; 
   // require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    //require 'sendemail.php';


    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $specialty = $_POST['specialty'];
        
        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        
        
        
        $target_dir = "uploads/";
        $destination = "$target_dir$email.$ext";
        move_uploaded_file($orig_file,$destination);
       
        
        
        $isSuccess = $crud->insertAccounts($firstname, $lname, $gender, $email, $address, $specialty, $destination);
        $specialtyName = $crud->getSpecialtyById($specialty);
        $genderName = $crud->getGenderById($gender);
        

        if($isSuccess){
           // sendEmail::sendMail($email,'', 
          
           include 'includes/successmessage.php';

        }
        else{
            
            include 'includes/errormessage.php';
        }
    }
  

?> 


<div class="card-group text-white bg-secondary mb-3 text-center" style="width: 18rem; margin:auto">

        <div style="margin:auto"><br>
                
        <img src="<?php echo empty($_FILES['avatar']['name']) ? "uploads/avatar.jpg" : $destination ?>" 
        class="rounded-circle card-img-top center" style="width:50%; height:50%"/>

        <div class="card-body">
            <h5 class="card-header"><?php echo $_POST['firstname'] .' '. $_POST['lastname']?></h5>
            <h6 class="card-title mb-2 "><?php echo $specialtyName['name']?></h6>
            <p class="card-text">Gender: <?php echo $genderName['name']?></p>
            <p class="card-text">Email: <?php echo $_POST['email']?></p>
            <p class="card-text">Address: <?php echo $_POST['address']?></p>

        </div>

        </div>
</div>
     <br/>
  <div style="float:center" >  <a class="btn btn-dark " href="loginpage.php" role="button" >Back</a></div>

                










<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php require_once 'includes/footer.php'; ?>
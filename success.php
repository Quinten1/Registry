<?php 

$title = 'Success';

require_once 'includes/header.php';
require_once 'db/conn.php';



    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $homeaddress = $_POST['homeaddress'];
        $specialty = $_POST['specialty'];

        $isSuccess = $crud->insertAccounts($username, $firstname, $lastname, $gender, $email, $homeaddress, $specialty);


        if($isSuccess){
            echo '<h2 class="text-center text-success" >You Have Been Registered!</h2>';
        }
        else{
            echo '<h2 class="text-center text-danger" >There was an error please try again!</h2>';
        }
    }

?>

 

















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
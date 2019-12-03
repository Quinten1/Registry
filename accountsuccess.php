<?php 

$title = 'Account Success';

require_once 'includes/header.php';
require_once 'db/conn.php';



    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $isSuccess = $user->insertUser($username, $password);


        if($isSuccess){
            echo '<h2 class="text-center text-success" >Account created successfully!</h2>';
            echo '<h3 class="text-center text-success" >Please Login</h3>';
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
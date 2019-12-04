<?php 

$title = 'Admin Login';

require_once 'includes/header.php';
require_once 'db/conn.php';




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_password = md5($password.$username);

    $result = $user->getUser($username, $new_password);
    if(!$result){
        echo '<div class = "alert alert-danger">Username or Password is incorrect! Please try again. </div>';
        
    }else{
       
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $result['users_id'];
        header("Location: loginpage.php");
    }

    


}

?>
<br>
<h1 class="text-center"><?php echo $title ?></h1>
<br>
    <div class="form">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" style="margin:auto">
    <br style="margin:center">
    <div class="col-6"> <table class="table table-sm form">
            <tr>
                <td><label for="username">Username: * </label></td>
                <td><input type="text" name="username" class="form-control" id="username" value="
                <?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username'];?>">
            
                
            </tr>
            <tr>
                <td><label for="password">Password: * </label></td>
                <td><input type="password" name="password" class="form-control" id="password">
            
           
            </td>

            </tr>
        </table></div><br><br><br>
       <button type="submit" class="btn btn-outline-dark">Login</button><br>
        <a href="#">Forget Password</a>

    </form> </div><br><br><br><br>
    
    
    <?php include_once 'includes/footer.php'?>
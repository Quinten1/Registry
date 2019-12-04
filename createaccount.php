<?php

$title = 'Create Account';

require_once 'includes/header.php';
require_once 'db/conn.php';

$result = $crud->getSpecialties();
   
?><br>

<h1 class="text-center">Create Account</h1><br><br>


<div class="form">
<form style="margin:auto" method="post" action="accountsuccess.php">
  <br class="row form" style="margin:center">
     <div class="row"> 
        <div class="col-6">
        <label for="username">Username</label>
      <input type="text" class="form-control" placeholder="Username" name="username">
        </div> <br>
        <div class="col-6">
        <label for="username">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
     
            </div> </div> <br>
    
  <button class="btn btn-primary" type="submit" name="submit">Create</button>
</form>
</div>

















    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <?php require_once 'includes/footer.php'; ?>
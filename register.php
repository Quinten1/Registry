<?php 

$title = 'Registration';

require_once 'includes/header.php';
require_once 'db/conn.php';
//require_once 'includes/auth_check.php';

$results = $crud->getSpecialties();
$result = $crud->getGender();

?>


<br>

<h2 class="text-center">Registration Form</h2><br>

<div>
    <p class="text-center">Please fill out form below to register for our services.</p>
</div><br><br>




<form style="margin:auto" method="post" action="registrationsuccess.php" enctype="multipart/form-data">
  <br class="row form" style="margin:center">
     <div class="row"> 
        <div class="col-6">
        <label for="firstname">Firstname</label>
      <input required type="text" class="form-control" placeholder="Firstname" name="firstname">
        </div> <br>
        <div class="col-6">
        <label for="lastname">Lastname</label>
      <input required type="text" class="form-control" placeholder="Lastname" name="lastname">
     
            </div> </div><br>
            <div class="row"> 
        <div class="col-6">
        <label for="email">Email</label>
      <input type="email" class="form-control" placeholder="Email" name="email">
        </div> <br>
        <div class="col-6">
        <label for="specialty">Specialty</label>
            <select class="form-control custom-select mr-sm-2" name="specialty" id="specialty" placeholder="Specialty">
            <option selected>Choose...</option>
            <?php while($row = $results->fetch(PDO::FETCH_ASSOC))  { 
                  echo  "<option value='". $row['specialty_id'] . "'>" . $row['name'] . "</option>";
                 } ?>
            </select>
            
            </div><br>
            <div class="col-6"><br>
            <label for="gender">Gender</label>
            <select class="form-control custom-select mr-sm-2" name="gender" id="gender" >
            <option selected>Choose...</option>
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC))  { 
                  echo  "<option value='". $row['gender_id'] . "'>" . $row['name'] . "</option>";
                 } ?>
            </select>
            
            </div>
                </div><br>
            
            <div class="col-24">
            <label for="address">Address</label>
         <input required type="text" class="form-control" placeholder="Address" name="address">
     
          </div><br>
                <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
                <label class="custom-file-label" for="avatar">Choose File</label>
                <small id="avatar" name="avatar" class="form-text text-info">File Upload is Optional</small>
     
                </div><br>
            
               <button class="btn btn-primary" type="submit" name="submit" style="float:right">Submit</button>
               
                
        
          <br><br><br>
          <a href="loginpage.php" class="btn btn-secondary" style="" role="button">Back</a>
          </div>
          
  
</form>























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
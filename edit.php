<?php 

$title = 'Edit Record';

require_once 'includes/header.php';
require_once 'db/conn.php';
require_once 'includes/auth_check.php';

$results = $crud->getSpecialties();
$result = $crud->getGender();

if(!isset($_GET['id'])){

    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
    //echo 'error';
}else{
    $id = $_GET['id'];
    $account = $crud->getAccountDetails($id);

   

?>


<br>

<h2 class="text-center">Edit Record</h2><br>

<<br>




<form style="margin:auto" method="post" action="editpost.php" enctype="multipart/form-data">
<input type="hidden" name = "id" value = "<?php echo $account['account_id']?>" />
  <br class="row form" style="margin:center">
     <div class="row"> 
        <div class="col-6">
        <label for="firstname">Firstname</label>
      <input required type="text" class="form-control" value = "<?php echo $account['firstname']?>" placeholder="Firstname" name="firstname">
        </div> <br>
        <div class="col-6">
        <label for="lastname">Lastname</label>
      <input required type="text" class="form-control" value = "<?php echo $account['lastname']?>" placeholder="Lastname" name="lastname">
     
            </div> </div><br>
            <div class="row"> 
        <div class="col-6">
        <label for="email">Email</label>
      <input type="email" readonly  class="form-control"  value = "<?php echo $account['email']?>" placeholder="Email" name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div> <br>
        <div class="col-6">
        <label for="specialty">Specialty</label>
            <select class="form-control custom-select mr-sm-2" name="specialty" id="specialty" placeholder="Specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC))  { ?>
                    <option value="<?php echo $r['specialty_id']?>" <?php if($r['specialty_id']
                     == $account['specialty_id']) echo 'selected' ?>>
                    <?php echo $r['name']; ?>
                </option>
                <?php } ?>
            </select>
            
            </div><br>
            <div class="col-6"><br>
            <label for="gender">Gender</label>
            <select class="form-control custom-select mr-sm-2" name="gender" id="gender" >
            <?php while($r = $result->fetch(PDO::FETCH_ASSOC))  { ?>
                    <option value="<?php echo $r['gender_id']?>" <?php if($r['gender_id']
                     == $account['gender']) echo 'selected' ?>>
                    <?php echo $r['name']; ?>
                </option>
                <?php } ?>
            </select>
            
            </div>
                </div><br>
            
            <div class="col-24">
            <label for="address">Address</label>
         <input required type="text" class="form-control" value = "<?php echo $account['homeaddress']?>" placeholder="Address" name="address">
     
          </div><br>
                <div class="custom-file">
                <input type="file" accept="image/*" disabled class="custom-file-input" id="avatar" name="avatar" >
                <label class="custom-file-label"   for="avatar">Choose File</label>
                <small id="avatar" name="avatar" class="form-text text-info">File Upload is Optional</small>
     
                </div><br>
            
                <button type="submit" name="submit" id="submit" class="btn btn-success" style="float:right">Save Changes</button>
               
                
        
          <br><br><br>
                <a href="viewrecords.php" class="btn btn-secondary" role="button">Back to List</a>
          </div>
          
        
  
</form>


<?php } ?>



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
<?php 

$title = 'Index';

require_once 'includes/header.php';
require_once 'db/conn.php';
require_once 'includes/auth_check.php';


$results = $crud->getAccounts();



?><br>


<table class="table table-bordered table-hover">
  <thead class="bg-primary">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Specialty</th>
      <th>Actions</th>

    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {  ?>
        
        <tr class="table-light table-border">
            <td> <?php echo $r['account_id'] ?></td>
            <td><?php echo $r['firstname'] ?></td>
            <td><?php echo $r['lastname'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><?php  echo $r['name'] ?></td>
            <td>
            <a href="view.php?id=<?php echo $r['account_id'] ?>" class="btn btn-primary">View</a>
            </td>
        </tr>
    <?php }?>
  
</table><br>
                <a href="createaccount.php" class="btn btn-warning">Create a user</a>

















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
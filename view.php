<?php 
    $title = 'View record';

    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    // Get attendee by id
    if(!isset($_GET['id'])){
        // echo "<h1 class='text-danger'>Please check details and try again</h1>";
        // echo 'ERROR';
        include 'includes/errormessage.php';
        
    } else {
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
?>
<img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path']; ?>" 
class="rounded-circle" style="width: 30%; height: 30%" />

<!-- This prints outs values that were passed to the action page using method="post" -->
    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['firstname'] . ' ' . $result['lastname']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name']; ?></h6>
            <p class="card-text">Date of birth: <?php echo $result['dateofbirth']; ?></p>
            <p class="card-text">Email: <?php echo $result['emailaddress']; ?></p>
            <p class="card-text">Contact number: <?php echo $result['contactnumber']; ?></p>
        </div>
    </div><br/> 
    <a href="viewrecords.php" class="btn btn-info">Back to list</a>
    <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
<?php } ?>

<br><br><br><br>
<?php require_once 'includes/footer.php'; ?>
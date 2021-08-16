<?php 
    $title = 'Edit record';

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();

    if(!isset($_GET['id'])) {
        // echo 'ERROR';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    } else {
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);

?>
    <h1 class="text-center">Edit record</h1>
    
    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id']; ?>"> 
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname']; ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname']; ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of birth</label>
            <input type="date" class="form-control" value="<?php echo $attendee['dateofbirth']; ?>" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of expertice</label>
            <select class="form-select" id="specialty" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
                    <?php echo $r['name'] ?>
                </option>
            <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['emailaddress']; ?>" id="email" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-mutted">We'll never share your email with anyone else.</small>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact number</label>
            <input type="text" class="form-control" value="<?php echo $attendee['contactnumber']; ?>" id="phone" name="phone" aria-describedby="phonelHelp">
            <small id="phoneHelp" class="form-text text-mutted">We'll never share your number with anyone else.</small>
        </div>
        
        <div class="d-grid gap-2 d-md-block">
            <a href="viewrecords.php" class="btn btn-default">Back to list</a>
            <button type="submit" name="submit" class="btn btn-success">Save changes</button>
        </div>
    </form>
<?php } ?>
<br><br><br><br>
<?php require_once 'includes/footer.php'; ?>
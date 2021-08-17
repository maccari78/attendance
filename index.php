<?php 
    $title = 'Index';

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();
?>
    <!-- 
        - First name:
        - Last name:
        - Date of birth (Use datepicker):
        - Speciality (Database admin, Software developer, Web administrator, other)
        - Email address
        - Contact number
     -->
    <h1 class="text-center">Registration for IT Conference</h1>
    
    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of birth</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of expertice</label>
            <select class="form-select" id="specialty" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name'] ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-mutted">We'll never share your email with anyone else.</small>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact number</label>
            <input required type="text" class="form-control" id="phone" name="phone" aria-describedby="phonelHelp">
            <small id="phoneHelp" class="form-text text-mutted">We'll never share your number with anyone else.</small>
        </div>
        <div class="mb-3 custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
            <label class="custom-file-label" for="avatar" >Choose file</label>
            <small id="avatar" class="form-text text-danger">File upload is optional.</small>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
<br/><br/><br/><br/>
<?php require_once 'includes/footer.php'; ?>
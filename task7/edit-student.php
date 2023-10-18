<?php

include 'header.php';

$servername = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "php101";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);

if(!empty($_GET)){
    $student_id = $_GET['id'];

    $sql = "Select * from tbl_student where id=".$student_id;
    $result = $conn->query($sql);

   if($result->num_rows < 1){
    echo "No script kiddies please, dying.";
    die();
   }
   $st_data = $result->fetch_assoc();
}

?>

<div id="main">

<h1>Edit Record for <q><?php echo $st_data['first_name'].' '.$st_data['last_name']; ?></q></h1>

<form method="POST" action="/phpstart/task7/students.php">
    <div class="fieldgroup">
        <label>First Name</label>
        <input type="text" name="fname" value="<?php echo $st_data['first_name']; ?>" />
    </div>

    <div class="fieldgroup">
        <label>Last Name</label>
        <input type="text" name="lname" value="<?php echo $st_data['last_name']; ?>" />
    </div>

    <div class="fieldgroup">
        <label>Gender</label>
        <label>Male</label>
        <input type="radio" name="gender" value="male" />

        <label>Female</label>
        <input type="radio" name="gender" value="female" />

        
    </div>

    <div class="fieldgroup">
        <label>Address</label>
        <textarea rows="2" cols="20"><?php echo $st_data['address']; ?></textarea>
    </div>

    <div class="fieldgroup">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $st_data['email']; ?>" />
    </div>


    <div class="fieldgroup">
        <label>Contact</label>
        <input type="text" name="contact" value="<?php echo $st_data['contact']; ?>" />
    </div>

    <div class="fieldgroup">
        <input type="submit" name="submit" value="update" class="btn-update" />
    </div>
</form>

</div>

<?php



include 'footer.php';
?>



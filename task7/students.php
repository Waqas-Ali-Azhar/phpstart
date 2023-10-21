<?php
    include 'header.php';

    
    if(!empty($_GET)){
        $deleteID = $_GET['delid'];
        $sql = "delete from tbl_student where id=".$deleteID;
        $deleted = $conn->query($sql);
    }

    if(!empty($_POST['updateID'])){
        $sql = "Update tbl_student SET first_name ='".$_POST['fname']."' 
        , last_name='".$_POST['lname']."'
        , gender = '".$_POST['gender']."'
        , address ='".$_POST['address']."'
        , contact = '".$_POST['contact']."'
        , email ='".$_POST['email']."' where id=".$_POST['updateID'];

    

        $update = $conn->query($sql);
    
    
    }

    $sql = "SELECT * FROM tbl_student";
    $result = $conn->query($sql);
     

    ?>

    <div id="main">

    <h1 style="text-align: center;">All Students</h1>

    <div class="content">
        <?php

if($result->num_rows > 0){
    echo "<table style='border:1px solid black; margin:0 auto;'>";
    echo "<tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
    </tr>";
    while($row = $result->fetch_assoc()){
       ?>   
       <tr>
            <td style="background-color: yellow;;"><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['contact'] ?></td>
            <td>
                <a href="edit-student.php?id=<?php echo $row['id']; ?>">Edit</a>
            </td>
            <td>
                <a onclick="confirmDelete(event);" href="students.php?delid=<?php echo $row['id']; ?>">Delete</a>
            </td>
       </tr>

       <?php
    }

    echo "</table>";

    
}

        
        ?>
    </div>



    </div>

    <?php


    include 'footer.php';

?>
  



<?php

    include 'header.php';


    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $database = "php101";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);


    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    else{

        $sql = "SELECT * FROM tbl_student";
        $result = $conn->query($sql);

       
        
        






    }

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
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['contact'] ?></td>
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
  



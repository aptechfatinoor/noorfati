<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Connectivity</title>
</head>
<body>
    <h2>Here we going to learn about Php Connectivity.....</h2>
    <hr>
    <form method="post">

        <label for="">Student ID</label>
        <input type="number" name="Sid" id="ID" placeholder="Enter Your ID"> <br><br>

        <label for="">Student Name</label>
        <input type="text" name="Sname" id="name" placeholder="Enter Your Name"><br><br>


        <label for="">Student Age</label>
        <input type="number" name="Sage" id="Age" placeholder="Enter Your Age"><br><br>



        <label for="">Student Contact No</label>
        <input type="number" name="phone" id="contact" placeholder="Enter Your Phone Number"><br><br>


        <label for="">Student City</label>
        <input type="text" name="Scity" id="City" placeholder="Enter Your City"><br><br>

        <input type="submit" name="Submitbtn" value="Submit">



    </form>

    <?php

    $data = mysqli_connect("localhost","root","","db_student_data");
    // if($data == true){
    //     echo "Database Created Succesfully";
    // }

    if (isset($_POST['Submitbtn'])) {
        $ID =$_POST['Sid'];
        $Name =$_POST['Sname'];
        $Age =$_POST['Sage'];
        $Contact =$_POST['phone'];
        $City =$_POST['Scity'];
        $query = "INSERT INTO tbl_student(ID, Student_Name, Student_Age, Contact_No, City) VALUES ($ID,'$Name','$Age','$Contact','$City')";
        $result = mysqli_query($data , $query);
        if($result) {
            echo "Data Inserted Complelted";
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>








    
</body>
</html>
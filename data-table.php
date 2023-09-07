<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
 <!-- Fontawasome cdn link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
 integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap 5.2x cdn link -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- Custom CSS link -->
   <link rel="stylesheet" href="assets/css/table.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<title>House Of Progressive Education</title>
</head>
<body>






  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5 mt-5">
            <h2 class="marks-heading">Table of php Data</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="table-wrap">
                <table class="table mb-5">
                    <thead class="thead-primary">
                        <tr>
                            <th class="id-hide">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php

                 $con = mysqli_connect("localhost","root","","db_form_assigment");
                 $query = "SELECT * FROM tbl_form_assigment";
                 $result = mysqli_query($con , $query);
                 foreach ($result as $row) {
                     echo "<tr>";
                     echo "<td>$row[ID]</td>";
                     echo "<td>$row[F_Name]</td>";
                     echo "<td>$row[F_email]</td>";
                     echo "<td>$row[F_phone]</td>";
                     echo "<td>$row[F_address]</td>";
                     echo "<td>$row[F_message]</td>";

                     echo "<td>
                     <a href='delete.php?son=$row[ID]'>Delete</a>
                     </td>";

                     echo "</tr>";
                
                 }
  
  
  
  
                 ?>

                    </tbody>


                        
                </table>
            </div>
        </div>
    </div>



  </div>


  





  
 
  

  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
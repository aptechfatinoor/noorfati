<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">


<!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- font-awesome -->
<title>Php Form</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 form-sizing Info1">
                <h5 class="send mt-4 mx-4">Send us a message</h5>


                <div class="form h-100">
                    <form class="mb-5" method="post">

                    <div class="row">

                    <div class="col-md-6 form-group mb-5 mt-4 id-hide">
                    <input type="number" class="form-control" name="ID" id="ID" placeholder="Your ID">
                    </div>



                    <div class="col-md-6 form-group mb-5 mt-4">
                    <label for="name" class="col-form-label">Name *</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                    </div>
                    
                    <div class="col-md-6 form-group mb-5 mt-4">
                    <label for="email" class="col-form-label">Email *</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6 form-group mb-5">
                    <label for="phone" class="col-form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                    </div>

                    <div class="col-md-6 form-group mb-5">
                    <label for="address" class="col-form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Your address">
                    </div>
                    </div>



                    <div class="row">
                    <div class="col-md-12 form-group mb-5">
                    <label for="message" class="col-form-label">Message *</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-12 form-group">
                    <input type="submit" value="Send Message" class="send-btn btn btn-primary rounded-0 py-2 px-4" name="send-btn">
                    </div>
                    </div>


                    </form>
                    </div>


            </div>



            <div class="col-md-4 form-sizing Info2">
                <h5 class="contact mt-5 mx-4">Contact Information</h5>
                <p class="contact-para mx-4 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, magnam!</p>

                <div class="col-12">
                    <div class="location mt-5"><i class="fa-solid fa-location-dot mx-4"></i>9757 Aspen Lane South Richmond <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hill, NY 11419</div>

                </div>


                <div class="phone mt-3"><i class="fa-solid fa-phone mx-4"></i>+1 (291) 939 9321</div>


                <div class="email mt-4"><i class="fa-solid fa-envelope mx-4"></i> info@mywebsite.com</div>



            </div>


            <a href="data-table.php">
                <button type="button" class="show-btn btn mt-5 mb-5">Show Data</button>
            </a>


            <a href="Update-table.php">
                <button type="button" class="show-btn btn mt-5 mb-5">Update Data</button>
            </a>




        </div>
    </div>




    <?php
    $form = mysqli_connect("localhost","root","","db_form_assigment");

    if(isset($_POST['send-btn'])) {
        $sid = $_POST['ID'];
        $A = $_POST['name'];
        $B = $_POST['email'];
        $C = $_POST['phone'];
        $D = $_POST['address'];
        $E = $_POST['message'];
        $query = "INSERT INTO `tbl_form_assigment`(ID, F_Name, F_email, F_phone, F_address, F_message) VALUES ('$sid','$A','$B','$C','$D','$E')";
        $F = mysqli_query($form , $query);
    }
    ?>







<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
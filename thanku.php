<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['student_name']??'None';
    $gender=$_POST['gender']??'None';
    $guardian=$_POST['guardian']??'None';
    $category=$_POST['caste']??'None';
    $contact=$_POST['contact']??'None';
    $dob=$_POST['dob']??'None';
    $course=$_POST['course']??'None';
    $reg=$_POST['reg']??'None';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thank You Admission Successfull</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/font.css">
    </head>
    <body>
        <section class="doc">
            <div class="container flex flex-col">
                <div class="head flex">
                    <div class="logo-icon"><img src="img/logo_new.png"></a></div>
                    <div class="text-center">
                        <h1>Bidhan Chandra College</h1>
                        <h5>University of Calcutta</h5>
                    </div>
                </div>
                <div class="grid">
                    <p>Registration No:</p><h3><?php echo $reg?></h3>
                    <p>Name:</p><h3><?php echo $name?></h3>
                    <p>Guardian's Name:</p><h3><?php echo $guardian?></h3>
                    <p>Category:</p><h3><?php echo $category ?></h3>
                    <p>Date of Birth:</p><h3><?php echo $dob ?></h3>
                    <p>Gender:</p><h3><?php echo $gender?></h3>
                    <p>Course:</p><h3><?php echo $course ?></h3>
                    <p>Contact:</p><h3><?php echo $contact?></h3>
                </div>
                <div class="text-center my-2">
                    <h1>Thank You Your Admission Details are accepted</h1>
                    <p>Submit This form with fees in college.</p>
                </div>
                <button class="btn-primary good" value="Print this page" onClick="window.print()">Save</button>
            </div>
        </section>
    </body>
</html>
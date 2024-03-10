<?php

session_start();

  if (!isset($_SESSION['counsellorname']))
   {
  	header("location:login.php");
  }

  elseif($_SESSION['usertype']=='student')
  {

  	header("location:login.php");
  	
  }




?>


<?php include "admin_sidebar.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- Custom styles -->
    <style>
body {
    background-color: #f8f9fa;
    color: #495057;
    font-family: 'Arial', sans-serif;
}

.card-space:hover .card {
    transform: rotateY(-180deg);
}

.card {
    border-radius: 10px;
    height: 350px;
    margin: 10px;
    width: 100%;
    position: relative;
    transform-style: preserve-3d;
    transition: all 0.5s ease;
    display: flex;
    flex-direction: column;
}

.face {
    border-radius: 10px;
    box-shadow: 4px 4px 7px rgba(0, 0, 0, 0.1);
    background-color: #59D5E0;
    padding: 20px;
    position: absolute;
    height: 100%;
    width: 100%;
    color: #fff;
}

.face h2 {
    padding: 0;
    margin-top: 5px;
    font-size: 24px;
    font-weight: bold;
    color: #fff;
}

.face.front h2 {
    margin-bottom: 10px;
}

.face.front img {
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto;
    border-radius: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    object-fit: cover; /* This ensures the image covers the entire space of the container */
}

.face p {
    margin-top: 10px;
    color: #fff;
}

.face.front {
    text-align: center;
    z-index: 20;
    backface-visibility: hidden;
    transform: rotateY(0deg);
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.face.front h2 {
    margin-bottom: 10px;
}

.face.back {
    transform: rotateY(180deg);
    backface-visibility: hidden;
}

 

.jumbotron {
   
    background-size: cover;
    color: #333;
    text-align: center;
    padding: 100px 20px;
    margin-bottom: 0;
    background-color: lightblue;
    border-bottom: 2px solid #59D5E0;
}

.jumbotron h1,
.jumbotron p {
    color: #333;
}

.vision-mission {
    background-color: #f0f8ff;
    padding: 50px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.vision-mission h2,
.vision-mission p {
    color: #333;
}

.features {
    background-color: #fff;
    padding: 50px 20px;
}

.feature-icon {
    font-size: 3rem;
    color: #007bff;
}

.quotes {
    background-color: #f0f8ff;
    color: #333;
    padding: 50px 20px;
}

.carousel-inner>.carousel-item>img {
    width: 100%;
    height: auto;
}

.footer {
    background-color: #59D5E0;
    color: #333;
    padding: 20px 0;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}


    </style>
</head>

<body>

    

    <!-- Jumbotron -->
    <div class="jumbotron">
    <div class="row">
        <div class="col-md-8">
            <h1 class="display-4" style="font-style: italic;">First Aid Towards Mental Well-Being</h1>
            <p class="lead" style="font-style: italic;">We're Here to Lift Your Spirits and Brighten Your Days.</p>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img src="./new image/latest.jpeg" alt="Your Image" class="img-fluid" style="width: 300px; height:250px;">
        </div>
    </div>
</div>



    <!-- Vision and Mission Section -->

<!-- Vision and Mission Section -->
<section class="vision-mission text-center" style="background-image: url('your-image-path.jpg'); background-size: cover; background-position: center; padding: 50px 0;">
    <div class="container"  style="font-style:italic">
        <div class="row">
            <div class="col-md-6 mx-auto text-left" style="border-right: 2px solid #59D5E0; padding-right: 20px; border-radius: 10px 0 0 10px;">
                <h2 class="mb-4"  style="font-size: 2.5rem;">Our Vision</h2>
                <p class="lead" style="font-size: 1.25rem;">"We envision a future where every student has easy access to professional counseling services that cater to their unique needs. Our platform aims to be a beacon of support, fostering a culture of self-discovery, resilience, and personal development. Through innovation and collaboration, we strive to become the preferred destination for students seeking counseling, promoting a positive impact on their academic, emotional, and social well-being."</p>
            </div>
            <div class="col-md-6 mx-auto text-left" style="border-radius: 0 10px 10px 0;">
                <h2 class="mb-4" style="font-size: 2.5rem;">Our Mission</h2>
                <p class="lead" style="font-size: 1.25rem;">"To empower students in their educational journey by providing a confidential and supportive space for personalized counseling sessions. Our mission is to foster holistic growth, mental well-being, and academic success by connecting students with experienced counselors who guide them through challenges and help unlock their full potential."</p>
            </div>
        </div>
    </div>
</section>






    <!-- Features Section -->
<div class="features text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-user-md feature-icon"></i>
                <h3>Professional Guidance</h3>
                <p>Benefit from professional guidance and counseling by certified mental health experts.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-hand-holding-heart feature-icon"></i>
                <h3>Personalized Approach</h3>
                <p>Experience a personalized approach tailored to your unique needs and challenges.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-globe feature-icon"></i>
                <h3>Accessible Services</h3>
                <p>Access mental health services conveniently, ensuring support is readily available when you need it.</p>
            </div>
        </div>
    </div>
</div>



    <!-- Quotes Section -->
    <div class="quotes text-center">
        <h2>Inspirational Quotes</h2>
        <p>"Your mental health is just as important as your physical health. Seek help when needed."</p>
        <p>"It's okay not to be okay. Take the first step towards healing."</p>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <p>&copy; 2024 MindMatters. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


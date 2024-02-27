<?php include "student_sidebar.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease forwards;
            background-color:lightblue;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        h1, h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        p {
            text-align: justify;
            color: #555;
            line-height: 1.6;
        }
        img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            border-radius: 10px;
        }
        ul {
            list-style-type: square;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .card {
            margin: 0 auto;
            width: 20rem;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            border: 1px solid black;
            transition: transform 0.3s;
            background-color: #f8f9fa; /* Added background color */
        }
        .card:hover {
            transform: translateY(-5px);
            background-color: #e9ecef; /* Change background color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Dashboard</h1>
        
        <img src="./readme-images/studenthelp.jpg" alt="Counselor" width="400">

        <h2>Welcome</h2>
        
        <p>We provide a safe and confidential space for students to discuss their concerns. Our team of experienced counselors is here to support you on your journey towards better mental health and well-being.</p>
        
        <h2>How We Can Help</h2>
        
        <p>Our counseling services cover a wide range of issues including:</p>
        
        <div class="d-flex justify-content-center text-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Building Self Awareness</h5>
                        <p class="card-text">Get to know some intriguing facts about yourself and enhance your knowledge.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Counseling</h5>
                        <p class="card-text">Get a space to express your feelings where you will learn healthier coping mechanisms.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mental Health Wellbeing</h5>
                        <p class="card-text">Learn to build a pleasant, meaningful and engaged life. Find your purpose and meaning.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Support Group</h5>
                        <p class="card-text">Find support with individuals sharing the same pain as yours. There is no greater bond.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



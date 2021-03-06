<?php

$conn = new mysqli("localhost", "root", "","maruthipharma_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$dob = $_POST['dateofbirth'];
    	$phno = $_POST['number'];
    	$subject = $_POST['subject'];
    	$message = $_POST['message'];
    	$sql = "INSERT INTO contactus (name,email,dob,phone,subject,message) VALUES ('$name', '$email', '$dob','$phno','$subject','$message')";

		if ($conn->query($sql) === TRUE) {
  			?>
  			?>
		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Maruthi Pharma</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!------------Bootstrap ---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Vendor CSS Files -->
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!---------Stylesheet-->
    <link href="css\style.css" rel="stylesheet">
</head>
<body>
    <style>
        #header{
              background-color:#92b1f2;
        }
    </style>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
    
            <!-- <h1 class="logo me-auto"><a href="index.html">Sri Maruthi Pharma</a></h1> -->
    
            <a href="index.html" class="logo me-auto"><img src="images\logonew.png" alt="" class="img-fluid"></a>
    
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto active" href="contact.html">Contact Us</a></li>
                    <li><a class="nav-link scrollto" href="about.html">About Us</a></li>
                    <li class="nav-link scrollto">
                        <input type="text" name="search" id="search" placeholder="Search this website">
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
    
        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>We would love to hear it from you on your
                    query. Any questions or remarks?. Just write us a Message. </p>
                </div>
        
                <div class="row">
        
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="cont">
                                <h2>Contact Information</h2>
                                <p>Fill up the form and our team will get back to you within 24 hours</p>
                            </div>
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                
                                <p> <span>Sri Maruthi Pharma,</span> Ambedkar Bheedhi, Sampangi Rama Nagara, Bengaluru, Karnataka 560001</p>
                            </div>
        
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                
                                <p>srimaruthipharma@gmail.com</p>
                            </div>
        
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                
                                <p>+91 8618102799</p>
                            </div>
        
                            <!-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->

                        
                            
                            <div class="social-link mt-3">
                                <a href="www.whatsapp.com" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                                <a href="www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="www.twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        
                            </div>
                        
                        </div>
        
                    </div>
        
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <p>Your message was sent.. Thank you </p>
                    </div>
        
                </div>
        
            </div>
        </section><!-- End Contact Section -->
    </main>
   

    <!-- ======= Footer ======= -->
    <footer id="footer">
    
         <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright 2021 <strong><span>Sri Maruthi Pharma</span></strong>. All Rights Reserved
            </div>
    
        </div>
    </footer><!-- End Footer -->
    

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/waypoints/noframework.waypoints.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="js\main.js"></script>
</body>
</html>
  			<?php
		} else {
  			?>
  			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Maruthi Pharma</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!------------Bootstrap ---------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Vendor CSS Files -->
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <!---------Stylesheet-->
    <link href="css\style.css" rel="stylesheet">
</head>
<body>
    <style>
        #header{
              background-color:#92b1f2;
        }
    </style>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
    
            <!-- <h1 class="logo me-auto"><a href="index.html">Sri Maruthi Pharma</a></h1> -->
    
            <a href="index.html" class="logo me-auto"><img src="images\logonew.png" alt="" class="img-fluid"></a>
    
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto active" href="contact.html">Contact Us</a></li>
                    <li><a class="nav-link scrollto" href="about.html">About Us</a></li>
                    <li class="nav-link scrollto">
                        <input type="text" name="search" id="search" placeholder="Search this website">
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
    
        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>We would love to hear it from you on your
                    query. Any questions or remarks?. Just write us a Message. </p>
                </div>
        
                <div class="row">
        
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="cont">
                                <h2>Contact Information</h2>
                                <p>Fill up the form and our team will get back to you within 24 hours</p>
                            </div>
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                
                                <p> <span>Sri Maruthi Pharma,</span> Ambedkar Bheedhi, Sampangi Rama Nagara, Bengaluru, Karnataka 560001</p>
                            </div>
        
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                
                                <p>srimaruthipharma@gmail.com</p>
                            </div>
        
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                
                                <p>+91 8618102799</p>
                            </div>
        
                            <!-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->

                        
                            
                            <div class="social-link mt-3">
                                <a href="www.whatsapp.com" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                                <a href="www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="www.twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        
                            </div>
                        
                        </div>
        
                    </div>
        
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <h2>Some error occured</h2>
                    </div>
        
                </div>
        
            </div>
        </section><!-- End Contact Section -->
    </main>
   

    <!-- ======= Footer ======= -->
    <footer id="footer">
    
         <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright 2021 <strong><span>Sri Maruthi Pharma</span></strong>. All Rights Reserved
            </div>
    
        </div>
    </footer><!-- End Footer -->
    

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/waypoints/noframework.waypoints.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="js\main.js"></script>
</body>
</html>
  			<?php
		}

		$conn->close();
	} 
}

?>
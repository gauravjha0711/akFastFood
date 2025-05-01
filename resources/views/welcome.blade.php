<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ak Fast Food</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="/restaurant.png" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <audio autoplay>
        <!-- <source src="music.mp3" type="audio/mp3"> -->
    </audio>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('navbar')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Where Every Meal is a Celebration.</p>
                    
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            <!-- Service Item 1 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3 h-100">
                    <div class="p-4 text-center">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Master Chefs</h5>
                        <p>We have talented chefs to serve delicious dishes.</p>
                    </div>
                </div>
            </div>
            <!-- Service Item 2 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3 h-100">
                    <div class="p-4 text-center">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5>Quality Food</h5>
                        <p>Enjoy high-quality food at reasonable prices.</p>
                    </div>
                </div>
            </div>
            <!-- Service Item 3 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3 h-100">
                    <div class="p-4 text-center">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                        <h5>Online Order</h5>
                        <p>Book and order your meals online easily.</p>
                    </div>
                </div>
            </div>
            <!-- Service Item 4 -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3 h-100">
                    <div class="p-4 text-center">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h5>24/7 Service</h5>
                        <p>We’re here to assist you round the clock.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Service End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Ak Fast Food</h1>
                        <p class="mb-4"> we take pride in offering a unique dining experience that combines exceptional flavors with a warm and inviting atmosphere. Established in <span class="text-warning">2017</span>, our restaurant has become a local favorite for those seeking delicious cuisine and impeccable service.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">8</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('about') }}">Read More</a>

                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->









        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
        <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-1.jpg" alt="Ashok Mittal" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Abhishek Singh</h5>
                    <small>Head Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-2.jpg" alt="Vikas Patel" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Vikas Patel</h5>
                    <small>Sous Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-3.jpg" alt="Vikas Khanna" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Vikas Khanna</h5>
                    <small>Pastry Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="position-relative rounded-circle overflow-hidden m-2" style="aspect-ratio: 1; width: 100%;">
                        <img class="img-fluid w-100 h-100" src="img/team-4.jpg" alt="Sam Mathew" style="object-fit: cover;">
                    </div>
                    <h5 class="mb-0">Sam Mathew</h5>
                    <small>Grill Chef</small>
                    <div class="d-flex justify-content-center mt-4">
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary mx-1" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Team End -->

<!-- Testimonial Start-->
 <br>
 <br>

    <div class="outerdiv">
    <h2 class="display-6 text-primary text-center font-weight-bold" style="margin-left: 6rem; text-decoration: underline;">
            Buyers' Critique
        </h2>
        <div class="innerdiv">
            <div class="eachdiv div1">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-male-1.png" alt="User 1" />
                    </div>
                    <div class="detbox">
                        <p class="name">Akash Kumar</p>
                        <p class="designation">Student</p>
                    </div>
                </div>
                <div class="review">
                    <h4>“"The flavors at this restaurant are simply exquisite! Each dish is a delightful journey for the palate. Highly recommend!"”</h4>
                    </div>
            </div>

            <div class="eachdiv div2">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-male-2.png" alt="User 2" />
                    </div>
                    <div class="detbox">
                        <p class="name">Ayush Gupta</p>
                        <p class="designation">Student</p>
                    </div>
                </div>
                <div class="review">
                    <h4>"A hidden gem! The presentation and taste of the food were outstanding. I can't wait to return for another unforgettable meal!"</h4>
                </div>
            </div>

            <div class="eachdiv div3">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-male-1.png" alt="User 3" />
                    </div>
                    <div class="detbox">
                        <p class="name">Nilabh Anand</p>
                        <p class="designation">Student</p>
                    </div>
                </div>
                <div class="review">
                    <h4>“"Absolutely love the creativity in every dish! Each bite is bursting with fresh ingredients and bold flavors. A must-visit!"”</h4>
                </div>
            </div>

            <div class="eachdiv div4">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-male-1.png" alt="User 4" />
                    </div>
                    <div class="detbox">
                        <p class="name">Abhinav Gautam</p>
                        <p class="designation">Student</p>
                    </div>
                </div>
                <div class="review">
                    <h4>“"The attention to detail in both service and cuisine sets this place apart. Every meal feels special, and the ambiance is perfect!"”</h4>
                </div>
            </div>

            <div class="eachdiv div5">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="https://cdn.rareblocks.xyz/collection/clarity/images/testimonial/4/avatar-male-2.png" alt="User 5" />
                    </div>
                    <div class="detbox">
                        <p class="name">Piyush Jain</p>
                        <p class="designation">Project Manager</p>
                    </div>
                </div>
                <div class="review">
                    <h4>“From appetizers to desserts, everything was delicious! The menu offers a fantastic variety, and the staff were incredibly welcoming.”</h4>
                </div>
            </div>
        </div>
    </div>

 <!-- Testimonial End-->



        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

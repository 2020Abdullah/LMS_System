<template>
    <div class="home rtl">
        <!-- topbar -->
        <section id="topbar" class="container-fluid bg-dark">
            <div class="row py-2 px-lg-5">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center text-white">
                        <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                        <small class="px-3">|</small>
                        <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- topbar end -->

        <!-- Navbar -->
        <section id="Navbar" class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
                <a href="index.html" class="navbar-brand ml-lg-3">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>Edukate</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="course.html" class="nav-item nav-link">Courses</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="detail.html" class="dropdown-item">Course Detail</a>
                                <a href="feature.html" class="dropdown-item">Our Features</a>
                                <a href="team.html" class="dropdown-item">Instructors</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="login/student" class="btn btn-primary py-2 px-4 d-none d-lg-block">Join Us</a>
                </div>
            </nav>
        </section>
        <!-- Navbar End -->

        <!-- banner -->
        <section id="banner">
            <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
                <div class="container text-center my-5 py-5">
                    <h1 class="text-white mt-4 mb-4">تعلم من بيتك</h1>
                    <h1 class="text-white display-1 mb-5">مع أفضل منصة تعليمية في الوطن العربي</h1>
                    <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Courses</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Courses 1</a>
                                    <a class="dropdown-item" href="#">Courses 2</a>
                                    <a class="dropdown-item" href="#">Courses 3</a>
                                </div>
                            </div>
                            <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="ابحث عن اى شئ تريده">
                            <div class="input-group-append">
                                <button class="btn btn-secondary px-4 px-lg-5">بحث</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->

        <!-- About -->
        <section id="About" class="mb-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title position-relative mb-4">
                            <div class="page-head-shape1">
                                <h3>About Us</h3>
                                <div class="line">
                                    <div class="circle"></div>
                                </div>   
                            </div>
                            <h1 class="display-4">First Choice For Online Education Anywhere</h1>
                        </div>
                        <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                        <div class="row pt-3 mx-0">
                            <div class="col-3 px-0">
                                <div class="bg-success text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">123</h1>
                                    <h6 class="text-uppercase text-white">Available<span class="d-block">Subjects</span></h6>
                                </div>
                            </div>
                            <div class="col-3 px-0">
                                <div class="bg-primary text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                    <h6 class="text-uppercase text-white">Online<span class="d-block">Courses</span></h6>
                                </div>
                            </div>
                            <div class="col-3 px-0">
                                <div class="bg-secondary text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">123</h1>
                                    <h6 class="text-uppercase text-white">Skilled<span class="d-block">Instructors</span></h6>
                                </div>
                            </div>
                            <div class="col-3 px-0">
                                <div class="bg-warning text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">1234</h1>
                                    <h6 class="text-uppercase text-white">Happy<span class="d-block">Students</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end About -->

        <!-- Courses Start -->
        <section id="courses" class="container-fluid px-0 py-5">
            <div class="row mx-0 justify-content-center pt-5">
                <div class="col-lg-6">
                    <div class="section-title text-center position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Courses</h6>
                        <h1 class="display-4">Checkout New Releases Of Our Courses</h1>
                    </div>
                </div>
            </div>

            <carousel :itemsToShow="4" :autoplay="2000" :wrap-around="true" :touchDrag="true">
                <slide v-for="slide in 6" :key="slide">
                    <div class="courses-item position-relative">
                        <img class="img-fluid" :src="asset('/img/courses-1.jpg')" alt="">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">Web design &amp; development courses for beginners</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                                    <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                                </div>
                            </div>
                            <div class="w-100 bg-white text-center p-4">
                                <a class="btn btn-primary" href="detail.html">Course Detail</a>
                            </div>
                        </div>
                    </div>
                </slide>
            </carousel>
        </section>
        <!-- Courses End -->
            <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                            <div class="d-flex align-items-center mb-5">
                                <div class="btn-icon bg-primary mr-4">
                                    <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Our Location</h4>
                                    <p class="m-0">123 Street, New York, USA</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div class="btn-icon bg-secondary mr-4">
                                    <i class="fa fa-2x fa-phone-alt text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Call Us</h4>
                                    <p class="m-0">+012 345 6789</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="btn-icon bg-warning mr-4">
                                    <i class="fa fa-2x fa-envelope text-white"></i>
                                </div>
                                <div class="mt-n1">
                                    <h4>Email Us</h4>
                                    <p class="m-0">info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                            <h1 class="display-4">Send Us A Message</h1>
                        </div>
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required">
                                    </div>
                                    <div class="col-6 form-group">
                                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>Edukate</h1>
                        </a>
                        <p class="m-0">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                            <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                            <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                            <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h3 class="text-white mb-4">Our Courses</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                        <p class="m-0">Copyright &copy; <a class="text-white" href="#">Your Site Name</a>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">HTML Codex</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    </div>

    
</template>

<script>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide } from 'vue3-carousel'

export default {
    name: "HomeView",
    components: {
        Carousel,
        Slide,
    },
    methods: {
        asset(img_path) {
            let image = window.assets.public_image;
            return image + img_path;
        }
    }
}
</script>

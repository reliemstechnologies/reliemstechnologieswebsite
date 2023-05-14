<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
    h2 {
        padding: 25px 0;
        text-align: center;
        color: #fff;
        background: #7c8490;
    }

    footer {
        background: rgb(90, 98, 104);
        color: white;
        margin-top: 100px;
    }

    footer a {
        color: #fff;
        font-size: 14px;
        transition-duration: 0.2s;
    }

    footer a:hover {
        color: #FA944B;
        text-decoration: none;
    }

    .copy {
        font-size: 12px;
        padding: 10px;
        border-top: 1px solid #FFFFFF;
    }

    .footer-middle {
        padding-top: 2em;
        color: white;
    }

    ul.social-network {
        list-style: none;
        display: inline;
        margin-left: 0 !important;
        padding: 0;
    }

    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }

    .social-network a.icoFacebook:hover {
        background-color: #3B5998;
    }

    .social-network a.icoLinkedin:hover {
        background-color: #007bb7;
    }

    .social-network a.icoFacebook:hover i {
        color: #fff;
    }

    .social-network a.icoLinkedin:hover i {
        color: #fff;
    }

    .social-network a.socialIcon:hover {
        color: #44BCDD;
    }

    .socialHoverClass {
        color: #44BCDD;
    }

    .social-circle li a {
        display: inline-block;
        position: relative;
        margin: 0 auto 0 auto;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        text-align: center;
        width: 30px;
        height: 30px;
        font-size: 15px;
    }

    .social-circle li i {
        margin: 0;
        line-height: 30px;
        text-align: center;
    }

    .social-circle li a:hover i {
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms--transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        -ms-transition: all 0.2s;
        transition: all 0.2s;
    }

    .triggeredHover {
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms--transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        -ms-transition: all 0.2s;
        transition: all 0.2s;
    }

    .social-circle i {
        color: #595959;
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        -ms-transition: all 0.8s;
        transition: all 0.8s;
    }

    .social-network a {
        background-color: #F9F9F9;
    }

    ..social-network a:hover {
        background: #ff304d;
    }
    </style>

</head>

<body style="background-color: #F8F9FA">
    <div style="height:150px">
        @include('navbar');
    </div>



    <div class="container border mt-5" style="background-color:white;height:350px;">
        <div class="row">
            <div class="col-6" style="width:90%; height:300px;margin-top:20px">



                <!-- <img src="https://thumbs.dreamstime.com/b/hotel-room-13225019.jpg" 
                    style="" /> -->

                <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/head-massa-1.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/Neck_Massage-1.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/holistic_massage_2_1024x1024-1.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls1" data-interval="false"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls1"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>

            </div>


            <div class="col-6" style="width:90%; height:300px;margin-top:20px">
                <div class="mt-3">
                    <h3>Nehemia Thai Spa</h3>
                </div>
                <div class="mt-4 d-flex justify-content-start">

                    <i class="bi-geo-alt-fill"></i>
                    <p style="font-size:16px" class="ml-2">Near Experia Mall, Casa rio gold,Palava city, Dombivali East
                        421204</p>
                </div>
                <div>
                    <p style="font-size:16px">Head Massage, Neck Massage, Full Body Massage, Back Massage, Foot Massage,
                        <a href="{{url('/profile/center/3')}}">More...</a>
                    </p>
                </div> 

                <div class="d-flex justify-content-between mt-5">
                    <div>
                        <div class="d-flex justify-content-between">
                            <p style="font-size:24px;color:#EE2A24">Rs.1000 </p>
                            <p class="ml-2" style="font-size:16px;"><s>Rs 200</s></p>
                            <p class="ml-2" style="font-size:16px;color:#FFF000">60% off</p>
                        </div>
                        <div style="margin-top:-20px">
                            <p style="color:#5A6268">Per Person Booking</p>
                        </div>
                    </div>

                    <div>
                        <a href="{{url('/profile/center/3')}}"><button class="btn btn-secondary"> View
                                Details</button></a>
                        <button class="btn btn-success">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="container border mt-5" style="background-color:white;height:350px;">
        <div class="row">
            <div class="col-6" style="width:90%; height:300px;margin-top:20px">

                <!-- <img src="https://thumbs.dreamstime.com/b/hotel-room-13225019.jpg" width="90%" height="300px"
                    style="margin-top:20px" /> -->

                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/body_massage.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/Thai_traditional_foot_massage.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/Steam-Bath-for-Girls-1.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls2"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls2"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-6">
                <div class="mt-3">
                    <h3>Nehemia Thai Spa</h3>
                </div>
                <div class="mt-4 d-flex justify-content-start">

                    <i class="bi-geo-alt-fill"></i>
                    <p style="font-size:16px" class="ml-2">Madhurima sweets, Rambaug lane no 4, Santoshi mata road,
                        Kalyan-west 421301 </p>
                </div>
                <div>
                    <p style="font-size:16px">Head Massage, Neck Massage, Full Body Massage, Back Massage, Foot Massage,
                        <a href="{{url('/profile/center/3')}}">More...</a>
                    </p>
                </div>

                <div class="d-flex justify-content-between mt-5">
                    <div>
                        <div class="d-flex justify-content-between">
                            <p style="font-size:24px;color:#EE2A24">Rs.1000 </p>
                            <p class="ml-2" style="font-size:16px;"><s>Rs 200</s></p>
                            <p class="ml-2" style="font-size:16px;color:#FFF000">60% off</p>
                        </div>
                        <div style="margin-top:-20px">
                            <p style="color:#5A6268">Per Person Booking</p>
                        </div>
                    </div>

                    <div>
                        <a href="{{url('/profile/center/3')}}"><button class="btn btn-secondary"> View
                                Details</button></a>
                        <button class="btn btn-success">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="container border mt-5" style="background-color:white;height:350px;">
        <div class="row">
            <div class="col-6">

                <!-- <img src="https://thumbs.dreamstime.com/b/hotel-room-13225019.jpg" width="90%" height="300px"
                    style="margin-top:20px" /> -->

                    <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/head-massa-1.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/holistic_massage_2_1024x1024-1.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://nehemia.co.in/wp-content/uploads/2018/09/body_massage.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls3"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls3"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>


            </div>
            <div class="col-6">
                <div class="mt-3">
                    <h3>Nehemia Thai Spa</h3>
                </div>
                <div class="mt-4 d-flex justify-content-start">

                    <i class="bi-geo-alt-fill"></i>
                    <p style="font-size:16px" class="ml-2">Near khoni palava city, Badlapur pipe line Road, Dombivli
                        East.</p>
                </div>
                <div>
                    <p style="font-size:16px">Head Massage, Neck Massage, Full Body Massage, Back Massage, Foot Massage,
                        <a href="{{url('/profile/center/3')}}">More...</a>
                    </p>
                </div>

                <div class="d-flex justify-content-between mt-5">
                    <div>
                        <div class="d-flex justify-content-between">
                            <p style="font-size:24px;color:#EE2A24">Rs.1000 </p>
                            <p class="ml-2" style="font-size:16px;"><s>Rs 200</s></p>
                            <p class="ml-2" style="font-size:16px;color:#FFF000">60% off</p>
                        </div>
                        <div style="margin-top:-20px">
                            <p style="color:#5A6268">Per Person Booking</p>
                        </div>
                    </div>

                    <div>
                        <a href="{{url('/profile/center/3')}}"><button class="btn btn-secondary"> View
                                Details</button></a>
                        <button class="btn btn-success">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4>Others</h4>
                            <ul class="list-unstyled">
                                <li> <a href="#">Contact : 9831625161</a> </li>
                                <li> <a href="#">Privacy Policies</a></li>
                                <li> <a href="#"> Terms & Condition </a></li>
                                <li> <a href="#">Blogs</a></li>
                                <li> <a href="#">News and Updates</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4> </h4>
                            <ul class="list-unstyled">
                                <li><a href="#"> </a> </li>
                                <li><a href="#"></a> </li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4> </h4>
                            <ul class="list-unstyled">
                                <li> <a href="#"> </a> </li>
                                <li> <a href="#"> </a> </li>
                                <li> <a href="#"></a> </li>
                                <li> <a href="#"> </a> </li>
                                <li> <a href="#"> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4> Follow Us </h4>
                        <ul class="social-network social-circle">
                            <li> <a href="#" class="icoFacebook" title="Facebook"> <i class="fa fa-facebook"> </i> </a>
                            </li>
                            <li> <a href="#" class="icoLinkedin" title="Linkedin"> <i class="fa fa-linkedin"> </i> </a>
                            </li>
                            <li> <a href="#"> <i class="fa fa-youtube" aria-hidden="true"> </i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center"> © Copyright 2021 - Company Name. All rights reserved. </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        background: rgb(9, 95, 234);
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

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">Reliems</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
    </ul>
    
      <a href="{{url('/user/login')}}"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button></a>
     <a href="{{url('/user/register')}}" > <button class="btn btn-outline-success my-2 my-sm-0 ml-2" type="submit">Register</button></a>
    
  </div>
        
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-white mt-2">
        <a class="navbar-brand" href="#">Our Listings</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>

        </div>
    </nav>


    <div class="container border mt-5" style="background-color:white;height:350px;">
        <div class="row">
            <div class="col-6">
                <img src="https://thumbs.dreamstime.com/b/hotel-room-13225019.jpg" width="90%" height="300px"
                    style="margin-top:20px" />
            </div>
            <div class="col-6">
                <div class="mt-3">
                    <h1>G Wellness Center</h1>
                </div>
                <div class="mt-4">
                    <h6> Address : Casa Rio Main Rd, near Jio Mart Store, Nilje Gaon,Maharashtra 421204</h6>
                </div>
                <div>
                    <p>Services offered : Mayo Signature Spa, Foot,Back,Shoulder Spa, Traditional Thai dry spa</p>
                </div>
                <div>
                    <p>Price : Rs.1000</p>
                    <p>Discount Offer : Rs.200</p>
                </div>
                <div>
                    <button> View Details</button>
                    <button>Book Now</button>
                </div>
            </div>
        </div>

    </div>

    <div class="container border mt-5" style="background-color:white;height:350px;">
        <div class="row">
            <div class="col-6">
                <img src="https://thumbs.dreamstime.com/b/hotel-room-13225019.jpg" width="90%" height="300px"
                    style="margin-top:20px" />
            </div>
            <div class="col-6">
                <div class="mt-3">
                    <h1>G Wellness Center</h1>
                </div>
                <div class="mt-4">
                    <h6> Address : Casa Rio Main Rd, near Jio Mart Store, Nilje Gaon,Maharashtra 421204</h6>
                </div>
                <div>
                    <p>Services offered : Mayo Signature Spa, Foot,Back,Shoulder Spa, Traditional Thai dry spa</p>
                </div>
                <div>
                    <p>Price : Rs.1000</p>
                    <p>Discount Offer : Rs.200</p>
                </div>
                <div>
                    <button> View Details</button>
                    <button>Book Now</button>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>View Page Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <style>
    body {
        padding: 0;
        margin: 0;
    }

    .slider-container {
        position: relative;
        overflow-x: hidden;
        height: 200px;
    }

    .slider-width {
        position: absolute;
        display: flex;
        align-items: start;
        justify-content: start;
        left: 0;
        top: 0;
        transition: 0.4s ease-in-out;
    }

    .item {
        display: flex;
        justify-content: start;
        align-items: center;
        width: 300px;
        height: 200px;
        background: rgb(23 147 83);
        margin: 0 10px;
        color: #fff;
        text-align: center;
        font-size: 40px;
        font-weight: 800;
    }

    .sliderBtn {
        background: rgb(245 24 24);
        border: none;
        outline: none;
        color: #fff;
        font-size: 20px;
        margin-top: 20px;
        padding: 6px 12px;
        cursor: pointer;
        position: absolute;
        left: 50%;
        transform: translate(-50%);
    }


    .sliderBtn:nth-child(2) {
        margin-left: -74px;
    }

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


    header img {
        display: block;
        margin: 0 auto;
    }

    header span {
        position: absolute;
        top: 36%;
        left: 18%;
        font-size: 28px;
        color: #fff;
    }

    .para {
        margin-left: 13%;
        width: 75%;
    }

    .btn-success {
        margin-left: 42%;
        margin-top: 2%;
        cursor: pointer;
    }

    h2 {
        color: #218838;
    }

    section {
        margin-top: 20px;
    }

    .gradlabel {

        font-size: 72px;
        background: -webkit-linear-gradient(#eee, #333);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        */
    }
    </style>


</head>

<body style="background-color: #F8F9FA">

    <div>
        @include('navbar');
    </div>

    <div style="background-color:#FFFFFF;margin-top:110px; padding:25px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="border d-flex flex-column">
                        <div class="p-2 d-flex justify-content-start" style="background-color:#F8F9FA;">
                            <i class="bi-geo-alt-fill"></i>
                            <h4 class="ml-2">Enter Your Details</h4>
                        </div>

                        <div class="p-4">
                            <form action="{{url('/payment/store')}}" method="POST">
                                @csrf
                                @method('POST')
                                <div>
                                    <p style="font-size:14px;color:#000000">We will use these details to share your
                                        booking information</p>
                                </div>

                                <div class="d-flex justify-content-around">

                                    <div>
                                        <p class="font-weight-bold" style="font-size:16px;color:#000000">Full Name</p>
                                        @if($service)
                                        <input type="text" class="form-control" id="username" name="username"
                                            aria-describedby="emailHelp" value="{{$service}}">
                                        @else
                                            <input type="text" class="form-control" id="username" name="username"
                                            aria-describedby="emailHelp" value="">
                                        @endif

                                    </div>
                                    <div>
                                        <p class="font-weight-bold" style="font-size:16px;color:#000000">Email Address
                                        </p>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp" value="sushilbhosale300@gmail.com">
                                    </div>

                                </div>
                                <div style="padding:20px; width:250px">
                                    <p class="font-weight-bold" style="font-size:16px;color:#000000">Mobile Number</p>
                                    <input type="text" class="form-control" id="mobile_number" name="mobile_number"
                                        aria-describedby="mobileNumberHelp" value="9820868352">
                                </div>
                                <input type="hidden" class="form-control" id="amount" name="amount"
                                    aria-describedby="amounthelp" value="1000">
                                <div style="padding:20px">
                                    <button type="submit"
                                        style="width:200px;background-color:#4CAF50;color: white; padding: 15px 32px; border: none;">
                                        Pay Now </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="col">
                    <div class="d-flex flex-column border" style="width:400px">

                        <div style="padding:25px">
                            <div class="d-flex justify-content-start">
                            @if($total_price)
                                <p class="font-weight-bold " style="font-size:24px;fon-family:regular;color:#000000">
                                {{$total_price}}
                                </p>
                                @else
                                <p class="font-weight-bold " style="font-size:24px;fon-family:regular;color:#000000">
                                    Rs.1400
                                </p>
                                @endif
                                
                                <p style="font-size:16px;fon-family:regular;color:#5A6268;margin-left:10px">
                                    <s>Rs.1400</s>
                                </p>
                                <p style="font-size:16px;fon-family:regular;color:#FFF000;margin-left:10px">67% off</p>

                            </div>
                            <div class="d-flex mt-2 justify-content-around align-items-center border shadow-sm p-3 mb-5 bg-white rounde"
                                style="height:50px">
                                @if($dateTime)
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">{{$dateTime}}</p>
                                </p>
                                @else
                               

                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">Date</p>
                                <p class="mt-2 font-weight-bold">|</p>
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">Time
                                </p>
                                @endif
                            </div>

                            <div class="d-flex justify-content-around align-items-center border shadow-sm p-3 mb-5 bg-white rounde"
                                style="height:50px">
                                @if($massage_type)
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">{{$massage_type}}
                                </p>
                                @else 
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">Massage Type
                                </p>
                                @endif
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">|</p>
                                @if($duration)
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">{{$duration}} </p>
                                @else
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">60min </p>
                                @endif
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">|</p>
                                @if($service)
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">{{$service}}</p>
                                @else
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">Medium
                                    Pressure Massage</p>
                                @endif
                            </div>




                            <div style="width:100%">
                                <p style="color:#00FF00">
                                    --------------------------------------------------------------------------
                                </p>
                            </div>

                            <div class="d-flex justify-content-between mt-2 mr-5">
                                <p style="color:#222222;font-size:14px;font-family:Roboto">Per Person Price </p>
                                <p class="font-weight-bold" style="color:#000000;font-size:14px;font-family:Roboto">
                                    Rs.200</p>
                            </div>
                            <div class="d-flex justify-content-between mt-2 mr-5">
                                <p style="color:#222222;font-size:14px;font-family:Roboto">Instant Discount </p>
                                <p class="font-weight-bold" style="color:#000000;font-size:14px;font-family:Roboto">
                                    Rs.200</p>
                            </div>
                            <div class="d-flex justify-content-between mt-2 mr-5">
                                <p style="color:#222222;font-size:14px;font-family:Roboto">Coupon Discount </p>
                                <p class="font-weight-bold" style="color:#000000;font-size:14px;font-family:Roboto">
                                    Rs.200</p>
                            </div>

                        </div>

                        <div class="d-flex justify-content-around border p-2">
                            <p style="font-size:24px"> Payable Amount </p>
                            @if($total_price)
                            <p class="font-weight-bold" style="color:#000000;font-size:26px;font-family:Roboto">Rs.{{$total_price}}
                            </p>
                            @else
                            <p class="font-weight-bold" style="color:#000000;font-size:26px;font-family:Roboto">Rs.1000
                            </p>

                            @endif
                        </div>




                    </div>

                </div>
            </div>
        </div>

        <!-- RAZORPAY_KEY=rzp_test_amX6L7ZY8KQNR7 -->
<!-- RAZORPAY_SECRET=FoFQ0Bxu6PhdxjMHuEueMqfL -->

        <!-- @if(Session::has('data'))

        <div class="container tex-center mx-auto">
            <form action="/pay" method="POST" class="text-center mx-auto mt-5">
                <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_amX6L7ZY8KQNR7"
                    data-amount="{{Session::get('data.amount')}}" data-currency="INR"
                    data-order_id="{{Session::get('data.order_id')}}" data-buttontext="Pay with Razorpay"
                    data-name="Coffee" data-description="Test transaction" data-theme.color="#F37254"></script>
                <input type="hidden" custom="Hidden Element" name="hidden">
            </form>

        </div>

        @endif -->


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
                                <li> <a href="#" class="icoFacebook" title="Facebook"> <i class="fa fa-facebook"> </i>
                                    </a>
                                </li>
                                <li> <a href="#" class="icoLinkedin" title="Linkedin"> <i class="fa fa-linkedin"> </i>
                                    </a>
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



        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
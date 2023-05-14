<!DOCTYPE html>
<html>

<head>
    <title>View Page Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
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
    <div style="height:150px">
        @include('navbar');
    </div>


    <div>
        <div class="slider-container" item-display-d="4" item-display-t="3" item-display-m="1">
            <div class="slider-width">
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic11-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic11-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic9-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic7-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic7-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic4-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic1-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic5-1-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img src="https://nehemia.co.in/wp-content/uploads/2018/11/pic1-1-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img
                        src="https://nehemia.co.in/wp-content/uploads/2019/05/IMG-20190513-WA0010-150x150.jpg"
                        width="100%" height="100%" /></div>
                <div class="item"><img
                        src="https://nehemia.co.in/wp-content/uploads/2019/05/IMG-20190513-WA0009-150x150.jpg"
                        width="100%" height="100%" /></div>
            </div>
        </div>
        <button type="button" class="sliderBtn" onclick="prev()">Prev</button>
        <button type="button" class="sliderBtn" onclick="next()">Next</button>
    </div>

    <div style="background-color:#FFFFFF;margin-top:110px; padding:25px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <div>
                            <h1>Nehemia Thai Spa</h1>
                            <p style="color:#808080">Floor 101,201 Mhatre building,Behind mhatre complex, Gate number 3,
                                Casa rio
                                gold,
                                Palava city, Dombivali East 421204 </p>
                            <h4 style="margin-top:55px">Description</h4>
                            <p style="font-style:italic"> Many spas even offer meditation, yoga, and Pilates. Each of
                                these
                                various therapy options helps your body to relax and release built-up stress and
                                tension.
                                Spa therapy can also improve circulation, reduce inflammation in the body, and
                                enhance
                                the body's autoimmune response</p>
                            <h4 style="margin-top:55px">Services</h4>

                            <div style="margin-top : 20px">
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="full_body_massage"
                                            name="full_body_massage" value="full_body_massage">
                                        <label class="form-check-label" for="full_body_massage" id="label_full_body_massage">Full Body
                                            Massage</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="neck_massage"
                                            name="neck_massage" value="neck_massage">
                                        <label class="form-check-label" for="neck_massage" id="label_neck_massage">Neck Massage</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="back_massage"
                                            name="back_massage" value="back_massage">
                                        <label class="form-check-label" for="back_massage" id="label_back_massage" >Back Massage</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="foot_massage"
                                            name="foot_massage" value="foot_massage">
                                        <label class="form-check-label" for="foot_massage" id="label_foot_massage">Foot Massage</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="head_massage"
                                            name="head_massage" value="head_massage">
                                        <label class="form-check-label" for="head_massage" id="label_head_massage">Head Massage</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="steam_bath"
                                            name="steam_bath" value="steam_bath">
                                        <label class="form-check-label" for="steam_bath" id="label_steam_bath">Steam Bath</label>
                                    </div>
                                </div>
                            </div>


                            <h4 style="margin-top:55px">Massage Type</h4>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="medium_pressure_massage"
                                    value="medium_pressure_massage" name="medium_pressure_massage">
                                <label class="form-check-label" for="medium_pressure_massage" id="label_medium_pressure_massage">Medium Pressure Massage</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="hard_pressure_massage"
                                    value="hard_pressure_massage" name="hard_pressure_massage">
                                <label class="form-check-label" for="hard_pressure_massage" id="label_hard_pressure_massage">Hard Pressure Massage</label>
                            </div>


                            <h4 style="margin-top:55px">Duration</h4>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="sixty_min" name="sixty_min"
                                    value="sixty_min">
                                <label class="form-check-label" for="sixty_min" id="label_sixty_min">60min</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ninety_min" value="ninety_min"
                                    name="ninety_min">
                                <label class="form-check-label" for="ninety_min" id="label_ninety_min">90min</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="one_twenty_min"
                                    value="one_twenty_min" name="one_twenty_min">
                                <label class="form-check-label" for="one_twenty_min" id="label_one_twenty_min">120min</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex flex-column border" style="width:400px">

                        <div class="p-3 mb-2 bg-success text-white" style="height:50px">
                        </div>

                        <form action="{{url('/user/checkin/')}}" method="POST">
                            @csrf
                        <div style="padding:25px">
                            <div class="d-flex justify-content-start">
                                <p id="input_bold_price" class="font-weight-bold " style="font-size:24px;fon-family:regular;color:#000000">
                                    Rs.1000
                                </p>
                                <p id="input_cutted_bold_price" style="font-size:16px;fon-family:regular;color:#5A6268;margin-left:10px">
                                    <s id="input_cutted_bold_price_strike">Rs.1400</s>
                                </p>
                                <p style="font-size:16px;fon-family:regular;color:#FFF000;margin-left:10px">67% off</p>
                                <input type="hidden" id="display_amount" name="display_amount" />
                            </div>
                            <div class="d-flex justify-content-start">


                                <section>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" id="dateTime" name="dateTime" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                </section>
                                <div style="margin-top:20px;margin-left:20px">
                                    <select class="form-select form-group" aria-label="Default select example" id="noOfPersons" name="noOfPersons">
                                        <option selected>No Of Persons</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                    </select>
                                </div>

                            </div>


                            <div class="d-flex justify-content-around align-items-center border shadow-sm p-3 mb-5 bg-white rounde"
                                style="height:50px">
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">Service</p>
                                <p class="mt-2 font-weight-bold">|</p>
                                <p id="service_value" class="mt-2 font-weight-bold"
                                    style="font-size:14px;font-family:Roboto">Neck Massage
                                </p>
                                <input type="hidden" id="input_service" name="input_service" value=""  />
                            </div>



                            <div class="d-flex justify-content-around align-items-center border shadow-sm p-3 mb-5 bg-white rounde"
                                style="height:50px">
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">Massage Type
                                </p>
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">|</p>
                                <p id="massage_type_value" class="mt-2 font-weight-bold"
                                    style="font-size:14px;font-family:Roboto">Medium
                                    Pressure Massage</p>
                                    <input type="hidden" id="input_massage_type" name="input_massage_type" value=""  />
                            </div>


                            <div class="d-flex justify-content-around align-items-center border shadow-sm p-3 mb-5 bg-white rounde"
                                style="height:50px">
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">Duration </p>
                                <p class="mt-2 font-weight-bold" style="font-size:14px;font-family:Roboto">|</p>
                                <p id="duration_value" class="mt-2 font-weight-bold"
                                    style="font-size:14px;font-family:Roboto">60min</p>
                                    <input type="hidden" id="input_duration" name="input_duration" value=""  /> 
                            </div>

                            <div style="width:100%">
                                <p style="color:#00FF00">
                                    --------------------------------------------------------------------------
                                </p>
                            </div>

                            <div class="d-flex justify-content-between mt-2 mr-5">
                                <p style="color:#222222;font-size:14px;font-family:Roboto">Discount </p>
                                <p class="font-weight-bold" style="color:#000000;font-size:14px;font-family:Roboto">
                                    Rs.200</p>
                                    <input type="hidden" id="input_discount" name="input_discount" value="200"  />  
                            </div>

                            <div class="d-flex justify-content-between mt-3 mr-5">
                                <p>Total Price </p>
                                <p id="total_amount_value" class="font-weight-bold" style="color:#000000;font-size:14px;font-family:Roboto">
                                    Rs.1000</p>
                                    <input type="hidden" id="input_total_price" name="input_total_price" value="1000"  />  
                            </div>


                            <div>
                                <button class="btn mt-5"
                                        style="width:100%; background-color: #4CAF50; color: white;font-size: 16px;">Continue
                                        To Book</button>
                            </div>


                        </div>
</form>
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


        <script>
        $(document).ready(function() {

            var services = '';
            var massage_type = '';
            var duration = '';
            var calcAmount='';
            var cuttedPrice='200';
            var inputBoldPrice='';


            //Add CSRF token to headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            $('input[type="checkbox"]').click(function() {

                const val = $(this).val()

                if ($(this).prop("checked") == true) {

                    // alert(val + ' Checked and sending data to server')

                    $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            url: "{{ url('/service/message') }}",
                            data: {
                                checkbox_val: val,
                                ops: 'checked',
                                oldservices: services,
                                oldmassage_type: massage_type,
                                oldduration: duration
                            }
                        })
                        .done(function(msg) {
                            // var data = msg['duration']
                            // alert("Data: " + msg);
                            services = msg.service
                            massage_type = msg.massage_type
                            duration = msg.duration
                            calcAmount = msg.calc_amount
                            if(calcAmount){
                                cuttedPrice = Number(calcAmount)+200;
                                inputBoldPrice = calcAmount

                            }else{
                                cuttedPrice='1200'
                                inputBoldPrice = '1000'
                            }
                            // console.log(msg.duration);
                            document.getElementById("service_value").innerHTML = services
                            document.getElementById("massage_type_value").innerHTML = massage_type
                            document.getElementById("duration_value").innerHTML = duration
                            document.getElementById("total_amount_value").innerHTML = calcAmount
                            document.getElementById("input_cutted_bold_price").innerHTML = "<s>Rs."+cuttedPrice+"</s>" 
                            document.getElementById("input_bold_price").innerHTML = "Rs."+inputBoldPrice

                            // input set
                            document.getElementById("input_service").value = services;
                            document.getElementById("input_massage_type").value = massage_type;
                            document.getElementById("input_duration").value = duration ;
                            document.getElementById("input_discount").value = '200';
                            document.getElementById("input_total_price").value = calcAmount ;

                        });

                } else {

                    alert($(this).val() + ' unchecked');

                    $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            url: "{{ url('service/message') }}",
                            data: {
                                checkbox_val: val,
                                ops: 'unchecked',
                                oldservices: services,
                                oldmassage_type: massage_type,
                                oldduration: duration
                            }
                        })
                        .done(function(msg) {
                            // alert('Record removed' + msg);
                            services = msg.service
                            massage_type = msg.massage_type
                            duration = msg.duration
                            calcAmount=msg.calcAmount
                            // console.log(msg);
                            document.getElementById("service_value").innerHTML = services;
                            document.getElementById("massage_type_value").innerHTML = massage_type;
                            document.getElementById("duration_value").innerHTML = duration;
                            document.getElementById("total_amount_value").innerHTML = calcAmount
                        });

                }


            });





        });
        </script>

        <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
        </script>



        <script>
        var count = 0;
        var inc = 0;
        margin = 0;
        var slider = document.getElementsByClassName("slider-width")[0];
        var itemDisplay = 0;
        if (screen.width > 990) {
            itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-d");
            margin = itemDisplay * 5;
        }
        if (screen.width > 700 && screen.width < 990) {
            itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-t");
            margin = itemDisplay * 6.8;
        }
        if (screen.width > 280 && screen.width < 700) {
            itemDisplay = document.getElementsByClassName("slider-container")[0].getAttribute("item-display-m");
            margin = itemDisplay * 20;
        }


        var items = document.getElementsByClassName("item");
        var itemleft = items.length % itemDisplay;
        var itemslide = Math.floor(items.length / itemDisplay) - 1;
        for (let i = 0; i < items.length; i++) {
            items[i].style.width = (screen.width / itemDisplay) - margin + "px";
        }

        function next() {
            if (inc !== itemslide + itemleft) {
                if (inc == itemslide) {
                    inc = inc + itemleft;
                    count = count - (screen.width / itemDisplay) * itemleft;
                } else {
                    inc++;
                    count = count - screen.width;
                }
            }
            slider.style.left = count + "px";
        }

        function prev() {
            if (inc !== 0) {
                if (inc == itemleft) {
                    inc = inc - itemleft;
                    count = count + (screen.width / itemDisplay) * itemleft;
                } else {
                    inc--;
                    count = count + screen.width;
                }
            }
            console.log(inc)
            slider.style.left = count + "px";
        }
        </script>



        <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>



</body>

</html>
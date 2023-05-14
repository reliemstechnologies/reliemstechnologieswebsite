<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="height:90px">
            <a class="navbar-brand" href="http://127.0.0.1:8000/">Reliems</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>



                @guest

                <a href="{{url('/otp/login')}}"><button class="btn" type="submit">Login/Register</button></a>
                <!-- <a href="{{url('/user/register')}}"> <button class="btn" type="submit">Register</button></a> -->

                @else
                <a href="{{url('/customer/logout')}}"> <button class="btn btn-outline-success my-2 my-sm-0 ml-2"
                        type="submit">Logout</button></a>
                @endguest
            </div>

        </nav>
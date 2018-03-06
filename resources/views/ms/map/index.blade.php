@php
    $base_map = asset('map');
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Master Suki Soup : BranchPage</title>

        <script src="{{URL::asset('/')}}ms/js/jquery-3.1.1.min.js"></script>

        <script src="{{URL::asset('/')}}ms/css/bootstrap-4/dist/js/bootstrap.min.js"></script>

        <link href="{{URL::asset('/')}}ms/css/bootstrap-4/dist/css/bootstrap.min.css?id=50" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{URL::asset('/')}}ms/css/sweetalert.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('/')}}ms/css/font-awesome.min.css" rel="stylesheet"
              type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('/')}}ms/css/font-roboto.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">


    </head>
    <body>
    <link href="{{$base_map}}/assets/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
    <link href="{{$base_map}}/assets/slick-1.6.0/slick.css" rel="stylesheet">
    <link href="{{$base_map}}/assets/chosen-1.6.2/chosen.min.css" rel="stylesheet">
    <link href="{{$base_map}}/css/nouislider.min.css" rel="stylesheet">
    <link href="{{$base_map}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{$base_map}}/css/responsive.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <div class="row">
        <section class="subheader google-maps">
            {{--====================fix icon order ========================--}}

            @if(!is_m() || !is_t())
                <style>
                    #myBtn {
                        width: auto;
                        height: auto;
                        min-height:8%;
                        max-hight: 8%;
                        position: fixed;
                        bottom: 60%;
                        top: 40%;
                        right: 0%;
                        z-index: 50;
                        outline: none;
                        background-color: #f16623;
                        color: white;
                        cursor: pointer;
                        padding: 0%;
                        border-radius: 100px !important;
                        border: solid white 2px;
                    }

                </style>
            @endif
            @if(is_m())
                <style>
                    #myBtn {
                        width: auto;
                        height: auto;
                        min-height:6%;
                        max-hight: 6%;
                        position: fixed;
                        bottom: 60%;
                        top: 40%;
                        right: 0%;
                        z-index: 50;
                        outline: none;
                        background-color: #f16623;
                        color: white;
                        cursor: pointer;
                        padding: 1%;
                        border-radius: 100px !important;
                        border: solid white 2px;
                    }

                </style>
            @endif
            @if(is_t())
                <style>
                    #myBtn {
                        width: auto;
                        height: auto;
                        min-height:8%;
                        max-hight: 8%;
                        position: fixed;
                        bottom: 60%;
                        top: 40%;
                        right: 0%;
                        z-index: 50;
                        outline: none;
                        background-color: #f16623;
                        color: white;
                        cursor: pointer;
                        padding: 1%;
                        border-radius: 100px !important;
                        border: solid white 2px;
                    }

                </style>
            @endif
            <button class="btn hidden-xs" onclick="topFunction()" id="myBtn">
                <i style="font-size:60px;" class="fa fa-fw fa-home" aria-hidden="true">
                    <span class="badge badge-secondary"></span>
                </i>
            </button>
            <script>
                window.onscroll = function() {scrollFunction()};

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("myBtn").style.display = "block";
                    } else {
                        document.getElementById("myBtn").style.display = "none";
                    }
                }
                function topFunction() {
                    window.location.href= "{{url('/')}}";
                }

            </script>
            {{--====================endfix icon order ========================--}}
            <div id="map-canvas">

            </div>
        </section>
    </div>


    <script src="{{$base_map}}/assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    {{--<script src="{{$base_map}}/js/bootstrap.min.js"></script>--}}
    <script src="{{$base_map}}/assets/slick-1.6.0/slick.min.js"></script>
    <script src="{{$base_map}}/assets/chosen-1.6.2/chosen.jquery.min.js"></script>
    <script src="{{$base_map}}/js/isotope.min.js"></script>
    <script src="{{$base_map}}/js/wNumb.js"></script>
    <script src="{{$base_map}}/js/nouislider.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&amp;sensor=false"></script>
    <script src="{{$base_map}}/js/map.js"></script>
    <script src="{{$base_map}}/js/global.js"></script>
    </body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#006564">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CX SocialPlus</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="{{ URL::asset("css/style.css") }}" rel="stylesheet">
    <link href="{{ URL::asset("css/grid.css") }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>

<body>
<div class="nav colorbg">
    <div class="nav_button"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    <div class="nav_brand"><img src="{{ URL::asset("image/logo-w.png") }}"></div>
    <div class="nav_button"><i class="fa fa-bars" aria-hidden="true"></i>
    </div>
</div>
<div class="appcontent">
    <div class="row">
        <h1>Fung, you have successfully check-in.<br>Here's your Boarding Pass.</h1>
        <p> It's also sent to <u>lamfung.cheng@gmail.com</u></p>
    </div>
    <div class="boardingpass">
        <div class="row flex colorbg">
            <div class="brand "><img src="{{ URL::asset("image/logo.png") }}"></div>
            <div class="flightnumber"> <span>Flight Number</span>CX2016</div>
            <div class="seat"> <span>Date</span>23 Oct</div>
        </div>
        <div class="row flex">
            <div class="location">
                <span>Departure</span>HKG</div>
            <div class="plane"><i class="fa fa-plane fa-2x" aria-hidden="true"></i>
            </div>
            <div class="location dest"><span>Destination</span>TPE</div>
        </div>
        <div class="row flex">
            <div id="passenger"> <span>Passenger</span>CHENG/LAMFUNGMR</div>
            <div id="seat"> <span>Seat</span>30A</div>
        </div>
        <div class="row flex textcenter" id="gateinfo">
            <div id="gateclose"> <span>Gate Close</span>18:30</div>
            <div id="departs"> <span>Departs</span>19:00</div>
            <div id="gate"> <span>Gate</span>TBD</div>
        </div>
        <div class="row textcenter"><img src="{{ URL::asset("image/qrcode.png") }}"></div>
    </div>
</div>
</body>

</html>
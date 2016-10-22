<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#006564">
    <meta charset="utf-8">
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
    <div class="row progress">1 of 3</div>
    <div class="row">
        <h1>Tell us your seat preference.</h1>
        <form class="pref">
            <p>I describe myself as...</p>
            <div class="cxradio">
                <input type="radio" name="chaty" value="true" id="chaty">
                <label for="chaty">Chatty</label>
                <input type="radio" name="chaty" value="false" id="quiet">
                <label for="quiet">Quiet</label>
            </div>
            <p>I want to sit next to...</p>
            <div class="cxradio">
                <input type="radio" name="window" value="2" id="w_nc" checked>
                <label for="w_nc">Don't Care</label>
                <input type="radio" name="window" value="1" id="w_window">
                <label for="w_window">Window</label>
                <input type="radio" name="window" value="0" id="w_aisle">
                <label for="w_aisle">Aisle</label>
            </div>
            <p>I want the person next to me be...</p>
            <span>Gender</span>
            <div class="cxradio">
                <input type="radio" name="gender_pref" value="0" id="g_nc" checked>
                <label for="g_nc">Don't Care</label>
                <input type="radio" name="gender_pref" value="1" id="g_male">
                <label for="g_male">Male</label>
                <input type="radio" name="gender_pref" value="2" id="g_female">
                <label for="g_female">Female</label>
            </div>
            <span>Age</span>
            <div class="cxradio">
                <input type="radio" name="age_pref" value="0" id="a_0" checked>
                <label for="a_0">Don't Care</label>
                <input type="radio" name="age_pref" value="1" id="a_1">
                <label for="a_1">Below 25</label>
                <input type="radio" name="age_pref" value="1" id="a_2">
                <label for="a_2">25-35</label>
                <input type="radio" name="age_pref" value="1" id="a_3">
                <label for="a_3">Above 35</label>
            </div>
        </form>
        <a class="btn" href="/habit">Continue</a>
    </div>
</div>
</body>

</html>
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
    <div class="nav_brand">Check In</div>
    <div class="nav_button"><i class="fa fa-bars" aria-hidden="true"></i>
    </div>
</div>
<div class="appcontent">
    <div class="row">
        <h1>Please enter your details below</h1>
        <form>
            <input type="text" placeholder="Enter family name" value="Cheng">
            <input type="text" placeholder="Enter given name" value="Fung">
            <input type="text" placeholder="Enter booking reference" value="7EPPDX">
        </form>
        <a class="btn btn1" href="/social">Continue with SocialPlus</a>
        <a class="btn">Continue </a>
    </div>
</div>
</body>

</html>
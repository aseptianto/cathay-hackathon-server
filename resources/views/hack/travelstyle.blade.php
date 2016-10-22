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
    <div class="row progress">3 of 3</div>
    <div class="row">
        <h1>What is your travel style?</h1>
        <form class="travelstyle">
            <p>When I travel, I enjoy...</p>
            <div class="cxcheck">
                <input type="checkbox" name="travelstyle" value="fnd" id="fnd">
                <label for="fnd">Food and drink</label>
                <input type="checkbox" name="travelstyle" value="local" id="local">
                <label for="local">Local experience</label>
                <input type="checkbox" name="travelstyle" value="shopping" id="shopping">
                <label for="shopping">Shopping</label>
                <input type="checkbox" name="travelstyle" value="siteseeing" id="siteseeing">
                <label for="siteseeing">Site seeing</label>
                <input type="checkbox" name="travelstyle" value="adventure" id="adventure">
                <label for="adventure">Adventure</label>
                <input type="checkbox" name="travelstyle" value="business" id="business">
                <label for="business">It's a business trip</label>
            </div>
        </form>
        <a class="btn " href="/success">Done</a>
    </div>
</div>
</body>

</html>
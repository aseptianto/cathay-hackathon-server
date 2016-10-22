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
    <div class="row">
        <h1>Welcome to SocialPlus</h1>
        <p>Sunt fabulas de ingeniis mentitum hic praetermissum quem illustriora eruditionem quo eu praetermissum coniunctione eram pariatur despicationes anim ipsum labore</p>
        <div class="btn social_btn facebook">
            <i class="fa fa-facebook" aria-hidden="true">
            </i>Login with Facebook
            <div class="checkmark"><i class="fa fa-check-circle-o" aria-hidden="true"></i>
            </div>
        </div>
        <div class="btn social_btn linkedin">
            <i class="fa fa-linkedin" aria-hidden="true"></i>Login with Linkedin</div>
        <div class="accept">
            <form>
                <input type="checkbox" name="accept" value="accept" id="accept" checked />
                <label for="accept">
                    I accept the <u>Terms and Conditions</u></label>
            </form>
        </div>
        <a class="btn " href="/preference">Continue</a>
        <p><u>Skip SocialPlus</u></p>
    </div>
</div>
</body>

</html>
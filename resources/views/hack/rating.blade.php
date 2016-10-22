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
        <h1>Fung, thanks for flying with us!</h1>
        <p>How do you feel about your seat journey?</p>
    </div>
    <form id="rating" action="">
        <div class="row">
            <span class="formdesc">Your seat arrangement</span>
            <div class="stars-wrapper">
                <div class="stars">
                    <input class="star star-5" id="star-5" type="radio" name="location" />
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="location" />
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="location" />
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="location" />
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" name="location" />
                    <label class="star star-1" for="star-1"></label>
                </div>
            </div>
            <span class="formdesc">Did you chat with the person next to you?</span>
            <div class="cxradio">
                <input type="radio" name="chatted" value="true" id="chat_y">
                <label for="chat_y">Yes</label>
                <input type="radio" name="chatted" value="false" id="chat_n">
                <label for="chat_n">No</label>
            </div><span class="formdesc">The person sitting next to you.</span>
            <div class="stars-wrapper">
                <div class="stars">
                    <input class="star star-5" id="partner-5" type="radio" name="partner" />
                    <label class="star star-5" for="partner-5"></label>
                    <input class="star star-4" id="partner-4" type="radio" name="partner" />
                    <label class="star star-4" for="partner-4"></label>
                    <input class="star star-3" id="partner-3" type="radio" name="partner" />
                    <label class="star star-3" for="partner-3"></label>
                    <input class="star star-2" id="partner-2" type="radio" name="partner" />
                    <label class="star star-2" for="partner-2"></label>
                    <input class="star star-1" id="partner-1" type="radio" name="partner" />
                    <label class="star star-1" for="partner-1"></label>
                </div>
            </div>
            <a class="btn" href="">Submit</a>
        </div>
    </form>
</div>
</body>

</html>
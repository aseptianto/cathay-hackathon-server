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
    <div class="row progress">2 of 3</div>
    <div class="row">
        <h1>What do you usually do in-flight?</h1>
        <form class="habit">
            <p>I enjoy...</p>
            <div class="cxcheck">
                <input type="checkbox" name="habit" value="sleep" id="sleep">
                <label for="sleep">Sleeping</label>
                <input type="checkbox" name="habit" value="movie" id="movie">
                <label for="movie">Movie Watching</label>
                <input type="checkbox" name="habit" value="music" id="music">
                <label for="music">Listening to Music</label>
                <input type="checkbox" name="habit" value="read" id="read">
                <label for="read">Reading</label>
                <input type="checkbox" name="habit" value="work" id="work">
                <label for="work">Working</label>
                <input type="checkbox" name="habit" value="chat" id="chat">
                <label for="chat">Chatting</label>
                <input type="checkbox" name="habit" value="other" id="other">
                <label for="other">Others</label>
            </div>
        </form>
        <a class="btn" href="/travelstyle">Continue</a>
    </div>
</div>
</body>

</html>
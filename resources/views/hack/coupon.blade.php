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
        <h1>Fung, you've got an exclusive coupon.</h1>
    </div>
    <div class="card">
        <div class="coupon-top">
            <h1>10% Off</h1>
            <p>Enjoy 10% off on <b>electronics</b> items in the Cathay Pacific inflight shop!</p>
            <div class="plus-sign"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
        </div>

        <div class="coupon-bottom">
            <div>CX2016</div>
            <div>Oct 23, 2016</div>
        </div>
        <a href="/coupondetail">
            <span class="hyperspan"></span>
        </a>
    </div>
    <div class="row">
        Shopping highlight in your upcoming flight
    </div>
    <div class="card">
        <div class="product-top">
            <div class="product-pic"><img src="{{ URL::asset("image/gearfit.jpg") }}"></div>
            <div class="product-desc">
                <h1>Samsung Gear Fit 2</h1>
                <p>A fitness band that tracks your running route, heart rate, distance, speed and calories burnt in real time.</p>
                <p class="price"> <span class="strike">HKD1,790 / USD230</span>
                    <br>HKD1,611 / USD207</p>
            </div>
        </div>
        <div class="product-bottom">Electronics</div>
    </div>

    <div class="card">
        <div class="product-top">
            <div class="product-pic"><img src="{{ URL::asset("image/keyboard.jpg") }}"></div>
            <div class="product-desc">
                <h1>MICROSOFT Universal Foldable Keybroad</h1>
                <p>This slim, foldable wireless keyboard has full-size keys so you can actually get some work done on your tablet or smartphone.</p>
                <p class="price"> <span class="strike">HKD780 / USD100</span>
                    <br>HKD702 / USD90</p>
            </div>
        </div>
        <div class="product-bottom">Electronics</div>
    </div>
</div>
</body>

</html>
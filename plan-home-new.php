<!DOCTYPE html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MuziVic</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/sports.css">
    <link rel="stylesheet" href="assets/css/ace.min.css">
    <link rel="stylesheet" href="assets/css/plan-home.css">
    <!--fonts added here-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair%20Display">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400&display=swap" rel="stylesheet">
    <script src="Scripts/jquery-3.2.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script src="Scripts/login-signup-modal.js"></script>
    <script type="text/javascript">WebFont.load({google: {families: ["Karla:regular,italic,700", "Frank Ruhl Libre:300,regular", "Playfair Display:regular,italic,700,700italic,900,900italic"]}});</script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Karla:regular,italic,700%7CFrank+Ruhl+Libre:300,regular%7CPlayfair+Display:regular,italic,700,700italic,900,900italic"
          media="all">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<?php include "header.html" ?>
<body>
<div class="planHomePage">
    <div class="container">
        <div class="inner-content">
            <ul id="slang-title">
                <li><a href="index.php">Home</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <!--No link here-->
                <li>Plan a Family Day</li>
            </ul>
        </div>
    </div>
</div>
<div style=" padding: 1%">
    <div id="title" align="center">Spend a Family Day with Quality!</div>
</div>

<?php include "add-plan-sports-modal.php"?>

<div class="work-area  black-bg-3 offset-sm-1 align-self-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 left">
                <a href="plan-sports.php"> <div class="single-work  mb-30">
                    <div class="hvrbox">
                        <img src="assets/img/kids-sport.jpg" alt="" class="pic">
                        <div class="centered one" data-text="test">Play Sports</div>
                        <div class="hvrbox-layer_top">
                        </div></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 right">
                <div class="single-work  mb-30">
                    <div class="hvrbox">
                        <img src="assets/img/volunteer-plan.jpeg" alt="" class="pic">
                        <div class="centered two" data-text="test">Join Volunteer</div>
                        <div class="hvrbox-layer_top">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 left">
                <div class="single-work  mb-30">
                    <div class="hvrbox">
                        <img class="pic" alt="" src="assets/img/indoor-plan.jpeg">
                        <div class="centered three" data-text="test">Indoor Activities</div>
                        <div class="hvrbox-layer_top">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 right">
                <div class="single-work mb-30">
                    <div class="hvrbox">
                        <img class="pic" alt="" src="assets/img/adventure.jpeg">
                        <div class="centered four" data-text="test">Explore Adventures</div>
                        <div class="hvrbox-layer_top">
                            <div class="hvrbox-layer_top">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="row" id="managePlanWorkArea" style="display: none">
    <div class="content col-lg-3">
        <div class="card">
            <div class="row">

                <div class="content col-lg-12">

                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body" id="card_body" style="overflow:scroll;overflow-x: hidden;height: 450px">
                            <div class="list-group fade active show" id="list-group">
                                <div style=" padding: 1%">
                                    <div id="title" align="center">Upcoming Plans</div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content col-lg-9">
        <div class="card">

            <div class="card">
                <div class="card-header"></div>
                <div class="card-body" id="card_body" style="overflow:scroll;overflow-x: hidden;height: 450px">
                    <div class="list-group fade active show" id="list-group">
                        <div style=" padding: 1%">
                            <div id="title" align="center">Today's Plan</div>
                            <br>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</body>

<?php include "footer.html"?>


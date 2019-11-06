<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Indoor | MuziVic</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon1.png">

    <!-- all css here -->


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/English-tips.css">
    <link rel='stylesheet prefetch' href='assets/css/bootstrap.min1.css'>
    <link rel="stylesheet" href="assets/css/title.css">

    <link rel="stylesheet" href="assets/css/indoor1.css">

    <script type="text/javascript">
        //===============================================================
        function openShutManager(oSourceObj,oTargetObj,shutAble,oOpenTip,oShutTip){
            var sourceObj = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;
            var targetObj = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;
            var openTip = oOpenTip || "";
            var shutTip = oShutTip || "";
            var allTargetObj=document.querySelectorAll(".card-body");
            for (var i = 0; i < allTargetObj.length; i++) {
                if(allTargetObj[i]!=targetObj){
                    allTargetObj[i].style.display="none";
                }
            }
            if(targetObj.style.display!=="none"){
                if(shutAble) return;
                targetObj.style.display="none";
                if(openTip  &&  shutTip){
                    sourceObj.innerHTML = shutTip;
                }
            } else {
                targetObj.style.display="block";
                if(openTip  &&  shutTip){
                    sourceObj.innerHTML = openTip;
                }
            }
        }
    </script>

    <!--fonts added here-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair%20Display">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({google: {families: ["Karla:regular,italic,700", "Frank Ruhl Libre:300,regular", "Playfair Display:regular,italic,700,700italic,900,900italic"]}});</script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Karla:regular,italic,700%7CFrank+Ruhl+Libre:300,regular%7CPlayfair+Display:regular,italic,700,700italic,900,900italic"
          media="all">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


</head>
<?php include "header.html" ?>

<body>



<div class="title">
    <div class="container">
        <div class="inner-content">
            <ul id="path" >
                <li><a href="index.php">Home</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <!--No link here-->
                <li>Indoor activities</li>
            </ul>
        </div>
    </div>
    <div align="center" style=" padding: 1%">
        <div id = "title">Play with your kid</div>
    </div>
</div>




<div class="wrapper1">
    <!-- Sidebar  -->

    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Choose your preference</h3>
        </div>

        <ul class="list-unstyled components">
            <h4 style="padding-left: 8px">Where to play</h4>
            <li>
                <a href="#playHomeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Play at home</a>
                <ul class="collapse list-unstyled" id="playHomeSubmenu">
                    <li>
                        <a href="#at home along">For 1 person</a>
                    </li>
                    <li>
                        <a href="#at home together">For 2 people and more</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#at Friends gathering">Play at Friends gathering</a>

            </li>
            <h4 style="padding-left: 8px">Estimated time</h4>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Estimated time per round</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#quick games">Less than 10 min</a>
                    </li>
                    <li>
                        <a href="#normal games">10~20 min</a>
                    </li>
                    <li>
                        <a href="#long time games">More than 20 min</a>
                    </li>
                </ul>
            </li>
            <h4 style="padding-left: 8px">Material Requirement</h4>
            <li>
                <a href="#no requirement games">No Requirement</a>
            </li>

        </ul>
    </nav>



    <!-- Page Content  -->
    <div id="content">
        <div class="col-2">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
        </div>

        <!--play along-->
        <div id="at home along" class="row">
            <div  class="col-lg-12 col-md-12 ">
                <!--title of section -->
                <h2>Play at Home </h2>
                <h4>Let Your Kid Play Alone!</h4>
                <div class="line"></div>
                <!--first row-->


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="carousel1" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carousel" data-slide-to="1"></li>
                                    <li data-target="#Carousel" data-slide-to="2"></li>
                                    <li data-target="#Carousel" data-slide-to="3"></li>
                                    <li data-target="#Carousel" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <div class="centered">
                                                Hopscotch
                                            </div>
                                            <a onclick="openShutManager(this,'box1.1.1')" href="#box1.1.1"><img src="assets/images/indoor%20picture/new/hopscotch.jpg" class="card-img-top" alt=""></a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <div class="centered">
                                                Bouncy Marble
                                            </div>
                                            <a onclick="openShutManager(this,'box1.1.3')" href="#box1.1.3"><img src="assets/images/indoor%20picture/new/marbles.jpg" class="card-img-top" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box1.2.1')" href="#box1.2.1">
                                                <div class="centered">
                                                    Origami
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/origami-.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box1.2.2')" href="#box1.2.2">
                                                <div class="centered">
                                                    Ringtoss
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/ringtoss.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box1.2.3')" href="#box1.2.3">
                                                <div class="centered">
                                                    Family Bowling
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/bowling.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#carousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="box1.1.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Hopscotch</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Draw a traditional hopscotch diagram, throw a small stone, twig, beanbag, or other marker into the first square.

                                </p>
                                <p>
                                    Hop on one foot into the first empty square, and then every subsequent empty square. Be sure to skip the one your marker is on.
                                    At the pairs (4-5 and 7-8), jump with both feet.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Balance force (physical strength)
                                    </li>
                                    <li>
                                        Manage body rhythm/ body strength
                                    </li>
                                    <li>
                                        eye-hand coordination
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Bandage (on the carpet) or chalks (in the yard)
                                </p>
                                <p class="attributes_title"> Estimated Time: </p>
                                <p>
                                    10 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left;">

                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/gjuHDiGE45I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>


                        <div id="box1.1.3" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Bouncy Marble</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Option 1: Every participant has several marbles at the beginning and play this game in a square with a hole. The first mission is let your all marbles into the hole, then if your marble collide others, you will win the game
                                </p>
                                <p>
                                    Option2 : Set several holes, and you can put many marbles casually. Then use your marble (only one) to collide other until all holes contain at least one marble
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Build the awareness of achieving goals
                                    </li>
                                    <li>
                                        Build the awareness of competitiveness
                                    </li>
                                    <li>
                                        Chance to learn basic physical knowledge
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Marbles, Square area, holes or similar items for scoring
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10~15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ewqFhNw9k7g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box1.2.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Origimi</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    This is an activity that has been passed on from one generation to another, despite huge technological advances. Origami  is fascinating, that one square of paper can be turned into so many things.
                                </p>
                                <p>
                                    More useful information
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        eye-hand cooperation
                                    </li>
                                    <li>
                                        sequencing skills
                                    </li>
                                    <li>
                                        patenience and attention skills
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    A square of paper, scissors (perhaps)
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    5~30 min per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/wWVppdfYOx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div id="box1.2.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Ring toss</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Place bottles and packing them close together. Have the players stand at least four feet away from the table. It's helpful to mark the spot on the ground with tape (or another marker), so it's even for everyone. Feel free to extend or reduce the distance based on the ages and abilities of your party guests.
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        motor skills
                                    </li>
                                    <li>
                                        hand-eye coordination
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Several bottles, rings (can be made by paper),
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tSqXoS1dtd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div id="box1.2.3" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Family Bowling</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Use paper cups to replace bowling pins, and use toy balls to replace bowling balls, and use bandage to make lane and marker. Same rules as real bowling, but this can be played at home!
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Self-confidence
                                    </li>
                                    <li>
                                        Patience
                                    </li>
                                    <li>
                                        Hand-eye coordination and balance
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    paper cups, balls, bandage
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    3~10 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/MOJltlHjcUc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>

        <!--play with child-->
        <div id="at home together" class="row" style="margin-top: 3%">
            <div  class="col-lg-12 col-md-12">
                <!--title of section -->
                <div class="line"></div>
                <h4>Play with your kid at home!</h4>
                <div class="line"></div>
                <!--first row-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="carousel2" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#Carouse2" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carouse2" data-slide-to="1"></li>
                                    <li data-target="#Carouse2" data-slide-to="2"></li>
                                    <li data-target="#Carouse2" data-slide-to="3"></li>
                                    <li data-target="#Carouse2" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">

                                            <a onclick="openShutManager(this,'box2.1.1')" href="#box2.1.1">
                                                <div class="centered">
                                                    Draw Something
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/Drawing.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box2.1.2')" href="#box2.1.2">
                                                <div class="centered">
                                                    Clapping game
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/clapping%20game.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box2.1.3')" href="#box2.1.3">
                                                <div class="centered">
                                                    Balloon Stormping
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/trample%20balloons.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box2.2.1')" href="#box2.2.1">
                                                <div class="centered">
                                                    Crossing Obstacles
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/cross.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box2.2.3')" href="#box2.2.3">
                                                <div class="centered">
                                                    Gobang & Gomoku
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/gobang.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#carousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="box2.1.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Draw Something</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    One person draw a picture to show the meaning of a phrase, B guess the phrase, and then shift the roles.
                                </p>
                                <p>
                                    For example, one player can draw a tiger, and give clue like "an animal", "not in the ocean", etc. Then the other players guess the word "tiger"
                                </p>



                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Know the meaning of words
                                    </li>
                                    <li>
                                        Ability of thinking
                                    </li>
                                    <li>
                                        Help to get well-rounded understanding of phrases
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Bandage (on the carpet) or chalks (in the yard)
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/l0FKsDokmZc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div id="box2.1.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Clapping Game</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Two people clap hands by this sequence:"left palm-> right palm -> both palms-> both hand backs", after finish one round then the clap times plus one
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        reaction capability
                                    </li>
                                    <li>
                                        Sequential skill
                                    </li>
                                    <li>
                                        Eye-hand cooperation
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    No required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    2~5 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/JyPajoEaDQ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box2.1.3" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Balloon Stormping</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Every player will tie up at least three balloons on each ankle. The target of players are trample the others' balloons and protect their own balloons
                                </p>
                                <p>
                                    When one person says start, every player just keep moving and try to trample the balloons, the last one with balloons will be the winner
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        concentration
                                    </li>
                                    <li>
                                        body strength & balance
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Balloons
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10~15 minutes per round (including blowing time)
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/fc0DtzYXTws" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div id="box2.2.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Crossing Obstacles</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Creating many obstacles by using different materials at home, then set the start line and ending line. Let kids try to cross all obstacle.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Observation
                                    </li>
                                    <li>
                                        patience and attention skills
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Different material like box, bandage, balls, chairs, stairs, and etc can be used as a part of obstacles
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    30~60 min per round (including setting obstacles time)
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/KS0v8uyR8CU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div id="box2.2.3" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Gobang & Gomoku</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Gomoku, also called Five in a Row. Players alternate turns placing a stone of their color on an empty intersection. The winner is the first player to form an unbroken chain of five stones horizontally, vertically, or diagonally
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        thinking ability
                                    </li>
                                    <li>
                                        improve intelligence
                                    </li>
                                    <li>
                                        rich in philosophy and help to self-cultivation
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Go board， Go pieces; or pencil, paper and eraser
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    20 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/EDHrNSwIhFo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--play at F-->
        <div id="at Friends gathering" class="row">
            <div  class="col-lg-12 col-md-12">
                <!--title of section -->
                <div class="line"></div>
                <h2>Play at Friends' Gatherings </h2>
                <h4>Let Your Kid Play with Other Kids!</h4>
                <div class="line"></div>
                <!--first row-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="carousel3" data-interval="false">
                                <div class="carousel-inner">
                                    <ol class="carousel-indicators">
                                        <li data-target="#Carouse3" data-slide-to="0" class="active"></li>
                                        <li data-target="#Carouse3" data-slide-to="1"></li>
                                        <li data-target="#Carouse3" data-slide-to="2"></li>
                                        <li data-target="#Carouse3" data-slide-to="3"></li>
                                        <li data-target="#Carouse3" data-slide-to="4"></li>
                                    </ol>
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box3.1.2')" href="#box3.1.2">
                                                <div class="centered">
                                                    Draw Something
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/Drawing.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box3.1.3')" href="#box3.1.3">
                                                <div class="centered">
                                                    Balloon Stormping
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/trample%20balloons.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box3.2.1')" href="#box3.2.1">
                                                <div class="centered">
                                                    Hopscotch
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/hopscotch.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box3.2.2')" href="#box3.2.2">
                                                <div class="centered">
                                                    Ringtoss
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/ringtoss.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box3.2.3')" href="#box3.2.3">
                                                <div class="centered">
                                                    What we have!
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/what.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel3" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#carousel3" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="box3.1.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Draw Something</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    One person draw a picture to show the meaning of a phrase, B guess the phrase, and then shift the roles.
                                </p>
                                <p>
                                    For example, one player can draw a tiger, and give clue like "an animal", "not in the ocean", etc. Then the other players guess the word "tiger"
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Know the meaning of words
                                    </li>
                                    <li>
                                        Ability of thinking
                                    </li>
                                    <li>
                                        Help to get well-rounded understanding of phrases
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Bandage (on the carpet) or chalks (in the yard)
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/l0FKsDokmZc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box3.1.3" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Balloon Stormping</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Every player will tie up at least three balloons on each ankle. The target of players are trample the others' balloons and protect their own balloons
                                </p>
                                <p>
                                    When one person says start, every player just keep moving and try to trample the balloons, the last one with balloons will be the winner
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        concentration
                                    </li>
                                    <li>
                                        Body strength & balance
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Balloons
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10~15 minutes per round (including blowing time)
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/fc0DtzYXTws" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div id="box3.2.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Hopscotch</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Draw a traditional hopscotch diagram, throw a small stone, twig, beanbag, or other marker into the first square.

                                </p>
                                <p>
                                    Hop on one foot into the first empty square, and then every subsequent empty square. Be sure to skip the one your marker is on.
                                    At the pairs (4-5 and 7-8), jump with both feet.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Balance force (physical strength)
                                    </li>
                                    <li>
                                        Manage body rhythm/ body strength
                                    </li>
                                    <li>
                                        eye-hand coordination
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Bandage (on the carpet) or chalks (in the yard)
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/gjuHDiGE45I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>

                        <div id="box3.2.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Ring toss</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Place bottles and packing them close together. Have the players stand at least four feet away from the table. It's helpful to mark the spot on the ground with tape (or another marker), so it's even for everyone. Feel free to extend or reduce the distance based on the ages and abilities of your party guests.
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        motor skills
                                    </li>
                                    <li>
                                        hand-eye coordination
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Several bottles, rings (can be made by paper),
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tSqXoS1dtd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box3.2.3" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">What we have! </h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    At the beginning, give a place or a scenario like "kitchen". Then everyone says the sentence " What we have in kitchen", and the player says nouns can appear in kitchen, for example "eggs","tomato"
                                </p>
                                <p>
                                    If one player say a improper noun, then the player will lose the game, then others change the scenario and continue the game until only one player as winner.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Know more nouns can be daily used
                                    </li>
                                    <li>
                                        Ability of thinking
                                    </li>
                                    <li>
                                        Ability of reaction
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Not required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    3~5 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <img style="width: 100%" src="assets/images/indoor%20picture/new/what2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

        <!--quick games-->
        <div id="quick games" class="row">
            <div  class="col-lg-12 col-md-12 ">
                <!--title of section -->
                <div class="line"></div>
                <h2>Estimated time </h2>
                <h4>Under 10 minutes</h4>
                <div class="line"></div>
                <!--first row-->


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="carousel4" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#Carouse4" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carouse4" data-slide-to="1"></li>
                                    <li data-target="#Carouse4" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <div class="centered">
                                                Bouncy Marble
                                            </div>
                                            <a onclick="openShutManager(this,'box4.1.1')" href="#box4.1.1"><img src="assets/images/indoor%20picture/new/marbles.jpg" class="card-img-top" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box4.1.2')" href="#box4.1.2">
                                                <div class="centered">
                                                    Clapping game
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/clapping%20game.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box4.2.1')" href="#box4.2.1">
                                                <div class="centered">
                                                    What we have!
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/what.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>


                                </div>
                                <a class="left carousel-control" href="#carousel4" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#carousel4" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="box4.1.1" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Bouncy Marble</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Option 1: Every participant has several marbles at the beginning and play this game in a square with a hole. The first mission is let your all marbles into the hole, then if your marble collide others, you will win the game
                                </p>
                                <p>
                                    Option2 : Set several holes, and you can put many marbles casually. Then use your marble (only one) to collide other until all holes contain at least one marble
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Build the awareness of achieving goals
                                    </li>
                                    <li>
                                        Build the awareness of competitiveness
                                    </li>
                                    <li>
                                        Chance to learn basic physical knowledge
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Marbles, Square area, holes or similar items for scoring
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10~15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ewqFhNw9k7g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div id="box4.1.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Clapping Game</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Two people clap hands by this sequence:"left palm-> right palm -> both palms-> both hand backs", after finish one round then the clap times plus one
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        reaction capability
                                    </li>
                                    <li>
                                        Sequential skill
                                    </li>
                                    <li>
                                        Eye-hand cooperation
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    No required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    2~5 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/JyPajoEaDQ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box4.2.1" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">What we have! </h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    At the beginning, give a place or a scenario like "kitchen". Then everyone says the sentence " What we have in kitchen", and the player says nouns can appear in kitchen, for example "eggs","tomato"
                                </p>
                                <p>
                                    If one player say a improper noun, then the player will lose the game, then others change the scenario and continue the game until only one player as winner.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Know more nouns can be daily used
                                    </li>
                                    <li>
                                        Ability of thinking
                                    </li>
                                    <li>
                                        Ability of reaction
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Not required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    3~5 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <img style="width: 100%" src="assets/images/indoor%20picture/new/what2.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>

        <!--normal games-->
        <div id="normal games" class="row">
            <div  class="col-lg-12 col-md-12 ">
                <!--title of section -->
                <div class="line"></div>

                <h4>10 ~20 minutes</h4>
                <div class="line"></div>
                <!--first row-->


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="carousel5" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#Carouse5" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carouse5" data-slide-to="1"></li>
                                    <li data-target="#Carouse5" data-slide-to="2"></li>
                                    <li data-target="#Carouse5" data-slide-to="3"></li>
                                    <li data-target="#Carouse5" data-slide-to="4"></li>
                                    <li data-target="#Carouse5" data-slide-to="5"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <div class="centered">
                                                Hide & Seek
                                            </div>
                                            <a onclick="openShutManager(this,'box5.1.1')" href="#box5.1.1"><img src="assets/images/indoor%20picture/new/hide.jpg" class="card-img-top" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box5.1.2')" href="#box5.1.2">
                                                <div class="centered">
                                                    Hopscotch
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/hopscotch.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box5.1.3')" href="#box5.1.3">
                                                <div class="centered">
                                                    Draw Something
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/Drawing.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box5.2.1')" href="#box5.2.1">
                                                <div class="centered">
                                                    Ring toss
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/ringtoss.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <div class="centered">
                                                Balloon Stormping
                                            </div>
                                            <a onclick="openShutManager(this,'box5.2.2')" href="#box5.2.2"><img src="assets/images/indoor%20picture/new/trample%20balloons.jpg" class="card-img-top" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box5.2.3')" href="#box5.2.3">
                                                <div class="centered">
                                                    Family bowling
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/bowling.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel5" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#carousel5" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="box5.1.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Hide & Seek</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Any number of players (ideally at least three) conceal themselves in a set environment, to be found by one or more seekers.
                                </p>
                                <p>
                                    One player chosen closing the eyes and counting to a predetermined number (like 20 or 100) while the other players hide. Then the player calls "Ready or not, here I come!" and then attempts to locate all concealed players.
                                </p>



                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        balance
                                    </li>
                                    <li>
                                        agility
                                    </li>
                                    <li>
                                        coordination.
                                    </li>

                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Not required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/WdlBq_m3Nfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box5.1.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Hopscotch</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Draw a traditional hopscotch diagram, throw a small stone, twig, beanbag, or other marker into the first square.

                                </p>
                                <p>
                                    Hop on one foot into the first empty square, and then every subsequent empty square. Be sure to skip the one your marker is on.
                                    At the pairs (4-5 and 7-8), jump with both feet.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Balance force (physical strength)
                                    </li>
                                    <li>
                                        Manage body rhythm/ body strength
                                    </li>
                                    <li>
                                        eye-hand coordination
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Bandage (on the carpet) or chalks (in the yard)
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/gjuHDiGE45I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                        </div>
                        <div id="box5.1.3" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Draw Something</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    One person draw a picture to show the meaning of a phrase, B guess the phrase, and then shift the roles.
                                </p>
                                <p>
                                    For example, one player can draw a tiger, and give clue like "an animal", "not in the ocean", etc. Then the other players guess the word "tiger"
                                </p>



                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Know the meaning of words
                                    </li>
                                    <li>
                                        Ability of thinking
                                    </li>
                                    <li>
                                        Help to get well-rounded understanding of phrases
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Bandage (on the carpet) or chalks (in the yard)
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/l0FKsDokmZc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box5.2.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Ring toss</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Place bottles and packing them close together. Have the players stand at least four feet away from the table. It's helpful to mark the spot on the ground with tape (or another marker), so it's even for everyone. Feel free to extend or reduce the distance based on the ages and abilities of your party guests.
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        motor skills
                                    </li>
                                    <li>
                                        hand-eye coordination
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Several bottles, rings (can be made by paper),
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/tSqXoS1dtd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box5.2.2" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Balloon Stomping</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Every player will tie up at least three balloons on each ankle. The target of players are trample the others' balloons and protect their own balloons
                                </p>
                                <p>
                                    When one person says start, every player just keep moving and try to trample the balloons, the last one with balloons will be the winner
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        concentration
                                    </li>
                                    <li>
                                        body strength & balance
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Balloons
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    10~15 minutes per round (including blowing time)
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/fc0DtzYXTws" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box5.2.3" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Family Bowling</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Use paper cups to replace bowling pins, and use toy balls to replace bowling balls, and use bandage to make lane and marker. Same rules as real bowling, but this can be played at home!
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Self-confidence
                                    </li>
                                    <li>
                                        Patience
                                    </li>
                                    <li>
                                        Hand-eye coordination and balance
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    paper cups, balls, bandage
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    3~10 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/MOJltlHjcUc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>
        <!--long time games-->
        <div id="long time games" class="row">
            <div  class="col-lg-12 col-md-12 ">
                <!--title of section -->
                <div class="line"></div>
                <h4>Over 30 minutes</h4>
                <div class="line"></div>
                <!--first row-->


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="carousel6" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#Carouse6" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carouse6" data-slide-to="1"></li>
                                    <li data-target="#Carouse6" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <div class="centered">
                                                Gobang & Gomoku
                                            </div>
                                            <a onclick="openShutManager(this,'box6.1.1')" href="#box6.1.1"><img src="assets/images/indoor%20picture/new/gobang.jpg" class="card-img-top" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box6.1.2')" href="#box6.1.2">
                                                <div class="centered">
                                                    Crossing Obstacles
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/cross.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box6.1.3')" href="#box6.1.3">
                                                <div class="centered">
                                                    Origami
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/origami-.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel6" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#carousel6" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="box6.1.1" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">Gobang & Gomoku</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Gomoku, also called Five in a Row. Players alternate turns placing a stone of their color on an empty intersection. The winner is the first player to form an unbroken chain of five stones horizontally, vertically, or diagonally
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        thinking ability
                                    </li>
                                    <li>
                                        improve intelligence
                                    </li>
                                    <li>
                                        rich in philosophy and help to self-cultivation
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Go board， Go pieces; or pencil, paper and eraser
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    20 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/EDHrNSwIhFo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box6.1.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Crossing Obstacles</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Creating many obstacles by using different materials at home, then set the start line and ending line. Let kids try to cross all obstacle.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Observation
                                    </li>
                                    <li>
                                        patience and attention skills
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Different material like box, bandage, balls, chairs, stairs, and etc can be used as a part of obstacles
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    30~60 min per round (including setting obstacles time)
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/KS0v8uyR8CU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box6.1.3" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Origimi</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    This is an activity that has been passed on from one generation to another, despite huge technological advances. Origami  is fascinating, that one square of paper can be turned into so many things.
                                </p>
                                <p>
                                    More useful information
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        eye-hand cooperation
                                    </li>
                                    <li>
                                        sequencing skills
                                    </li>
                                    <li>
                                        patenience and attention skills
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    A square of paper, scissors (perhaps)
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    5~30 min per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/wWVppdfYOx8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>

            </div>



        </div>

        <!--no require games-->
        <div id="no requirement games" class="row">
            <div  class="col-lg-12 col-md-12 ">
                <!--title of section -->
                <div class="line"></div>
                <h2>Required Material </h2>
                <h4>No requirement</h4>
                <div class="line"></div>
                <!--first row-->


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="carousel carousel-showmanymoveone slide" id="carousel7" data-interval="false">
                                <ol class="carousel-indicators">
                                    <li data-target="#Carouse7" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carouse7" data-slide-to="1"></li>
                                    <li data-target="#Carouse7" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <div class="centered">
                                                Clapping Game
                                            </div>
                                            <a onclick="openShutManager(this,'box7.1.1')" href="#box7.1.1"><img src="assets/images/indoor%20picture/new/clapping%20game.jpg" class="card-img-top" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box7.1.2')" href="#box7.1.2">
                                                <div class="centered">
                                                    Hide & Seek
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/hide.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="col-lg-4 col-md-4 col-sm-12 volunteer card">
                                            <a onclick="openShutManager(this,'box7.2.1')" href="#box7.2.1">
                                                <div class="centered">
                                                    What we have!
                                                </div>
                                                <img class="card-img-top" src="assets/images/indoor%20picture/new/what.jpg" style="cursor:pointer;"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel7" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                <a class="right carousel-control" href="#carousel7" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div id="box7.1.1" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Clapping Game</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Two people clap hands by this sequence:"left palm-> right palm -> both palms-> both hand backs", after finish one round then the clap times plus one
                                </p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        reaction capability
                                    </li>
                                    <li>
                                        Sequential skill
                                    </li>
                                    <li>
                                        Eye-hand cooperation
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    No required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    2~5 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/JyPajoEaDQ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box7.1.2" class="card-body" style="display: none; float: left">
                            <h4 class="card-title activity-description">Hide & Seek</h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    Any number of players (ideally at least three) conceal themselves in a set environment, to be found by one or more seekers.
                                </p>
                                <p>
                                    One player chosen closing the eyes and counting to a predetermined number (like 20 or 100) while the other players hide. Then the player calls "Ready or not, here I come!" and then attempts to locate all concealed players.
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        balance
                                    </li>
                                    <li>
                                        agility
                                    </li>
                                    <li>
                                        coordination.
                                    </li>

                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Not required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    15 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/WdlBq_m3Nfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div id="box7.2.1" class="card-body" style="display: none; float: left;">
                            <h4 class="card-title activity-description">What we have! </h4>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <p class="attributes_title"> Instruction</p>
                                <p>
                                    At the beginning, give a place or a scenario like "kitchen". Then everyone says the sentence " What we have in kitchen", and the player says nouns can appear in kitchen, for example "eggs","tomato"
                                </p>
                                <p>
                                    If one player say a improper noun, then the player will lose the game, then others change the scenario and continue the game until only one player as winner.
                                </p>


                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 " style="float: left">
                                <div class="attributes_title">
                                    Benefits
                                </div>
                                <ul>
                                    <li>
                                        Know more nouns can be daily used
                                    </li>
                                    <li>
                                        Ability of thinking
                                    </li>
                                    <li>
                                        Ability of reaction
                                    </li>
                                </ul>
                                <p class="attributes_title"> Materials</p>
                                <p>
                                    Not required
                                </p>
                                <p class="attributes_title"> Estimated time: </p>
                                <p>
                                    3~5 minutes per round
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  pictures" style="float: left">
                                <img style="width: 100%" src="assets/images/indoor%20picture/new/what2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
        </div>





</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

    <?php include "footer.html" ?>
<script src='Scripts/jquery.min1.js'></script>
<script src='Scripts/bootstrap.min1.js'></script>
<script  src="Scripts/index.js"></script>
    </body>
</html>



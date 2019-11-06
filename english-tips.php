<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>English Tips | MuziVic</title>
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
    <link rel="stylesheet" href="assets/css/title.css">

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
            <ul id="path">
                <li><a href="index.php">Home</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <!--No link here-->
                <li>English Tips</li>
            </ul>
        </div>
    </div>
    <div style=" padding: 1%">
        <div id = "title" align="center">Great Routines to Integrate English Daily</div>
    </div>
</div>

<!--printable-->
<div class ="print-button" style="float: right; margin-right: 10%; font-size: 15px; border: solid"><a href="english-tips-printable.php"><img class="printer-icon" style = "align-items: center; width: 40px; height:40px" src="assets/images/printer.png" alt="Print">Print</a></div>

<div class="container">
    <div class="row ml-50">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="volunteer card " >
                <div class="centered">
                    Ordering Food
                </div>
                <a onclick="openShutManager(this,'box1')">
                    <img class="card-img-top" src="assets/images/order-restaurant.jpeg" style="cursor:pointer;" alt="">
                </a>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25 ">
            <div class="volunteer card">
                <a onclick="openShutManager(this,'box2')">
                    <div class="centered">
                        Talk at Dinner
                    </div>
                    <img class="card-img-top" src="assets/images/talk-at-dinner.jpg" style="cursor:pointer;" alt="">
                </a>
            </div>

        </div>
        <div class="col-12">
            <div id="box1" class="card-body" style="display: none;">
                <h2 class="card-title">Ordering Food</h2>
                <div class="points-with">
                    <div class="point-left col-sm-12 col-md-6 col-lg-6">
                        <h4>
                            Benefits
                        </h4>
                        <ul >
                            <li>Lead by example, show to your child how to order.</li>
                            <li>In the next opportunity, let your child order a particular dish by himself.</li>
                            <li>Lastly, let the child order the food for the whole family.</li>
                        </ul>
                    </div>

                    <div class="points-right col-md-6 col-sm-12 col-lg-6">
                        <h4>Key Phrases</h4>
                        <ul>
                            <li>Could I have a menu, please?</li>
                            <li>Could I have a glass of water, please?</li>
                            <li><a href="https://www.thoughtco.com/beginner-dialogues-at-a-restaurant-1210039">Find more dialogue examples and Key phrase here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="box2" class="card-body" style="display: none;">
                <h2 class="card-title">Talk at Dinner</h2>

                <div class="points-with">
                    <div class="point-left col-sm-12 col-md-6 col-lg-6">
                        <h4>
                            Benefits
                        </h4>
                        <ul >
                            <li>If your children is still a beginner, tell them to identify common objects in english.</li>
                            <li>As your child gains proficiency, let them to talk about their day (school,friends etc).</li>
                        </ul>
                    </div>
                    <div class="points-right col-md-6 col-sm-12 col-lg-6">
                        <h4>Popular questions</h4>
                        <ul>
                            <li> What was your favorite part of the day?</li>
                            <li>Who did you play with at school?</li>
                            <li>What makes you feel happy?</li>
                            <li><a href="https://sleepingshouldbeeasy.com/2018/07/23/conversation-starters-for-kids/">Find more conversation starters here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--box3-->
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box3')">
                    <div class="centered">
                        Read a Child Book
                    </div>
                    <img class="card-img-top" src="assets/images/kid-read.jpeg" style="cursor:pointer;" alt="">
                </a>
            </div>
        </div>
        <!--box4-->
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box4')">
                    <div class="centered">
                        Play With Them
                    </div>
                    <img class="card-img-top" src="assets/images/play-with-kids.jpeg" style="cursor:pointer;" alt="">
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="card-body" id="box3" style="display: none">
                <h2 class="card-title">Read a Child Book</h2>
                <div class="points-with">
                    <div class="point-left col-sm-12 col-md-6 col-lg-6">
                        <ul >
                            <li>Have your child read a book outloud with you!</li>
                            <li>Reading outloud is a great way of practicing reading and speaking!</li>
                        </ul>
                    </div>
                    <div class="points-right col-md-6 col-sm-12 col-lg-6">
                        <ul>
                            <li><a href="https://www.oxfordowl.co.uk/home/reading-owl/find-a-book/library-page">OxfordOwl</a> books are free to read online. Create an account and start reading!</li>
                            <li>The US's<a href="http://www.read.gov/books/index.html"> Library of Congress </a> has 51 classic books for kids free to read online!</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="card-body" id="box4" style="display: none">
                <h2 class="card-title">Play With Them</h2>

                <div class="points-with">
                    <div class="point-left col-sm-12 col-md-6 col-lg-6">
                        <ul >
                            <li>Spend time to play with your child to play the games that your child likes.</li>
                            <li>remember to use English.</li>
                        </ul>
                    </div>
                    <div class="points-right col-md-6 col-sm-12 col-lg-6">
                        <ul>
                            <li><a href="indoor.php">Go to our page here to find great english-based indoor activities </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!--tips 5&6-->
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box5')">
                    <div class="centered">
                        Sing English Songs
                    </div>
                    <img class="card-img-top" src="assets/images/child-sing.jpeg" style="cursor:pointer;" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box6')">
                    <div class="centered">
                        Let them speak uninterruptedly
                    </div>
                    <img class="card-img-top" src="assets/img/kids-sit-together.jpeg" style="cursor:pointer;" alt="">
                </a>
            </div>


        </div>
        <div class="col-12">
            <div class="card-body" id="box5" style="display: none">
                <h2 class="card-title">Sing English Songs</h2>

                <div class="points-with">
                    <div class="point-left col-sm-12 col-md-6 col-lg-6">
                        <ul >
                            <li>Sing some children song's in english.</li>
                        </ul>
                    </div>
                    <div class="points-right col-md-6 col-sm-12 col-lg-6">
                        <iframe src="http://www.youtube.com/embed/ysaskdFpPz8"
                                width="450" height="315" frameborder="0" allowfullscreen></iframe>
                        <h4> More Songs </h4>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=_z-1fTlSDF0"> Happy birthday song in English </a></li>
                            <li><a href="https://www.youtube.com/watch?v=_z-1fTlSDF0"> Itsy Bitsy Spider Song </a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="card-body" id="box6" style="display: none">
                <h2 class="card-title">Let Them Speak Uninterruptedly</h2>

                <div class="points-with1">
                    <ul >
                        <li>When the child makes a mistakes, let them continue until the child finishes.</li>
                        <li>At the end say: "Good work! remember your grammar lessons and then you will be perfect!".</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--tips7&8-->
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box7')">
                    <div class="centered">
                        Give Positive Response
                    </div>
                    <img class="card-img-top" src="assets/images/dont%20laugh%20at%20kids.jpeg" style="cursor:pointer;" alt="">
                </a>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box8')">
                    <div class="centered">
                        Clarity is More Important Than Accent
                    </div>
                    <img class="card-img-top" src="assets/img/accent.jpeg" style="cursor:pointer;" alt="">
                </a>
            </div>

        </div>
        <div class="col-12">
            <div class="card-body" id="box7" style="display: none">
                <h2 class="card-title">Give Positive Response</h2>

                <div class="points-with1">
                    <ul >
                        <li>Smile and nod when the child is practicing.</li>
                    </ul>
                </div>
            </div>
            <div class="card-body" id="box8" style="display: none">
                <h2 class="card-title">Clarity is More Important Than Accent</h2>

                <div class="points-with1">
                    <ul >
                        <li>The accent, whether Australian, American or British, matters little. It's more important to speak clearly.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--tips9&10-->
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box9')">
                    <div class="centered">
                        Let Them Learn in Their Own Pace
                    </div>
                    <img class="card-img-top" src="assets/images/pressure.jpg" style="cursor:pointer;" alt="">
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-25 mt-25">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box10')">
                    <div class="centered">
                        Practice Consistently
                    </div>
                    <img class="card-img-top" src="assets/img/hp-top.jpg" style="cursor:pointer;" alt="">
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="card-body" id="box9" style="display: none">
                <h2 class="card-title">Let Them learn in Their Own Pace</h2>

                <div class="points-with1">
                    <ul >
                        <li>It is good to let them know the importance of speaking English in Melbourne, but do not overburden them with tasks.</li>
                        <li>Give them time to absorb what they learned, it will help them to be assured of their skills and have the confidence to speak.</li>

                    </ul>

                </div>
            </div>
            <div class="card-body" id="box10" style="display: none">
                <h2 class="card-title">Practice Consistently</h2>

                <div class="points-with1">
                    <ul >
                        <li>Speaking fluent English will take more than just several days.</li>
                        <li>Keep practicing English with your kids.</li>
                        <li>Consistent practice will make the child's learning process efficient.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<br>
	<br>
</div>
<?php include "footer.html" ?>
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>
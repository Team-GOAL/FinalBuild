<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Volunteering Sectors | muziVic</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon1.png">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/ace.min.css">	
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/English-tips.css">
    <link rel="stylesheet" href="assets/css/title.css">
    <link rel="stylesheet" href="assets/css/mdb.min.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/business-frontpage.css" rel="stylesheet">

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

    <script type="text/javascript">
        
    </script>

</head>
<?php include "header.html" ?>
<body>
<div class="title">
    <div class="container">
        <div class="inner-content">
            <ul id="path">
                <li><a href="index.php">Home</a></li>
                <!--need link here-->
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <!--No link here-->
                <li>Volunteering Sectors</li>
            </ul>
        </div>
    </div>
    <div style=" padding: 1%">
        <div id = "title" align="center">Volunteering Sectors</div>
    </div>
</div>

<!-- Header -->

<!-- Page Content -->

<div class="container">
		 <div class="about-area pt-80 pb-80">
            <div class="container">
                <div class="row d-flex align-items-top">
                    <div class="col-lg-6 col-md-12">
                        <div class="tools-content ml-20">
                            <h2>Volunteering Sectors</h2>
                            <p style="font-size:180%;">There are many sectors where Australians can volunteer. Among them, we have selected five organizational areas that are suitable for you and your child.</p>
                        </div>
                    </div>
					<div class="col-lg-6 col-md-12">
						<div id="where_volunteer"style="min-width: 310px; height: 400px; margin: 0 auto">
						</div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="container">

	<div class="container">
		<div class="tools-content ml-20">
			<h2>Here are some suggested Volunteering activities for kids </h2>
		</div>
	</div>
	
	    <!-- /.row -->
    <div class="row ">
        <div class="col-md-6 mb-50">
            <div class="card volunteer" >
                <a onclick="openShutManager(this,'box1')">
                    <div class="centered">
                        Community / Welfare
                    </div>
                    <img class="card-img-top" src="assets/images/volunteer_did_1.jpg" style="cursor:pointer; " alt="">
                </a>
            </div>
            <div id="box1" class="card-body" style="display: none">
                <h4 class="card-title">Community/Welfare</h4>
                <div class="points-with1">
                    <ul >
                        <li>
                            Bring your children with you to cook or serve meals at a homeless shelter.
                        </li>
                        <li>
                            Donate books or art supplies to a homeless shelter for children.
                        </li>
                        <li>
                            Have your child sort through old toys they don’t play with anymore and donate them to Goodwill or another local charity group
                        </li>
                        <li>
                            Donate books or art supplies to a homeless shelter for children.
                        </li>
                        <li>
                            Make care packages for the homeless. Include travel-sized toiletries, granola bars, and bottled water. Carry them with you in the car to hand out when you have the opportunity
                        </li>
                        <li>
                            Organize to build a playground in your neighborhood.
                        </li>
                    </ul>
                </div>


            </div>
        </div>
        <div class="col-md-6 mb-50 ">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box2')">
                    <div class="centered">
                        Environment
                    </div>
                    <img class="card-img-top" src="assets/images/volunteer_did_2.jpg" style="cursor:pointer;" alt="">
                </a>
            </div>
                <div id="box2" class="card-body" style="display: none">
                    <h4 class="card-title">Environment</h4>
                    <div class="points-with1">
                        <ul>
                            <li>
                                Complete a park clean up
                            </li>
                            <li>
                                Clean up after serving food at a local community service
                            </li>
                            <li>
                                Clean a town monument
                            </li>
                            <li>
                                Plant flowers at a local school or library
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        <div class="col-md-6 mb-50">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box3')">
                    <div class="centered">
                        Animal Welfare
                    </div>
                    <img class="card-img-top" src="assets/images/volunteer_did_3.jpg" style="cursor:pointer;" alt="">
                </a>
            </div>
                <div class="card-body" id="box3" style="display: none">
                    <h4 class="card-title">Animal Welfare</h4>
                    <div class="points-with1">
                        <ul>
                            <li>
                                Volunteer at a local animal shelter.
                            </li>
                            <li>
                                Donate newspaper , dog beds or other pet supplies to local shelters
                            </li>
                            <li>
                                Offer a walk to neighbour's dog
                            </li>
                            <li>
                                Place bird feeder in the yard for local birds
                            </li>
                            <li>
                                Adopt a pet
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="col-md-6 mb-50">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box4')">
                    <div class="centered">
                        Health
                    </div>
                    <img class="card-img-top" src="assets/images/volunteer_did_4.jpg" style="cursor:pointer;" alt="">
                </a>
            </div>
                <div class="card-body" id="box4" style="display: none">
                    <h4 class="card-title"> Health</h4>
                    <div class="points-with1">
                        <li>
                            Walk with your kid to raise awareness among kids
                        </li>
                        <li>
                            Get your child involved with groups that offer built-in volunteer
                            opportunities, such as the Boy Scouts, Girl Scouts
                        </li>
                        <li>
                            Volunteer with Red Cross Youth Services through your local
                            Red Cross branch. And make sure kids and parents take a
                            CPR/first-aid course so everyone is ready to volunteer lifesaving services
                            if necessary.
                        </li>
                        <li>
                            Volunteer to shelve books at a library
                        </li>
                    </div>
                </div>
            </div>
        <div class="col-md-6 offset-3 mb-50">
            <div class="card volunteer">
                <a onclick="openShutManager(this,'box5')">
                    <div class="centered">
                        Others
                    </div>
                    <img class="card-img-top" src="assets/images/volunteer_did_5.jpg" style="cursor:pointer;" alt="">
                </a>
            </div>
            <div class="card-body" id="box5" style="display: none">
                <h4 class="card-title"> Others</h4>
                <div class="points-with1">
                    <ul>
                        <li>
                            Help elderly people at old age centers
                        </li>
                        <li>
                            Accompany elderly citizens to hospitals or markets
                        </li>
                        <li>
                            Mow neighbour's lawn
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
     <div class="tools-content ml-20" >
                <h3> Let's find Volunteering Activities at GoVolunteer.com</h3>
							<div class="slider-btn-4 mt-30 button" style="text-align: left">
								<div class="btn-group open">
									<button onclick="location.href='https://govolunteer.com.au/volunteering/in-victoria-vic?goodfor=8%2c1&interest=13%2c3%2c4%2c14%2c12%2c25'" class="btn btn-lg btn-hover" aria-expanded="true">
										Volunteer Now
									</button>
								</div>
							</div>
    </div>



</div>

<br>
<br>
<!-- /.container -->
<?php include "footer.html" ?>



</body>
		<!-- all js here -->
		 <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
		<script src="Scripts/highcharts/code/highcharts.js"></script>
		<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
		<script src="Scripts/datavis/where_volunteer.js"></script>
</html>

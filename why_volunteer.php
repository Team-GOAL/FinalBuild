<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Why Volunteer | muziVic</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon1.png">
  <!-- Bootstrap core CSS -->
  
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/ace.min.css">  
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/icons.css">
  <link rel="stylesheet" href="assets/css/plugins.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <link rel="stylesheet" href="assets/css/title.css">
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <link rel="stylesheet" href="assets/css/English-tips.css">


  <!-- Custom styles for this template -->
  <link href="assets/css/business-frontpage.css" rel="stylesheet">

    <script src="Scripts/login-signup-modal.js"></script>

	
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



</head>
<?php include "header.html" ?>
<body>
<div class="title">

	  <div class="container">
		<div class="inner-content">
		  <ul id="path">
			<li><a href="index.php">Home</a></li>
			<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
			<!--need link here-->
			<!--No link here-->
			<li>Why Volunteering</li>
		  </ul>
		</div>
	  </div>
	  <div style=" padding: 1%">
		<div id = "title" align="center">Volunteering - Help others to help your kid.</div>
	  </div>
  </div>


  <!-- Header -->

  <!-- Page Content -->
  
  <div class="container">
<div class="about-area pt-80 pb-80">
 <div class="container">
    <div class="row ">
      <div class="col-md-8 mb-50" style="float: left">
        <h2>Why Volunteering</h2>
        <hr>
        <p> Giving to others can also help protect your mental and physical health. It can reduce stress, combat depression,keep you mentally stimulated, and provide a sense of purpose. While it’s true that the more you volunteer, the more benefits you’ll experience, volunteering doesn’t have to involve a long-term commitment or take a huge amount of time out of your busy day. Giving in even simple ways can help those in need and improve your health and happiness.</p>
        
      </div>
     <div class="col-md-4 mb-50" style="float: left;">
       <img style="width:100%;height: 100%; object-fit: cover" src="assets/images/volunteer2.jpg" alt="">

     </div>
    </div>
     </div>
    </div>
    <!-- /.row -->

    <div class="row ">
      <div class="col-md-6 mb-50">
        <div class="volunteer card " >
	      <div class="centered">
            Building Confidence
          </div>
          <a onclick="openShutManager(this,'box1')">
            <img class="card-img-top" src="assets/img/Confident_Volunteer.jpg" style="cursor:pointer;" alt="">
          </a>
        </div>
        <div id="box1" class="card-body" style="display: none;">
          <h2 class="card-title">Building Confidence</h2>
          <p class="card-text">Volunteering Helps kids to not only affect the lives of people in the community but also helps them to build their confidence . Whether it is spending time with an elderly or cleaning up any of the community place, your child can be made aware that their time and effort is making a difference.
          </p>
        </div>
      </div>
      <div class="col-md-6 mb-50 ">
        <div class="volunteer card">
          <div class="centered">
            Better Mental Health
          </div>
          <a onclick="openShutManager(this,'box2')">
            <img class="card-img-top" src="assets/img/mental_volunteer.jpg" style="cursor:pointer;" alt="">
          </a>
        </div>
          <div id="box2" class="card-body" style="display: none;">
            <h2 class="card-title">Better Mental Health </h2>
            <p class="card-text"> Helping others triggers the reward pathway in the brain" and that this buzz is sometimes known as "the helper's high.</p>
          </div>
          
        </div>
      <div class="col-md-6 mb-50">
        <div class="card volunteer">
          <div class="centered">
            Connecting With People
          </div>
          <a onclick="openShutManager(this,'box3')">
            <img class="card-img-top" src="assets/img/connecting_volunteer.jpg" style="cursor:pointer;" alt="">
          </a>
        </div>
          <div class="card-body" id="box3" style="display: none">
            <h2 class="card-title">Connecting With People</h2>
            <p class="card-text"> Children will be able to meet new people from various background and learn about different cultures and even different socio economic background.</p>
          </div>
          
        </div>
      <div class="col-md-6 mb-50">
        <div class="card volunteer">
          <div class="centered">
            Exploring Skills and Talents
          </div>
          <a onclick="openShutManager(this,'box4')">
            <img class="card-img-top" src="assets/img/skills_volunteer.jpg" style="cursor:pointer;" alt="">
          </a>
        </div>
          <div class="card-body" id="box4" style="display: none">
            <h2 class="card-title"> Exploring Skills and Talents</h2>
            <p class="card-text">Volunteering allows your children to develop skills and talents that could be useful for them while growing up.</p>
          </div>
          
        </div>
      </div>
	  
    <div class = "find_more">
      <h2> Find out more benefits to volunteering </h2>
			<div class="slider-btn-4 mt-30 button" style="text-align: left">
				<div class="btn-group open">
					<button onclick="location.href='http://www.essentialkids.com.au/development-advice/advice/how-volunteer-work-can-make-your-child-a-better-person-20180522-h10dnr#ixzz5zIp0wHDa'" class="btn btn-lg btn-hover" aria-expanded="true">
						Volunteer Now
					</button>
				</div>
			</div>
    </div>
    </div>
<br>
<br>
    <!-- /.row -->
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
  <!-- /.container -->
<?php include "footer.html" ?>



</body>

</html>

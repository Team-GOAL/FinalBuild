<!DOCTYPE html >
<head>
    <meta name="viewport" content="width=device-width, user-scalable=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MuziVic</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon1.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/ace.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/plan-home.css">
    <link rel="stylesheet" href="assets/css/sports.css">
    <link rel="stylesheet" href="assets/css/preference-and-plan-sports.css">
    <!--fonts added here-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair%20Display">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({google: {families: ["Karla:regular,italic,700", "Frank Ruhl Libre:300,regular", "Playfair Display:regular,italic,700,700italic,900,900italic"]}});</script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Karla:regular,italic,700%7CFrank+Ruhl+Libre:300,regular%7CPlayfair+Display:regular,italic,700,700italic,900,900italic"
          media="all">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400&display=swap" rel="stylesheet">
    <script src="Scripts/jquery-3.2.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/popper.min.js"></script>
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="Scripts/login-signup-modal.js"></script>


    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            max-width: 800px;
            max-height: 500px;
            height: 100%;
            width: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #sidebar {
            width: 300px;
            height: 600px;
            float: right;
        }

        .map-control {
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
            font-family: 'Roboto', 'sans-serif';
            margin: 10px;
            /* Hide the control initially, to prevent it from appearing
               before the map loads. */
            display: none;
        }

        /* Display the control once it is inside the map. */
        #map .map-control {
            display: block;
        }


        @media screen and (max-width: 650px) {
            #sidebar-whole {
                display: none;
            }

            #map {
                height: 350px;
                display: block;
            }

            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        }
    </style>
    <script src="Scripts/sports-map-and-sidebar.js"></script>
</head>
<?php include "header.html" ?>
<body>

<div class="modal fade" id="sportsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>View
                        Recommended Sports<br> For Your Kid</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--preference-panel-->
            <div class="modal-body mx-4" id="preference-modal">
                <!--Body-->
                <form id="preferenceForm" name="preferenceForm" action="php/preference-prepared-statements.php">
                    <label style="text-align: center" for="age">Select your kid's age</label>
                    <select class="custom-select md-form pb-3 form-group" name="age" id="age"
                            style="max-width:420px; width:100%; height: 42px; font-size:17px; text-align: center">
                        <option selected="selected">6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                    </select>
                    <label style="text-align: center" for="gender">Select your kid's gender</label>
                    <select name="gender" id="gender" class="custom-select md-form pb-3 form-group"
                            style="max-width:420px; width:100%;height: 42px; text-align: center">
                        <option selected="selected">male</option>
                        <option>female</option>
                    </select>
                    <label style="text-align: center" for="teamIndividual">Team or individual sports?</label>
                    <select name="teamIndividual" id="teamIndividual" class="custom-select md-form pb-3 form-group"
                            style="max-width:420px; width:100%; height: 42px;text-align: center">
                        <option selected="selected">team</option>
                        <option>individual</option>
                    </select>
                    <div class="text-center mb-3">
                        <button form="preferenceForm" id="preferenceButton"
                                value="Submit" type="button"
                                class="btn blue-gradient btn-block btn-rounded z-depth-1a"
                                style="height: 42px; font-size: 20px;">
                            See recommendation
                        </button>
                    </div>
                </form>
            </div>
            <!--Footer -->
            <!--tips-panel-->
            <div class="modal-body mx-4" id="tips-modal">
                <!--Body-->
                <p>Test</p>
            </div>

        </div>
        <!--/.Content-->
        <!--Footer -->
    </div>
</div>
<!-- Modal -->


<div class="sportsPage" align="center">
    <div class="container">
        <div class="inner-content">
            <ul id="sports-title">
                <li><a href="index.php">Home</a></li>
                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                <!--No link here-->
                <li>Sports</li>
            </ul>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div id="title" align="center">Find Sports Facilities for your kid!</div>
</div>
<div class="col-sm-4"></div>
<div id="displayAlternativeForNotFound" style="display: none"></div>
<div class="row">
    <p class="col-sm-6" id="recommendation-msg">Don't know which one to choose? See our recommendations for your
        kid!</p>
    <div class="slider-btn-4 mt-30 button" style="margin-top: 0; font-size: 20px; max-height: 40px; height: 100%">
        <div class="btn-group open">
            <button data-target="#sportsModal" data-toggle="modal" id="openPreference" class="btn btn-lg btn-hover"
                    aria-expanded="true">
                See Our Recommendation
            </button>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
<div><p id="displayPreference"></div>
<div><p id="notFound" style="color: red; font-size: 20px"></div>
<div class="row offset-sm-1">
    <div class="content col-lg-3" id="sidebar-whole">
        <div class="card" id="sidebar">
            <div class="row">

                <div class="content col-lg-12">

                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body" id="card_body" style="overflow:scroll;overflow-x: hidden;height: 450px">
                            <div class="list-group fade active show" id="list-group">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content col-lg-9">
        <div id="search-control" class="map-control">
            <form id="mapFormControl" name="mapForm" action="" method="post" style="width: 320px">
                <input type="text" name="suburb" id="suburb" style="width: 320px"
                       placeholder="Enter the Suburb Name or Postcode"/>
                <div id="suburb-err-msg" style="color: red"></div>
                <row>
                    <select class="custom-select" name="sports" id="pac-list" style="width: 280px">
                        <option value="" id="sports-empty" selected="selected">---Select a sports activity---</option>
                        <option value="Australian Rules Football">Australian Rules Football</option>
                        <option value="Basketball">Basketball</option>
                        <option value="Cricket">Cricket</option>
                        <option value="Gymnastics">Gymnastics</option>
                        <option vlue="Soccer">Soccer</option>
                        <option value="Swimming">Swimming</option>
                        <option value="Tennis">Tennis</option>
                        <option value="Netball">Netball</option>
                    </select>
                    </select>
                    <a href="" id="map-button-control"><img src="assets/img/search.png" alt=""
                                                            style="height: 30px; width: 30px;"></a>
                </row>
            </form>
        </div>
        <div id="map" class=""></div>
    </div>
</div>

<div class="hint-text" id='notFound'
     style="align-content: center; wiidth = 100%; align-self: center; padding-left: 5%;padding-top: 5%"></div>


<div id="displayLocations" style="display: none"></div>
<div id="displayAlternativeForNotFound" style="display: none"></div>


</body>


<script>
    var map;
    var arrMarkers = [];
    var arrInfoWindows = [];

    /**
     * It instantializes the google map and the search box.
     */
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -37.818078, lng: 144.96681}, // Moorabbin
            zoom: 13,
            mapTypeControl: false // disable the toggle between the mao and satellite

        });
        var searchControl = document.getElementById('search-control');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(searchControl);
    }

    /**
     * It validates whether the user input is empty
     * and then call the searchBySuburbAndActivityFromServer function to search locations and display on map
     */
    function search() {
        if ($('#suburb').val() === "" && $('#pac-list').val() === "") {
            $('#notFound').html("Please enter a suburb or sports activity");
        } else {
            let url = "php/sports-prepared-statements.php";
            searchBySuburbAndActivityFromServer($('#mapFormControl').serialize(), url);
            //    }
            $('notFound').innerHTML = "";
        }
    }

    /**
     * When the search icon in the map is clicked, call search() function
     */
    $('body').on('click', '#map-button-control', function (e) {
        e.preventDefault();
        search();
    });

    /**
     * When the user presses the enter key, call search() function
     */
    $('body').on('keydown', '#map', function (e) {
        var key = e.key.toLowerCase();
        if (key === "enter") {
            search();
            e.preventDefault();
        }
    });

    /**
     * When the user clicks the button to view recommendations, search for sports acivites and display them.
     */
    $('body').on('click', '#preferenceButton', function (e) {
        e.preventDefault();

        $('tips-modal').hide();
        $('preference-modal').show();
        $.ajax({
            url: "php/preference-prepared-statements.php",
            type: "POST",
            data: $('#preferenceForm').serialize(),
            dataType: "json",
            success: function (data) {
                $('#displayPreference').empty();
                // Display activities to the user.
                var output = "<br>" + "<i class=\"fas fa-star\"></i>Recommended activties for your kid<i class=\"fas fa-star\"></i>" + "<br><br>";
                for (var i in data) {
                    output += "<a class ='activityResult button' id= '" + data[i].sportsActivity + "'>" + data[i].sportsActivity + ", </a>";

                }
                output += "</tbody></table>";
                $('#sportsModal').modal('hide');
                $('#displayPreference').append(output);
                // Show the first activity on map
                let url = "php/sports-prepared-statements.php";
                searchBySuburbAndActivityFromServer(data[0], url);
            },
            error: function (jqxhr, status, exception) {
                // alert(JSON.stringify(jqxhr));
                //alert(status);
                //alert(exception);
                //$('#displayPreference').empty();

            }
        });
    });

    /**
     * When the user clicks the
     */
    $('body').on('click', '#openPreference', function (e) {
        $('#myModalLabel').show();
        $('#preference-modal').show();
        $('#tips-modal').hide();
    });


    $('body').on('click', '.activityResult', function (e) {
        // show locations on map
        //  e.preventDefault();
        let target = $(e.target);
        let data = '{"sports": "' + target.attr('id') + '"}';
        data = JSON.parse(data);
        //submit find by sports and activity to search locations and load on map
        let url = "php/sports-prepared-statements.php";
        // $('#displayPreference').hide();
        searchBySuburbAndActivityFromServer(data, url);
    });

</script>
<script async defer
        src="">
</script>
</body>
</html>

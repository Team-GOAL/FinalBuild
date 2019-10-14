<!DOCTYPE html >




<script src="Scripts/add-sports-to-plan-map.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.js"></script>
<style>
    .form-elegant .font-small {
        font-size: 0.8rem;
    }

    .form-elegant .z-depth-1a {
        -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
        box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
    }

    .form-elegant .z-depth-1-half,
    .form-elegant .btn:hover {
        -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
        box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
    }

    .form-elegant .modal-header {
        border-bottom: none;
    }

    .modal-dialog .form-elegant .btn .fab {
        color: #2196f3 !important;
    }

    .form-elegant .modal-body, .form-elegant .modal-footer {
        font-weight: 400;
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
        /* Hide the control initially, to prevent it from appearing
           before the map loads. */
        display: none;
    }

    /* Display the control once it is inside the map. */
    #map .map-control {
        display: block;
    }
</style>

<div>
    <div class="row">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#planSportsForm" style="margin-right: 20px; margin-left: 20px">Add Plans</button>
        <button type="button" class="btn btn-primary" style="margin-right: 20px; margin-left: 20px">Manage Plans
        </button>
        <button type="button" class="btn btn-primary" style="margin-right: 20px; margin-left: 20px">View Next Plan
        </button>
    </div>
</div>
<div class="modal fade" id="planSportsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content form-elegant">
            <!--Header-->
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Add
                        A Sports Activity to My Plan</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--add plan modal-panel-->
            <div class="modal-body mx-4">
                <!--Body-->
                <div id="ageList" class="md-form pb-3 form-group">
                    <label for="plan-title">Enter the Task Name</label>
                    <input type="text" id="plan-title" class="form-control validate">
                </div>
                <div class="md-form pb-3 form-group">
                    <div class="input-group date" id="datetimepicker_modal" data-target-input="nearest">
                        <label for="pick_date">Enter the Start Time</label>
                        <input id='pick_date' type="text" placeholder="Select date"/>
                    </div>
                </div>

                <div class="md-form pb-3 form-group">
                    <label for="location">Click a marker in the map for the location</label>
                    <input type="text" id="location" class="form-control validate"
                           placeholder="Choose from the map below">
                    <br>
                    <div id="hidden-lat-lng"></div>
                    <p id="notFound" style="display: none">No result found. Please search again
                    <p>
                    <div id="search-control" class="map-control">
                        <form id="mapFormControl" name="mapForm" action="" method="post">
                            <input type="text" name="suburb" id="suburb" placeholder="Enter the Suburb Name"/>
                            <select class="custom-select" name="sports" id="pac-list">
                                <option value="" selected="selected">---Select a sports activity---</option>
                                <option value="Aerobics">Aerobics</option>
                                <option value="Athletics">Athletics</option>
                                <option value="Australian Rules Football">Australian Rules Football</option>
                                <option value="Badminton">Badminton</option>
                                <option value="Baseball">Baseball</option>
                                <optionb value="Basketball">Basketball</optionb>
                                <option value="Cricket">Cricket</option>
                                <option value="Cycling">Cycling</option>
                                <option value="Fitness / Gymnasium Workouts">Fitness / Gymnasium Workouts</option>
                                <option value="Hockey">Hockey</option>
                                <option value="Golf">Golf</option>
                                <option value="Gymnastics">Gymnastics</option>
                                <option value="Karate">Karate</option>
                                <option value="Skating">Skating</option>
                                <option value="Soccer">Soccer</option>
                                <option value="Swimming">Swimming</option>
                                <option value="Table Tennis">Table Tennis</option>
                                <option value="Tennis">Tennis</option>
                                <option value="Netball">Netball</option>
                                <option value="Yoga">Yoga</option>
                                <option value="Volleyball">Volleyball</option>
                            </select>
                        </form>
                    </div>
                    <div id="button-control" class="map-control">
                        <button class="button  btn blue-gradient btn-block btn-rounded z-depth-1a" type="button" id="mapButtonControl">Search Sports
                            Facilities
                        </button>
                    </div>
                    <div class="content col-lg-12" style="height: 350px" id="map"></div>

                </div>
                <div class="text-center mb-3">
                    <button id="planSportsButton" type="button"
                            class="btn blue-gradient btn-block btn-rounded z-depth-1a">
                        Make Plan
                    </button>
                </div>
            </div>
            <!--Footer for login-panel-->

            <!--login-panel-->

        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->


</body>


<script>
    var map;
    var arrMarkers = [];
    var arrInfoWindows = [];

    $('#pick_date').datetimepicker({
        inline: true,
        // startDate: new Date(),
        //  minDate: new Date(),
        // onSelectDate: function () {},
        // onSelectTime: function () {},

    });


    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -37.818078, lng: 144.96681}, // Moorabbin
            zoom: 13,
            mapTypeControl: false, // disable the toggle between the mao and satellite
            streetViewControl: false

        });
        var searchControl = document.getElementById('search-control');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(searchControl);

        var buttonControl = document.getElementById('button-control');
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(buttonControl);

        google.maps.event.addDomListener(buttonControl, 'click', function () {
            //submit find by sports and activity to search locations and load on map
            var url = "php/sports-prepared-statements.php";
            searchBySuburbAndActivityFromServer($('#mapFormControl').serialize(), url);
        });
    }

</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbY1UepiPSZdZkOk6qDqvZX8lCQCLX7kI&callback=initMap">


    //Gabe's key
    //src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbY1UepiPSZdZkOk6qDqvZX8lCQCLX7kI&callback=loadMap">
</script>
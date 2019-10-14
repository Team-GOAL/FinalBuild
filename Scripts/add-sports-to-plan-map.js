/**
 *It search sports facilities from the server by activity and suburb,
 * and thn display on map.
 * @param allData: (form data) a String of suburb name and activity
 * @param urlStr: the url of the php server file that queries from the database
 */
function searchBySuburbAndActivityFromServer(allData, urlStr) {
    $('#notFound').empty();
    $.ajax({
        url: urlStr,
        type: "POST",
        data: allData,
        success: function (locData) { // Pop the location data on map
            // if data is empty, show feedback to the user
            if (locData === "") {
                //TODO display not found hint text
                //TODO not working at the moment
                $('#notFound').style.display = "block";
                searchActivityAtSuburbNearby(allData, urlStr);
            }
            showFacilitiesOnMap(locData);
        },
        error: function (jqxhr, status, exception) {
//alert(JSON.stringify(jqxhr));
// alert(status);
// alert(exception);
//alert("No result found. Please refresh and search again.");
            //TODO not working currntly
            $('#notFound').html("No result");
            searchActivityAtSuburbNearby(allData, urlStr);
            $('#displayLocations').empty();

// TODO find suburbs nearby
// TODO print we could not find any facility at this suburb.
// TODO displayAlternativeForNotFound
//   var sameActivityNearbyURL = "php/sports-not-found-prepared-statement.php";
//    searchActivityAtSuburbNearby(allData, sameActivityNearbyURL);
        }
    });
}

/**
 * It takes a list of records returned by the server and display markers on the map
 * @param allData
 */
function showFacilitiesOnMap(allData) {
    var firstResult; // Record the first result found so as to set this to the center of the map
    var mapPoints = []; // A list of markers/locations
    var descriptionList = []; // A list of location descriptions
    var activtyList = []; //A list of sports activities
    var facilityNameList = []; //A list of facility names

    //Push all lat lng into a list, and push the description into a list.
    Array.prototype.forEach.call(allData, function (data) {
        if (allData.indexOf(data) === 0) { // Set the center of the map to the first marker
            firstResult = {lat: data.lat, lng: data.lng};
            map.setCenter(firstResult);
        }
        var activityName = data.sports; // record sports activity
        activityName = activityName.toLowerCase();
        activtyList.push(activityName);
        //TODO fix here to load different icons


        var pt = {};
        pt.latitude = data.lat;
        pt.longitude = data.lng;
        mapPoints.push(pt);
        var content = document.createElement('div');
        var strong = document.createElement('strong');

        strong.textContent = data.facilityName;
        facilityNameList.push(data.facilityName);
        content.appendChild(strong);
        content.appendChild(document.createElement('br'));
        content.appendChild(document.createElement('br'));

        var addressText = document.createElement('text');
        addressText.textContent = data.address;
        content.appendChild(addressText);
        content.appendChild(document.createElement('br'));
        var auText = document.createElement('text');
        auText.textContent = "Australia";
        content.appendChild(auText);

        var text = document.createElement('strong');
        content.appendChild(document.createElement('br'));
        content.appendChild(document.createElement('br'));
        text.textContent = "You can play " + data.sports + " here.";
        content.appendChild(text);
        content.appendChild(document.createElement('br'));
        var condition = data.condition;
        var conditionText = document.createElement('text');
        if (condition !== "") {
            conditionText.textContent = "Facility Condition: " + data.condition + "    (Rated between 1 to 5)";
            content.appendChild(conditionText);
            content.appendChild(document.createElement('br'));
        }
        descriptionList.push(content);
    });

    var count = mapPoints.length;

    for (var i = 0; i < count; i++) {
        var latlng = new google.maps.LatLng(mapPoints[i].latitude, mapPoints[i].longitude);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
            //icon: icon;
        });
        arrMarkers[i] = marker;
        var infoWind = new google.maps.InfoWindow;
        arrInfoWindows[i] = infoWind;
        marker.description = descriptionList[i];
        google.maps.event.addListener(marker, 'click', function () {
            map.setZoom(13); //zoom up
            infoWind.setContent(this.description); // show description
            infoWind.open(map, this);
            $('#hidden-lat-lng').innerHTML = JSON.stringify(mapPoints[i]); // record the lat and lng of the clicked marker
            var locationName  =JSON.stringify(facilityNameList[i]);
            alert(locationName);
            $('#location').value= locationName;

        });

        google.maps.event.addListener(marker, 'mouseover', function () {
            infoWind.setContent(this.description);
            infoWind.open(map, this);
        });

        google.maps.event.addListener(marker, 'mouseout', function () {
            infoWind.setContent(this.description);
            infoWind.close();
        });

        map.addListener('click', function (event) {
            this.setZoom(13);
        });
    }
}


/**
 * It centers the map according to clicked location on the sidebar list
 */
function gotoNode() {
    map.panTo({lat: JSON.parse(this.value).lat, lng: JSON.parse(this.value).lng});
    map.setZoom(15);
}

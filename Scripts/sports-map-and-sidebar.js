/**
 * It clears the inner html of the <div> containing the data returned from the server.
 */
function clearTemporaryDataReturnedFromServer(){
    $('#notFound').empty();
    // Validate to see if the suburb input is empty
    $('#displayLocations').empty();
}


/**
 *It search sports facilities from the server by activity and suburb,
 * and thn display on map.
 * @param allData: (form data) a String of suburb name and activity
 * @param urlStr: the url of the php server file that queries from the database
 */
function searchBySuburbAndActivityFromServer(allData, urlStr) {
    clearTemporaryDataReturnedFromServer();
    $.ajax({
        url: urlStr,
        type: "POST",
        data: allData,
        success: function (locData) { // Pop the location data on map
       // if data is empty, show feedback to the user
            if (locData === "") {
                $('#notFound').html("No result");
                searchActivityAtSuburbNearby(allData, urlStr);
            }

            $("#displayLocations").html(JSON.stringify(locData));
            showFacilitiesOnMap(locData);
        },
        error: function (jqxhr, status, exception) {
            $('#notFound').html("No result");
            searchActivityAtSuburbNearby(allData, urlStr);
            $('#displayLocations').empty();
        }
    });
}


/**
 * It takes in a sports activity, suburb name and the url of the php server file
 * and searches for the facilities 1 postcode next to the given suburb.
 * Display on map.
 * @param allData: (form data) String of sports activity and suburb name
 * @param urlStr: the url of the php server file
 * */
function searchActivityAtSuburbNearby(allData, urlStr) {
    clearTemporaryDataReturnedFromServer();
    $.ajax({
        url: urlStr,
        type: "POST",
        data: allData,
        success: function (locData) { // Pop the location data on map
            if (locData === "") { // if data is empty, show feedback to the user
                $('#notFound').html("We have not found any result.");
            }

            $("#displayLocations").html(JSON.stringify(locData));
            showFacilitiesOnMap(locData);
        },
        error: function (jqxhr, status, exception) {
            $('#notFound').html("We have not found any result.");
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
    // clear the sidebar
    var listgroup = document.getElementById('list-group');
    listgroup.innerHTML = "";

    //Push all lat lng into a list, and push the description into a list.
    Array.prototype.forEach.call(allData, function (data) {
        if (allData.indexOf(data) == 0) { // Set the center of the map to the first marker
            firstResult = {lat: data.lat, lng: data.lng};
            map.setCenter(firstResult);
        }
        var activityName = data.sports; // record sports activity
        activityName = activityName.toLowerCase();
        activtyList.push(activityName);

        var pt = {};
        pt.latitude = data.lat;
        pt.longitude = data.lng;
        mapPoints.push(pt);
        var content = document.createElement('div');
        var strong = document.createElement('strong');

        strong.textContent = data.facilityName;
        content.appendChild(strong);
        content.appendChild(document.createElement('br'));
        content.appendChild(document.createElement('br'));

        var addressText = document.createElement('text');
        addressText.textContent = data.address;
        content.appendChild(addressText);
        content.appendChild(document.createElement('br'));
        var auText = document.createElement('text');
        auText.textContent = "Australia"
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
        }
        if (condition === "") {
            conditionText.textContent = "Facility Condition: " + "Unknown";
        }
        content.appendChild(conditionText);
        content.appendChild(document.createElement('br'));
        descriptionList.push(content);

        // Add loction details to the side bar as well
        createSideBarList(data);
    });

    var count = mapPoints.length;

    for (var i = 0; i < count; i++) {
        var latlng = new google.maps.LatLng(mapPoints[i].latitude, mapPoints[i].longitude);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
        });
        arrMarkers[i] = marker;
        var infoWind = new google.maps.InfoWindow;
        arrInfoWindows[i] = infoWind;
        marker.description = descriptionList[i];
        google.maps.event.addListener(marker, 'click', function () {
            map.setZoom(13); //zoom up
            infoWind.setContent(this.description); // show description
            infoWind.open(map, this);
        });

        google.maps.event.addListener(marker, 'mouseover', function () {
            infoWind.setContent(this.description);
            infoWind.open(map, this);
        });

        map.addListener('click', function (event) {
            this.setZoom(13);
        });
    }
}

/**
 * It accepts a list of records returned by the server
 * and creates the sidebar list showing details of each marker on the map
 * @param data
 */
function createSideBarList(data) {
    //Creating HTML elements
    var listgroup = document.getElementById('list-group');
    //div item
    var listdiv = document.createElement('div');

    listdiv.id = '' + data.facilityName;
    listdiv.classList.add("animated", "visable");
    //list item
    var listitem = document.createElement('a');
    listitem.value = '{"lat":' + data.lat + ',"lng":' + data.lng + '}';
    listitem.onclick = gotoNode;


    listitem.id = '' + data.facilityName;
    listitem.classList.add("list-group-item");
    listitem.classList.add("list-group-item-action");
    listitem.classList.add("flex-column");
    listitem.classList.add("align-items-start");

    //list item header
    var listheader = document.createElement('div');
    listheader.classList.add("d-flex");
    listheader.classList.add("w-100");
    listheader.classList.add("justify-content-between");

    var icon = getSportsIcon(data.sports);
    if (icon === ""){
        icon = data.sports; // If the icon is not available, just show the sports activity name
    }
    listheader.innerHTML = '<h5 class="mb-1">' + data.facilityName + '</h5></a><small style="white-space:nowrap">';

    //list item main
    var listmain = document.createElement('p');
    listmain.classList.add("mb-1");
    listmain.innerHTML = 'Address: ' + data.address;
    var listActivity = document.createElement('p');
    listActivity.classList.add("mb-1");
    listActivity.innerHTML = '<h5 class="mb-1">' + icon+ '</h5><small style="white-space:nowrap">';

    listitem.appendChild(listheader);
    listitem.appendChild(listActivity);
    listitem.appendChild(listmain);
    listdiv.appendChild(listitem);
    listgroup.appendChild(listdiv);
}




/**
 * It centers the map according to clicked location on the sidebar list
 */
function gotoNode() {
    map.panTo({lat: JSON.parse(this.value).lat, lng: JSON.parse(this.value).lng});
    map.setZoom(15);
}

//TODO not working
function getSportsIcon(sportsPlayed) {
    let url = "";
    sportsPlayed = sportsPlayed.toLowerCase();
    switch (sportsPlayed) {
        case "ARF":
            url = "<i class=\"far fa-futbol\"></i>australian rules football";
            break;
        case "soccer":
            url = "<i class=\"far fa-futbol\"></i>soccer";
            break;
        case "badminton":
            url = "";
            break;
        case "baseball":
            url = "<i class=\"fas fa-baseball-ball\"></i>baseball";
            break;
        case "basketball":
            url = "<i class=\"fas fa-basketball-ball\"></i>basketball";
            break;
        case "cricket":
            url = "";
            break;
        case "cycling":
            url = "<i class=\"fas fa-bicycle\"></i>cycling";
            break;
        case "golf":
            url = "<i class=\"fas fa-golf-ball\"></i>golf";
            break;
        case "netball":
            url = "";
            break;
        //TODO check if gym has the right name
        case "gym":
            url = "<i class=\"fas fa-dumbbell\"></i>gym";
            break;
        //TODO finish icons
        default:
            url = "";
            break;
    }
    return url;
}





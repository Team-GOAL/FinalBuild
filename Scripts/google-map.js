var map;

function loadMap() {
    var center = {lat: -37.818078, lng: 144.96681};
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: center
    });

    var marker = new google.maps.Marker({
        position: center,
        map: map
    });

    var allData = JSON.parse(document.getElementById('displayLocations').innerHTML);
    showAllFacilities(allData)
}

function showAllFacilities(allData) {
    var infoWind = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData, function(data){
        var content = document.createElement('div');
        var strong = document.createElement('strong');

        var name = markerElem.getAttribute('name');
        // var address = markerElem.getAttribute('address');
        //  var type = markerElem.getAttribute('type');
        var sports = markerElem.getAttribute('sports');
        var condition = markerElem.getAttribute('condition');
        var point = new google.maps.LatLng(
            parseFloat(markerElem.getAttribute('lat')),
            parseFloat(markerElem.getAttribute('lng')));


        strong.textContent = name;
        content.appendChild(strong);
        content.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.textContent = "Sports played: " + sports;
        var conditionText = document.createElement('text');
        conditionText.textContent = "Sports played: " + condition;
        content.appendChild(text);
        var icon = customLabel[type] || {};
        var marker = new google.maps.Marker({
            map: map,
            position: point,
            label: icon.label
        });

        marker.addListener('mouseover', function(){
            infoWind.setContent(content);
            infoWind.open(map, marker);
        })
    })
}


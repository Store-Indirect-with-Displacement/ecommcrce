/*=========================================================================================
 File Name: maps.js
 Description: google maps
 ----------------------------------------------------------------------------------------
 Item name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
 Author: PIXINVENT
 Author URL: http://www.themeforest.net/user/pixinvent
 ==========================================================================================*/

// Gmaps Maps
// ------------------------------

$(window).on("load", function () {


    var autocompletes = [];
    var geoCoder = new google.maps.Geocoder();
    const Locationsearch =  document.getElementsByClassName("map-input");
    var Location = $("#gmaps-basic-maps").find("#checkout-Location");
    var Latitude = $("#gmaps-basic-maps").find("#checkout-Latitude");
    var Longitude = $("#gmaps-basic-maps").find("#checkout-Longitude");
    var geocoder = new google.maps.Geocoder;
    for (var i = 0; i < Locationsearch.length; i++) {
        var input = Locationsearch[i];
        var isEdit = Latitude != '' && Longitude != '';
        var lat = parseFloat(Latitude.val()) || 30.033333;
        var lng = parseFloat(Longitude.val()) || 31.233334;
        var map = new google.maps.Map(document.getElementById('info-window'), {
            center: {lat: lat, lng: lng},
            zoom: 9,

            mapTypeControl: true,
            styles: [
                {elementType: "geometry", stylers: [{color: "#242f3e"}]},
                {elementType: "labels.text.stroke", stylers: [{color: "#242f3e"}]},
                {elementType: "labels.text.fill", stylers: [{color: "#746855"}]},
                {
                    featureType: "administrative.locality",
                    elementType: "labels.text.fill",
                    stylers: [{color: "#d59563"}]
                },
                {
                    featureType: "poi",
                    elementType: "labels.text.fill",
                    stylers: [{color: "#d59563"}]
                },
                {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{color: "#263c3f"}]
                },
                {
                    featureType: "poi.park",
                    elementType: "labels.text.fill",
                    stylers: [{color: "#6b9a76"}]
                },
                {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [{color: "#38414e"}]
                },
                {
                    featureType: "road",
                    elementType: "geometry.stroke",
                    stylers: [{color: "#212a37"}]
                },
                {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [{color: "#9ca5b3"}]
                },
                {
                    featureType: "road.highway",
                    elementType: "geometry",
                    stylers: [{color: "#746855"}]
                },
                {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{color: "#1f2835"}]
                },
                {
                    featureType: "road.highway",
                    elementType: "labels.text.fill",
                    stylers: [{color: "#f3d19c"}]
                },
                {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [{color: "#2f3948"}]
                },
                {
                    featureType: "transit.station",
                    elementType: "labels.text.fill",
                    stylers: [{color: "#d59563"}]
                },
                {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{color: "#17263c"}]
                },
                {
                    featureType: "water",
                    elementType: "labels.text.fill",
                    stylers: [{color: "#515c6d"}]
                },
                {
                    featureType: "water",
                    elementType: "labels.text.stroke",
                    stylers: [{color: "#17263c"}]
                }
            ],
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                mapTypeIds: ['roadmap', 'satellite']

            }
        });
        var marker = new google.maps.Marker({
            map: map,
            position: {lat: lat, lng: lng}
        });
        marker.setVisible(isEdit);
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.key = 'checkout';
        autocompletes.push(
                {
                    input: input,
                    map: map,
                    marker: marker,
                    autocomplete: autocomplete
                });
    }
    for (var i = 0; i < autocompletes.length; i++) {
        var input = autocompletes[i].input;
        var map = autocompletes[i].map;
        var marker = autocompletes[i].marker;
        var autocomplete = autocompletes[i].autocomplete;
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            geoCoder.geocode({'placeId': place.place_id}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    var lat = results[0].geometry.location.lat();
                    var lng = results[0].geometry.location.lng();
                    setLocationCoordinates(autocomplete.key, lat, lng,location);

                }
            });
            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                input.value = "";
                return;
            }
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);

            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
        });

    }
    function setLocationCoordinates(key, lat, lng,location) {
           Latitude.val(lat);
           Longitude.val(lng);
           Location.val(location);
    }








});




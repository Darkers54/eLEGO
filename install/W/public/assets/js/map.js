function initMap(Lat, Lon) {
     
    var latLng = new google.maps.LatLng(Lat,Lon );
    var myOptions = {

        zoom : 15,
        center : latLng,

    }

    var myMap = new google.maps.Map(document.getElementById('map'), myOptions);
    
    var marker = new google.maps.Marker({
        position: latLng,
        map:myMap,
    });
}

jQuery(function($){
"use strict";

var pasta = window.pasta || {};

//  MAIN FUNCTION // -------------------

pasta.mainFunction = function(){

/*Google map*/
var myLatLng = {lat: 52.030763, lng: 113.484524};
var markerLatLng = {lat: 52.030763, lng: 113.484524};
var customMapType = new google.maps.StyledMapType(

{
name: 'Custom Style'
});
var customMapTypeId = 'custom_style';

var mapProp = {
center: myLatLng,
zoom:17,
mapTypeId:google.maps.MapTypeId.ROADMAP,
scrollwheel: false,
draggable: true,
disableDefaultUI: true,
mapTypeControlOptions: {
mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
}
};
function initialize() {
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
map.mapTypes.set(customMapTypeId, customMapType);
map.setMapTypeId(customMapTypeId);
var image = {
url: 'images/icon-location.png',
// size: new google.maps.Size(60, 60),
origin: new google.maps.Point(0, 0),
anchor: new google.maps.Point(17, 34),
scaledSize: new google.maps.Size(50, 75)
};
var marker = new google.maps.Marker({
position: markerLatLng,
map: map,
// animation:google.maps.Animation.BOUNCE,
icon: image,
title: 'ЗабИнгредиент'
});

}
google.maps.event.addDomListener(window, 'load', initialize);

};

// INIT FUNCTIONS //--------------------------

$(document).ready(function(){
pasta.mainFunction();
});

//   End of INIT FUNCTIONS  //
});

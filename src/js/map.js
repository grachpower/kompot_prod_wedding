var mymap;
var myLatLng = {lat: 53.1890079, lng: 45.0153458};
function initMap() {
  mymap = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 17
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: mymap,
    title: "KOMПOT Wedding"
  });

  var contentString = '<div id="marker-description">'+
  '<h4 class="title marker__title">KOMПOT Wedding</h4>'+
  '<div id="marker-description__content">'+
  '<span>г. Пенза, ул. Московская, 29</span>'+
  '</div>'+
  '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  infowindow.open(map,marker);

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

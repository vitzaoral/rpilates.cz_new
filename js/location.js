// The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.

function initMap() {
  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 17,
    scrollwheel: false,
    center: {
      lat: 49.6567131,
      lng: 17.2746936
    }
  });

  setMarkers(map);
}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
var beaches = [

  ['Lhotka 629, Bohuňovice, 783 14', 49.6567131, 17.2746936, 4, 'marker-pin.png']

];

function setMarkers(map) {
  // Adds markers to the map.

  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.

  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.

  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: 'poly'
  };
  for (var i = 0; i < beaches.length; i++) {
    var beach = beaches[i];
    var image = {
      url: 'pictures/' + beach[4],

      // This marker is 20 pixels wide by 32 pixels high.
      size: new google.maps.Size(32, 49),
      // The origin for this image is (0, 0).
      origin: new google.maps.Point(0, 0),
      // The anchor for this image is the base of the flagpole at (0, 32).
      anchor: new google.maps.Point(0, 49)
    };
    var marker = new google.maps.Marker({
      position: {
        lat: beach[1],
        lng: beach[2]
      },
      map: map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3]
    });
    var content = "<h4>Rpilates.cz</h4> " + beach[0];
    var infowindow = new google.maps.InfoWindow()
    google.maps.event.addListener(marker, 'mouseover', (function (marker, content, infowindow) {
      return function () {
        infowindow.setContent(content);
        infowindow.open(map, marker);
      };
    })(marker, content, infowindow));


  }
}
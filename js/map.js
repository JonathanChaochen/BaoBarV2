function initMap() {
  var baobar = {lat: -43.529855, lng: 172.600098};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: baobar
  });
  var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h4 id="firstHeading" class="firstHeading">BaoBar</h4>'+
              '<div id="bodyContent">'+
              '<p><b>111a Riccarton Road, Christchurch</b></p>'+
              '</div>'+
              '</div>';

          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });

          var marker = new google.maps.Marker({
            position: baobar,
            map: map,
            title: 'Uluru (Ayers Rock)'
          });
          // marker.addListener('click', function() {
            infowindow.open(map, marker);
          // });
        }






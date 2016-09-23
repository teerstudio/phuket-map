<!DOCTYPE html>
<html>
  <head>
    <title>Phuket Map - Touch</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        // map = new google.maps.Map(document.getElementById('map'), {
        //   center: {lat: -34.397, lng: 150.644},
        //   zoom: 8
        // });


        //var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap',
            //mapTypeId: 'satellite'
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map"), mapOptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = [

['	37 Thalang Guest House	',	7.8849301	,	98.388254	], // Oldtown
['	43 Guesthouse	',	7.8849301	,	98.3885146	], // Oldtown
['	99 Oldtown Boutique Guesthouse	',	7.8848371	,	98.3896841	], // Oldtown
['	A dessert moments	',	7.884806	,	98.387706	], // Oldtown
['	Ai Phuket Hostel	',	7.885935	,	98.387764	], // Oldtown
['	Fulfill Hostel Phuket	',	7.883078	,	98.390205	], // Oldtown
['	Gallery Cafe	',	7.883879	,	98.387324	], // Oldtown
['	Kopi De Phuket	',	7.882323	,	98.391246	], // Oldtown
['	Pancake Corner	',	7.883002	,	98.390721	], // Oldtown
['	Sino Imperial Phuket	',	7.882621	,	98.391143	], // Oldtown
['	The Rommanee Classic Guesthouse	',	7.884958	,	98.38737	], // Oldtown
['	Unforgettable	',	7.88355	,	98.387486	], // Oldtown
['	Kopitiam	',	7.884752	,	98.388092	], // Oldtown
['	Tom Yum Kung Restaurant	',	7.812637	,	98.298554	], // Oldtown
['	Taitong Café	',	7.884746	,	98.388245	], // Oldtown
['	Tukabkhao	',	7.883679	,	98.387952	], // Oldtown
['	Phu Thalang Shop 	',	7.884931	,	98.388254	], // Oldtown
['	Go Tum	',	7.88469	,	98.3887	], // Oldtown
['	Club No.43	',	7.884366	,	98.387383	], // Oldtown
['	Glass House Restaurant	',	7.886475	,	98.393309	], // Oldtown
['	The Tint @ Phuket Town	',	7.886691	,	98.392281	], // Oldtown
['	AMA Phuket Hostel	',	7.884793	,	98.392856	], // Oldtown
['	The Memory at On On	',	7.884008	,	98.388488	], // Oldtown
['	Macchiato House	',	7.88476	,	98.388069	], // Oldtown
['	Coffs & Burgh	',	7.884692	,	98.389667	], // Oldtown

['	Baan Laimai Beach Resort	',	7.889843, 	,	98.293153	], // Patong
['	Eurasian Restaurant	',	7.893395, 	,	98.296639	], // Patong
['	Heaven Spa & Massage	',	7.893146, 	,	98.298049	], // Patong
['	Koolbackpacker Hostel	',	7.893413, 	,	98.298028	], // Patong
['	Patong Backpacker	',	7.894805, 	,	98.295777	], // Patong
['	Patong Beach Club	',	7.89253	,	98.294521	], // Patong
['	Patong Boutique Hotel	',	7.893331	,	98.294886	], // Patong
['	Red Hot club	',	7.89308	,	98.2983	], // Patong
['	Relaxing Massage	',	7.89298	,	98.297	], // Patong
['	Sabai Sabai Restaurant Patong	',	7.891593	,	98.294109	], // Patong
['	Savoey Restaurant	',	7.894465	,	98.295714	], // Patong
['	R-Mar Resort and Spa	',	7.895477	,	98.297893	], // Patong
['	The Royal Plam Beach	',	7.88949	,	98.2929	], // Patong
['	Royal Baan Kamnan Restaurant	',	7.894812	,	98.296426	], // Patong
['	Pimnara Spa	',	7.8913569	,	98.2948953	], // Patong
['	Ella Bar Bistro Bed	',	7.891408,	,	98.294875	], // Patong
['	Elephantgod Tattooart	',	7.89149	,	98.2942	], // Patong
['	Orange Restaurant	',	7.8962262	,	98.298225	], // Patong
['	The Orchids	',	7.8900239	,	98.294329	], // Patong
['	The Sweet Restaurant	',	7.891611	,	98.294953	], // Patong
['	Passorn Massage	',	7.895222	,	98.295986	], // Patong
['	Siam Healthland Phuket	',	7.89018	,	98.2933	], // Patong
['	Tiras Patong Beach Phuket	',	7.890438	,	98.293942	], // Patong
['	Patong Rose Guest House	',	7.890158	,	98.294093	], // Patong
['	Andaman Embrace Patong	',	7.898991	,	98.29896	], // Patong


        ];

        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;

        // Loop through our array of markers & place each one on the map
        for( i = 0; i < markers.length; i++ ) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                //icon: 'http://www.seeitlivethailand.com/assets/image/promote/phuket/marker_hotel.png',
                //icon: './pin.png',
                title: markers[i][0],
                map: map
            });

            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(markers[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)

        // var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        //     this.setZoom(14);
        //     google.maps.event.removeListener(boundsListener);
        // });


      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrbrksK8e9n6S6OS51EDMZCM-CNOkIfBQ&language=th&region=TH&sensor=false&callback=initMap"
    async defer></script>
  </body>
</html>

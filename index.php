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

['	37 Thalang Guest House	',	7.88477	,	98.3883	], // Oldtown
['	43 Guesthouse	',	7.88412	,	98.3895	], // Oldtown
['	99 Oldtown Boutique Guesthouse	',	7.88477	,	98.3897	], // Oldtown
['	A dessert moments	',	7.88486	,	98.3876	], // Oldtown
['	Ai Phuket Hostel	',	7.88585	,	98.3876	], // Oldtown
['	Fulfill Hostel Phuket	',	7.883	,	98.39	], // Oldtown
['	Gallery Cafe	',	7.884094	,	98.3875	], // Oldtown
['	Kopi De Phuket	',	7.882331	,	98.391247	], // Oldtown
['	Pancake Corner	',	7.88412	,	98.3895	], // Oldtown
['	Sino Imperial Phuket	',	7.882632	,	98.391199	], // Oldtown
['	The Rommanee Classic Guesthouse	',	7.88504	,	98.3892	], // Oldtown
['	Unforgettable	',	7.88352	,	98.3874	], // Oldtown
['	Kopitiam	',	7.88474	,	98.3874	], // Oldtown
['	Tom Yum Kung Restaurant	',	7.8837	,	98.3879	], // Oldtown
['	Taitong Café	',	7.88477	,	98.3889	], // Oldtown
['	Tukabkhao	',	7.88451	,	98.3867	], // Oldtown
['	Phu Thalang Shop 	',	7.884869	,	98.38762	], // Oldtown
['	Go Tum	',	7.88469	,	98.3887	], // Oldtown
['	Club No.43	',	7.88451	,	98.3867	], // Oldtown
['	Glass House Restaurant	',	7.88544	,	98.3912	], // Oldtown
['	The Tint @ Phuket Town	',	7.88661	,	98.3924	], // Oldtown
['	AMA Phuket Hostel	',	7.88544	,	98.3912	], // Oldtown
['	The Memory at On On	',	7.88546	,	98.3902	], // Oldtown
['	Macchiato House	',	7.8847584	,	98.3858809	], // Oldtown
['	Coffs & Burgh	',	7.88546	,	98.3902	], // Oldtown

['	Baan Laimai Beach Resort	',	7.88979	,	98.2931	], // Patong
['	Eurasian Restaurant	',	7.89307	,	98.2957	], // Patong
['	Heaven Spa & Massage	',	7.89331	,	98.2979	], // Patong
['	Koolbackpacker Hostel	',	7.8934	,	98.2975	], // Patong
['	Patong Backpacker	',	7.89496	,	98.2958	], // Patong
['	Patong Beach Club	',	7.89253	,	98.2946	], // Patong
['	Patong Boutique Hotel	',	7.8933	,	98.295	], // Patong
['	Red Hot club	',	7.89308	,	98.2983	], // Patong
['	Relaxing Massage	',	7.89298	,	98.297	], // Patong
['	Sabai Sabai Restaurant Patong	',	7.891593	,	98.294109	], // Patong
['	Savoey Restaurant	',	7.89406	,	98.2953	], // Patong
['	R-Mar Resort and Spa	',	7.896244	,	98.298663	], // Patong
['	The Royal Plam Beach	',	7.88949	,	98.2929	], // Patong
['	Royal Baan Kamnan Restaurant	',	7.894836	,	98.295772	], // Patong
['	Pimnara Spa	',	7.89287	,	98.2947	], // Patong
['	Elle Bar Bistro Bed	',	7.89041	,	98.294	], // Patong
['	Elephantgod Tattooart	',	7.89149	,	98.2942	], // Patong
['	Orange Restaurant	',	7.89857	,	98.2976	], // Patong
['	The Orchids	',	7.890024	,	98.2921405	], // Patong
['	The Sweet Restaurant	',	7.89161	,	98.2948	], // Patong
['	Passorn Massage	',	7.8954	,	98.2962	], // Patong
['	Siam Healthland Phuket	',	7.89018	,	98.2933	], // Patong
['	Tiras Patong Beach Phuket	',	7.8933	,	98.295	], // Patong
['	Patong Rose Guest House	',	7.89016	,	98.294	], // Patong
['	Andaman Embrace Patong	',	7.90013	,	98.2967	] // Patong


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

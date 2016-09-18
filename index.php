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



          ['	The Rommanee Classic Guesthouse	',	7.885040	,	98.389200	],
          ['	House	',	7.884870	,	98.387500	],
          ['	NA SIAM Guesthouse	',	7.885870	,	98.387400	],
          ['	Fulfill Hostel Phuket	',	7.883000	,	98.390000	],
          ['	Sino Imperial Phuket	',	7.882632	,	98.391199	],
          ['	Ai Phuket Hostel	',	7.885850	,	98.387600	],
          ['	Chino Cafe Gallery	',	7.884800	,	98.387700	],
          ['	A dessert moments	',	7.884790	,	98.387800	],
          ['	Gallery Cafe	',	7.884090	,	98.387500	],
          ['	Casa Blanca	',	7.883960	,	98.390800	],
          ['	Unforgettable	',	7.883560	,	98.387400	],
          ['	Pancarke Corner	',	7.883010	,	98.390700	],
          ['	KOPI de Phuket	',	7.882331,98.391247	],//7.882331,98.391247
          ['	ร้านเสวนา	',	7.884590	,	98.390700	],
          ['	99 oldtown Butique Guesthouse	',	7.884808	,	98.389778	],
          //['	Macchiato House and CakeBox	',	7.8847584, 98.3880696 ],
          //['	The On On Hotel Phuket	',	7.883890	,	98.388591	],
          ['	37 Thalang Guesthouse	',	7.884770	,	98.388300	],
          ['	ร้านภูถลาง	',	7.884869	,	98.38762	],
          ['	ร้านใต่ตง คาเฟ่	',	7.884770	,	98.388900	],
          ['	Chino Town Gallery and Chino Gallery Guesthouse	', 7.885907,98.38671	],
          ['	ร้านตู้กับข้าว	',	7.8836777, 98.3879619	], // : 7.8836777,98.3879619
          ['	Mame Homemadecake	',	7.883672, 98.390484	], // 7.883672,98.390484
          ['	Eleven and Co	',	7.884610	,	98.390000	],
          ['	43 Guesthouse	',	7.8849212, 98.3882447	],
          ['	โกปี๊เตี๊ยม	',	7.88477,98.388	],//7.8839291,98.3827489
          ['	ต้มยำกุ้ง	',	7.883700	,	98.387900	],
          ['	Tiras Patong Beach	',	7.890540	,	98.294000	],
          ['	Molly Malones Irish Pub	',	7.891180	,	98.293900	],
          ['	RED HOT CLUB	',	7.893350	,	98.298200	], // 7.8930849,98.2982203
          ['	Relaxing Massage	',	7.8933510,98.2980980	],//7.8933510,98.2980980
          ['	Eurasian Restaurang	',	7.893450	,	98.296800	],
          ['	Double \'s Bar	',	7.893360	,	98.297900	],
          ['	The Royal Plam Beach	',	7.889766	,	98.292972	],
          ['	The Charm Resort	',	7.904125	,	98.298446	],
          ['	ร้านเสวย	',	7.894060	,	98.295300	],
          ['	Pimnara Spa	',	7.892800	,	98.294600	],
          ['	Patong Beach Club	',	7.892530	,	98.294600	],
          ['	Haven Spa & Massage	',	7.893310	,	98.297900	],
          ['	Patong Boutique Hotel	',	7.893920	,	98.295100	],
          ['	Baan Lai Mai Patongbeach Resort	',	7.889790	,	98.293100	],
          ['	Paradise Bar	',	7.89339,98.2974	],
          ['	Laflora Patong	',	7.895696	,	98.296077	],
          ['	โรงแรมโทรปิก้า	',	7.893868	,	98.295312	],
          ['	หจก.จินตนา และบุษส์ R-mars	',	7.896244	,	98.298663	],
          ['	ANdaman Embrace Patong	',	7.898981	,	98.298949	],
          ['	Aussie Bar	',	7.893758	,	98.296160	],
          ['	Patong Backpacker	',	7.894826	,	98.295740	],
          ['	Koolbackpacker Hostel	',	7.893417	,	98.298027	],
          ['	The Sweet Restaurant	',	7.891830	,	98.295397	],
          ['	Sabai Sabai Restaurant Patong	',	7.891593	,	98.294109	],
          ['	Bann Pron Phateep	',	7.898894	,	98.297302	],

          ['	Andara Resort and Villas	',	7.949092	,	98.275243	],
          //['	Amata Resort	',	7.887103	,	98.294353	],
          ['	The Senses Resort	',	7.88841	,	98.30428	],
          ['	โรงแรมภูเก็ต เกรซแลนด์ รีสอร์ทแอนด์สปา	',	7.886196	,	98.279401	],
          ['	Phuket Fish Market Restaurant	',	7.839541	,	98.366826	],
          ['	Baan Yin Dee Boutique Resort	',	7.984331	,	98.3307	],
          ['	บริษัท อนุภาษมอเตอร์เซลล์	',	7.919261	,	98.369773	],
          ['	โรงแรมป่าตองล็อจ	',	7.910216	,	98.296963	],
          //['	The Lantern Resort Patong	',	7.892649	,	98.300213	],
          ['	โรงแรมบ้านยุรี รีสอร์ท แอนด์ สปา	',	7.878483	,	98.294278	],
          //['	โรงแรมโทนี่ รีสอร์ท	',	7.88989	,	98.295745	],
          ['	บริษัท ทัวร์บาย ยู จำกัด	',	7.952137	,	98.389556	],
          ['	โรงแรมถาวรบีช วิลเลจรีสอร์ท	',	7.926197	,	98.273284	],
          //['	PIC Phuket	',	7.8879805	,	98.2957126	],
          //['	The nap	',	7.899861	,	98.298936	],
          ['	Sino House Phuket Hotel	',	7.886652	,	98.393455	],
          ['	Sino In	',	7.888036	,	98.380602	]
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

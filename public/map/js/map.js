//intialize the map
function initialize() {
  var mapOptions = {
    zoom: 8,
    scrollwheel: true,
    center: new google.maps.LatLng(11.565760, 104.923534)
  };

var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);


// MARKERS
/****************************************************************/

    //add a marker1 Master Suki Soup Bak Touk
    var marker1 = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker2 Master Suki Soup Sothearos
    var marker2 = new google.maps.Marker({
        position: new google.maps.LatLng(11.559858, 104.933255),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker3 Master Suki Soup TK Avenue
    var marker3 = new google.maps.Marker({
        position: new google.maps.LatLng(11.583552, 104.899428),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker4 Master Suki Soup Aeon Mall
    var marker4 = new google.maps.Marker({
        position: new google.maps.LatLng(11.547747, 104.933310),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker5 Master Suki Soup Sovanna
    var marker5 = new google.maps.Marker({
        position: new google.maps.LatLng(11.545303, 104.900981),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker6 Master Suki Soup Sorya
    var marker6 = new google.maps.Marker({
        position: new google.maps.LatLng(11.567930, 104.921064),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker7 Master Suki Soup Ratana Plaza
    var marker7 = new google.maps.Marker({
        position: new google.maps.LatLng(11.561506, 104.872335),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker8 Master Suki Soup Chroychangva
    var marker8 = new google.maps.Marker({
            position: new google.maps.LatLng(11.54601, 104.9220),
            map: map,
            icon: 'map/master/42x42soup.png'
        });
    //add a marker9 Master Suki Soup Sihanouk
    var marker9 = new google.maps.Marker({
        position: new google.maps.LatLng(10.611163, 103.523303),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker10 Master Suki Soup  Siem Reap
    var marker10 = new google.maps.Marker({
        position: new google.maps.LatLng(11.56662, 104.8973),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker11 Master Gold Monivong
    var marker11 = new google.maps.Marker({
        position: new google.maps.LatLng(11.545938, 104.922021),
        map: map,
        icon: 'map/master/42x42gold.png'
    });
    //add a marker12 Master Suki Soup  Bokor
    var marker12 = new google.maps.Marker({
        position: new google.maps.LatLng(11.544196, 104.921468),
        map: map,
        icon: 'map/master/42x42soup.png'
    });
    //add a marker13 Master Suki Soup  Superstore
    var marker13 = new google.maps.Marker({
        position: new google.maps.LatLng(11.54337, 104.8726),
        map: map,
        icon: 'map/master/42x42soup.png'
    });

    //add a marker14 Master Gold  Sonthormok
    var marker14 = new google.maps.Marker({
        position: new google.maps.LatLng(11.56654, 104.8973),
        map: map,
        icon: 'map/master/42x42gold.png'
    });
    //add a marker15 Sakura Buffet Bbq & Soup Sorya Mall (6F)
    var marker15 = new google.maps.Marker({
        position: new google.maps.LatLng(11.56800, 104.9211),
        map: map,
        icon: 'map/master/42x42sakura.png'
    });
    //add a marker16 Sakura Buffet Bbq & Soup Rattana Plaza (3F)
    var marker16 = new google.maps.Marker({
        position: new google.maps.LatLng(11.56151, 104.8723),
        map: map,
        icon: 'map/master/42x42sakura.png'
    });
    //add a marker17 Sakura Buffet Bbq & Soup Sovanna (3F)
    var marker17 = new google.maps.Marker({
        position: new google.maps.LatLng(11.54566, 104.9009),
        map: map,
        icon: 'map/master/42x42sakura.png'
    });
    //add a marker18 Munich Fresh Beer Sothearos
    var marker18 = new google.maps.Marker({
        position: new google.maps.LatLng(11.55999, 104.9334),
        map: map,
        icon: 'map/master/42x42munich.png'
    });
    //add a marker19 Munich Fresh Beer Aeon mall GF
    var marker19 = new google.maps.Marker({
        position: new google.maps.LatLng(11.54816, 104.9328),
        map: map,
        icon: 'map/master/42x42munich.png'
    });
    //add a marker20 The Ming Room Aeon mall (2F)
    var marker20 = new google.maps.Marker({
        position: new google.maps.LatLng(11.54819, 104.9327),
        map: map,
        icon: 'map/master/42x42munich.png'
    });
    //add a marker21 The Ming Palace Monivong
    var marker21 = new google.maps.Marker({
        position: new google.maps.LatLng(11.54575, 104.9221),
        map: map,
        icon: 'map/master/42x42mingroom.png'
    });
    //add a marker22 Chill Pub GF
    var marker22 = new google.maps.Marker({
        position: new google.maps.LatLng(11.54802, 104.9323),
        map: map,
        icon: 'map/master/42x42chill.png'
    });
    //add a marker23 Master Grill Sorya (5F)
    var marker23 = new google.maps.Marker({
        position: new google.maps.LatLng(11.56793, 104.9211),
        map: map,
        icon: 'map/master/42x42grill.png'
    });
    //add a marker24 Master Grill Sovanna (3F)
    var marker24 = new google.maps.Marker({
        position: new google.maps.LatLng(11.54545, 104.9012),
        map: map,
        icon: 'map/master/42x42grill.png'
    });
    //add a marker25 Master Grill Rattana Plaza 3F
    var marker25 = new google.maps.Marker({
        position: new google.maps.LatLng(11.56161, 104.8723),
        map: map,
        icon: 'map/master/42x42grill.png'
    });
    // INFO BOXES
    /****************************************************************/

    //show info box for marker1
    var contentString1 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Bak Touk</h5>' +
        '<p>Address Line: Nº 172, St.169, Sangkat Veal Vong, Khan 7Makara, Phnom Penh.</p>' +
        '<p>Landmark: Near Bak Tuk High School</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 588885 / 089 99 88 62</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString2 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Sothearos</h5>' +
        '<p>Address Line: St Sotearos, Sangkat Phsar Thmey 2, Khan Doun Penh, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Botom Votey Pagoda</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 988886/ 089 99 88 60</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString3 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup TK Avenue</h5>' +
        '<p>Address Line: St 315, Sangkat Boeung Kak 1,Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: TK Avenue Mall</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 988 882 / 089 998 812</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString4 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Aeon Mall (3F)</h5>' +
        '<p>Address Line: St Sothearos, Sangkat Tonle Basak, Khan chamkarmon, Phnom Penh.</p>' +
        '<p>Landmark: Aeon Mall(Cambodia) Co.,Ltd </p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 788 885 / 089 788 883</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString5 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Sovanna (4F)</h5>' +
        '<p>Address Line: Nº B87-B89-B91, St.199, Sangkat Tumnob Tuek,Khan Chamkarmon, Phnom Penh.</p>' +
        '<p>Landmark: Sovanna Shopping Center 4th Floor </p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 988 882 / 089 998 850</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString6 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Sorya  (6-8F)</h5>' +
        '<p>Address Line: Nº 11-13, St.63, Sangkat Phsar Thmey 2, Khan Doun Penh, Phnom Penh.</p>' +
        '<p>Landmark: Sorya Shopping Center 6th- 7th Floor</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 588 887 / 089 998 830</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString7 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Ratana Plaza (3F)</h5>' +
        '<p>Address Line: St Confederation de Russie (110), sangkat teuk thla, Khan Sensok, Phnom Penh.</p>' +
        '<p>Landmark: Ratana Plazza Shopping Center 3th Floor</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 988883 / 089 99 88 35</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString8 = '<div class="info-box">' +
        '<img src="map/master/256x256sakura.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Sakura Buffet Bbq & Soup Monivong</h5>' +
        '<p>Address Line: St Preah Monivong Blvd (93), Sangkat boeung keng kang 3,Khan Chamkarmon, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Hospital Maliya</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 089 88 11 15</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString9 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Sihanouk</h5>' +
        '<p>Address Line: St 2 Thnou, Sangkat 4, Sihanoukville</p>' +
        '<p>Landmark: Behind Golden Lion Traffic Circle</p>' +
        '<p>City: Sihanoukville</p>' +
        '<p>Phone Number: 081 288889 / 089 99 88 53</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString10 = '<div class="info-box">' +
        '<img src="map/master/256x256sakura.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Sakura Buffet Bbq & Soup Sonthormok</h5>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 533339 / 092 311117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString11 = '<div class="info-box">' +
        '<img src="map/master/256x256gold.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Gold Monivong </h5>' +
        '<p>Address Line: St Preah Monivong Blvd (93), Sangkat boeung keng kang 3,Khan Chamkarmon, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Hospital Maliya</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 098 211118 / 089 88 11 17</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString12 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Bokor</h5>' +
        '<p>Address Line: Nº St.245, sangkat boeung keng kang 3, Khan Chamkarmon, Phnom Penh.</p>' +
        '<p>Landmark: Near Scooter Borkor </p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 588889 / 089 99 88 52</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString13 = '<div class="info-box">' +
        '<img src="map/master/256x256soup.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Suki Soup Superstore</h5>' +
        '<p>Address Line: Trung Morn St, Phnom Penh.</p>' +
        '<p>Landmark: Behind North Bridge International School </p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 955552 / 089 889927</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString14 = '<div class="info-box">' +
        '<img src="map/master/256x256gold.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Gold Sonthormok</h5>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211 117 / 092 211 117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';


    var contentString15 = '<div class="info-box">' +
        '<img src="map/master/256x256sakura.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Sakura Buffet Bbq & Soup Sorya Mall (6F)</h5>' +
        '<p>Address Line: Nº 11-13, St.63, Sangkat Phsar Thmey 2, Khan Doun Penh, Phnom Penh.</p>' +
        '<p>Landmark: Sorya Shopping Center 6th- 7th Floor</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 098-711116</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';

    var contentString16 = '<div class="info-box">' +
        '<img src="map/master/256x256sakura.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Sakura Buffet Bbq & Soup Rattana Plaza (3F)</h5>' +
        '<p>Address Line: St Confederation de  Russie (110), sangkat teuk thla, Khan Sensok, Phnom Penh.</p>' +
        '<p>Landmark: Ratana Plazza Shopping Center 3th Floor</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 095-671111</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString17 = '<div class="info-box">' +
        '<img src="map/master/256x256sakura.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Sakura Buffet Bbq & Soup Sovanna (3F)</h5>' +
        '<p>Address Line: Nº B87-B89-B91, St.199, Sangkat Tumnob Tuek,Khan Chamkarmon, Phnom Penh.</p>' +
        '<p>Landmark: Sovanna Shopping Center 4th Floor </p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 588883 / 089 998850</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';


    var contentString18 = '<div class="info-box">' +
        '<img src="map/master/256x256munich.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Munich Fresh Beer Sothearos</h5>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString19 = '<div class="info-box">' +
        '<img src="map/master/256x256munich.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Munich Fresh Beer Aeon mall GF</h5>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString20 = '<div class="info-box">' +
        '<img src="map/master/256x256mingroom.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h4>The Ming Room Aeon mall (2F)</h4>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString21 = '<div class="info-box">' +
        '<img src="map/master/256x256mingroom.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>The Ming Palace Monivong</h5>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';

    var contentString22 = '<div class="info-box">' +
        '<img src="map/master/256x256chill.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h4>Chill Pub GF</h4>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';

    var contentString23 = '<div class="info-box">' +
        '<img src="map/master/256x256grill.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h4>Master Grill Sorya (5F)</h4>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';

    var contentString24 = '<div class="info-box">' +
        '<img src="map/master/256x256grill.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Grill Sovanna (3F)</h5>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';
    var contentString25 = '<div class="info-box">' +
        '<img src="map/master/256x256grill.png" class="info-box-img no-repeat scroll 0 0" alt="" />' +
        '<h5>Master Grill Rattana Plaza 3F</h5>' +
        '<p>Address Line: St Kampuchea Krom Blvd (128),Sangkat Tumnob Tuek 2, Khan Tuol Kouk, Phnom Penh.</p>' +
        '<p>Landmark: Opposite Australian Center For Education (ACE) Sonthormok</p>' +
        '<p>City: Phnom Penh</p>' +
        '<p>Phone Number: 081 211117 / 092 211117</p>' +
        '<a href="about" class="button small">View Details</a>' +
        '<br/>' +
        '</div>';

    var infowindow1 = new google.maps.InfoWindow({ content: contentString1 });
    var infowindow2 = new google.maps.InfoWindow({ content: contentString2 });
    var infowindow3 = new google.maps.InfoWindow({ content: contentString3 });
    var infowindow4 = new google.maps.InfoWindow({ content: contentString4 });
    var infowindow5 = new google.maps.InfoWindow({ content: contentString5 });
    var infowindow6 = new google.maps.InfoWindow({ content: contentString6 });
    var infowindow7 = new google.maps.InfoWindow({ content: contentString7 });
    var infowindow8 = new google.maps.InfoWindow({ content: contentString8 });
    var infowindow9 = new google.maps.InfoWindow({ content: contentString9 });
    var infowindow10 = new google.maps.InfoWindow({ content: contentString10 });
    var infowindow11 = new google.maps.InfoWindow({ content: contentString11 });
    var infowindow12 = new google.maps.InfoWindow({ content: contentString12 });
    var infowindow13 = new google.maps.InfoWindow({ content: contentString13 });
    var infowindow14 = new google.maps.InfoWindow({ content: contentString14 });
    var infowindow15 = new google.maps.InfoWindow({ content: contentString15 });
    var infowindow16 = new google.maps.InfoWindow({ content: contentString16 });
    var infowindow17 = new google.maps.InfoWindow({ content: contentString17 });
    var infowindow18 = new google.maps.InfoWindow({ content: contentString18 });
    var infowindow19 = new google.maps.InfoWindow({ content: contentString19 });
    var infowindow20 = new google.maps.InfoWindow({ content: contentString20 });
    var infowindow21 = new google.maps.InfoWindow({ content: contentString21 });
    var infowindow22 = new google.maps.InfoWindow({ content: contentString22 });
    var infowindow23 = new google.maps.InfoWindow({ content: contentString23 });
    var infowindow24 = new google.maps.InfoWindow({ content: contentString24 });
    var infowindow25 = new google.maps.InfoWindow({ content: contentString25 });



    google.maps.event.addListener(marker1, 'click', function() {
        infowindow1.open(map,marker1);
      });

    //show info box for marker2
    google.maps.event.addListener(marker2, 'click', function() {
        infowindow2.open(map,marker2);
      });

    //show info box for marker3
    google.maps.event.addListener(marker3, 'click', function() {
        infowindow3.open(map,marker3);
      });

    //show info box for marker4
    google.maps.event.addListener(marker4, 'click', function() {
        infowindow4.open(map,marker4);
      });

    //show info box for marker5
    google.maps.event.addListener(marker5, 'click', function() {
        infowindow5.open(map,marker5);
      });

    //show info box for marker6
    google.maps.event.addListener(marker6, 'click', function() {
        infowindow6.open(map,marker6);
      });
    //show info box for marker6
    google.maps.event.addListener(marker7, 'click', function() {
        infowindow7.open(map,marker7);
    });
    //show info box for marker6
    google.maps.event.addListener(marker8, 'click', function() {
        infowindow8.open(map,marker8);
    });
    //show info box for marker6
    google.maps.event.addListener(marker9, 'click', function() {
        infowindow9.open(map,marker9);
    });
    //show info box for marker6
    google.maps.event.addListener(marker10, 'click', function() {
        infowindow10.open(map,marker10);
    });
    //show info box for marker6
    google.maps.event.addListener(marker11, 'click', function() {
        infowindow11.open(map,marker11);
    });
    google.maps.event.addListener(marker12, 'click', function() {
        infowindow12.open(map,marker12);
    });
    google.maps.event.addListener(marker13, 'click', function() {
        infowindow13.open(map,marker13);
    });
    google.maps.event.addListener(marker14, 'click', function() {
        infowindow14.open(map,marker14);
    });

    google.maps.event.addListener(marker15, 'click', function() {
        infowindow15.open(map,marker15);
    });
    google.maps.event.addListener(marker16, 'click', function() {
        infowindow16.open(map,marker16);
    });
    google.maps.event.addListener(marker17, 'click', function() {
        infowindow17.open(map,marker17);
    });
    google.maps.event.addListener(marker18, 'click', function() {
        infowindow18.open(map,marker18);
    });
    google.maps.event.addListener(marker19, 'click', function() {
        infowindow19.open(map,marker19);
    });
    google.maps.event.addListener(marker20, 'click', function() {
        infowindow20.open(map,marker20);
    });
    google.maps.event.addListener(marker21, 'click', function() {
        infowindow21.open(map,marker21);
    });
    google.maps.event.addListener(marker22, 'click', function() {
        infowindow22.open(map,marker22);
    });
    google.maps.event.addListener(marker23, 'click', function() {
        infowindow23.open(map,marker23);
    });
    google.maps.event.addListener(marker24, 'click', function() {
        infowindow24.open(map,marker24);
    });
    google.maps.event.addListener(marker25, 'click', function() {
        infowindow25.open(map,marker25);
    });

}

google.maps.event.addDomListener(window, 'load', initialize);
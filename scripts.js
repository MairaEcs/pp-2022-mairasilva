/*
Instituto Agronelli de Desenvolvimento Social
instituto@institutoagronelli.org.br
(34) 3313-0770
Av. Randolfo Borges Júnior, 1900 - Parque Tecnológico, Uberaba - MG, 38064-300
Uberaba
*/

// Categorias -----------------------------------------------

// selecting all sections with class of section
const sections = document.querySelectorAll(".section");

// Foreach section when clicked
sections.forEach((section) => {
  section.addEventListener("click", () => {

    // remove active class from all another section and
    // add it to the selected section
    sections.forEach((section) => {
      section.classList.remove("active");
    });
    section.classList.add("active");
  });
});

$('.cabecalho a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html').animate({ 
		scrollTop: targetOffset
	}, 500);
});

(function (){
  let cabecalho = document.getElementById("cabecalho");
  window.addEventListener("scroll", function(){
    if(window.scrollY > 0){
      cabecalho.classList.add("cabecalho-fixo");
    }else{
      cabecalho.classList.remove("cabecalho-fixo"); 
    }
  });
})();

//$("#phone").inputmask({"mask": "(999) 999-9999"});



// CADASTRO
/*const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('descarte');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});*/



/* MAPA COMEÇA AQUI */

var map;
var service;
var myPlace = {lat: -15.7801, lng: -47.9292};

/*var searchInput = 'search_input';

$(document).ready(function () {
  var autocomplete;
  autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
      types: ['geocode'],
  });

  google.maps.event.addListener(autocomplete, 'place_changed', function () {
      var near_place = autocomplete.getPlace();
      document.getElementById('loc_lat').value = near_place.geometry.location.lat();
      document.getElementById('loc_long').value = near_place.geometry.location.lng();

      document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
      document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
  });
  });

  $(document).on('change', '#'+searchInput, function () {
  document.getElementById('latitude_input').value = '';
  document.getElementById('longitude_input').value = '';

  document.getElementById('latitude_view').innerHTML = '';
  document.getElementById('longitude_view').innerHTML = '';
});*/


/*var addressForm = document.getElementById("endereco");

$(document).ready(function () {
  var autocomplete;
  autocomplete = new google.maps.places.Autocomplete(addressForm, {
    types: ["address"],
  });

  google.maps.event.addListener(autocomplete, 'placeChanged', function(){
    var nearPlace = autocomplete.getPlace();
    var latRes = document.getElementById("end-lat").value;
    latRes = near_place.geometry.location.lat();
    var lngRes = document.getElementById("end-lng").value;
    lngRes = near_place.geometry.location.lng();

    console.log(latRes, lngRes);

  });

})*/

/*function initAutocomplete(){
  addressForm = document.querySelector("#endereco");

  autocomplete = new google.maps.places.Autocomplete(addressForm, {
    componentRestrictions: { country: ["us", "ca"] },
    fields: ["address_components", "geometry"],
    types: ["address"],
  });
  
  addressForm.focus();
}*/

function initMap(){
  map = new google.maps.Map(document.getElementById("map"), 
    {center: { lat: -15.7801, lng: -47.9292 }, // centralizar Brasília
    zoom: 5
  });

  var infoWindow = new google.maps.InfoWindow({map:map});

  google.maps.event.addListener(map, 'click', find_closest_marker);

  var marker = new google.maps.Marker({
    map: map,
    title: "Minha posição"
  }); 

  function rad(x) {return x*Math.PI/180;}
  function find_closest_marker( event ) {


    var html = "";


    var lat = event.latLng.lat();
    var lng = event.latLng.lng();

    var latLng = new google.maps.LatLng(lat, lng);
                    
    marker.setPosition(latLng);
    
    var R = 6371; // radius of earth in km
    var distances = [];
    var closest = -1;
    for(var i = 0; i < markers.length; i++) {
      var data = markers[i];
      var mlat = data["lat"];
      var mlng = data["lng"];
      var dLat  = rad(mlat - lat);
      var dLong = rad(mlng - lng);
      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
          Math.cos(rad(lat)) * Math.cos(rad(lat)) * Math.sin(dLong/2) * Math.sin(dLong/2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
      var d = R * c;
      distances[i] = d;
      if ( closest == -1 || d < distances[closest] ) {
          closest = i;
      }
      
      if(d <= 100){
        html += "<b>" + markers[i].name + "</b><br>"+
                "<p>" + "<b>address: </b>" + markers[i].address + "</p>"+
                "<p>" + "<b>tel: </b>" + markers[i].tels + "</p><br>";
      }
      /*else if(d > 100 && d <= 1000){
        html += "<b>" + markers[i].name + "</b><br>"+
                "<p>" + "<b>address: </b>" + markers[i].address + "</p>"+
                "<p>" + "<b>tel: </b>" + markers[i].tels + "</p><br>";
      }*/
      
    }

    //alert(markers[closest].name, markers[closest].address, markers[closest].tels);
    
    /*Última add*/

    swal({
      title: "Pontos de descarte",
      content:{
          element: "ul",
          attributes: {
              innerHTML: html
          }
      },
      icon: "success"
    });

    /*Última add*/

    /*swal({
      title: markers[closest].name,
      text: markers[closest].address+"\ntel: "+markers[closest].tels,
      icon: "success"
    });*/
      
  }
  
}
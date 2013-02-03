/* ria.exos.flatland.be - Notes de cours en ligne pour le cours de RIA - Applications Internet Riches
 * JS Document - /html5/test_one/js/script.js
 * coded by THOMAS BEAUMONT (2384)
 * october 2012
 */

/*jslint regexp: true, vars: true, white: true, browser: true */
/*global jQuery, google */

var 	$laboratoires = $("#gmap_items article.gmap_item"),
		$informations = $("#rechercheInformations").hide(); 
		
var infowindow = new google.maps.InfoWindow();

( function ( $ ) {

	var 	coords,
			gMap,
			gGeocoder,
			gMarker,
			gPosition;
			

	var generateMap = function( n ) {
		gMap = new google.maps.Map( document.getElementById( 'gmap' ), {
			zoom: 1,
			center: new google.maps.LatLng( 0, 0 ),
			mapTypeId: google.maps.MapTypeId.HYBRID
		} );

		return gMap;
	}; // generateMap
	
	
	var addMarker = function(gmap, place){

	  	/* Vu qu'on récupère une chaine de caractère, on doit la splitter et la convertire en float pour pouvoir l'utiliser */
		var myLatlng = new google.maps.LatLng(parseFloat($(place).find('.rechercheLattitude').text()),parseFloat($(place).find('.rechercheLongitude').text()));


		gMarker = new google.maps.Marker({
	      position: myLatlng,
	      map: gMap,
	      title: $(place).find('.rechercheVille').text(),
	      animation: google.maps.Animation.DROP,
	     });
	};
	
	var showInformations = function(element){
		$informations.find('h3').text(element.find('.rechercheVille').text());
		$informations.find('img').attr('src', element.find('.recherchePhoto').find('img').attr('src'));
		$informations.find('.contactRecherche').text(element.find('.rechercheNomScientifique').text());
		$informations.find('.roleRecherche').text(element.find('.rechercheRaison').text());
		$informations.show();
	};


			
	$(function(){
		gMap = generateMap();
		
		$laboratoires.hide();


		 //Remplissage du tableau de coordonnées avec les coordonnées du html
        $laboratoires.each(function (i, place) {
        	$($laboratoires[i]).attr("id", $($laboratoires[i]).find('.rechercheVille').text());
            addMarker(gmap, place);
            
            google.maps.event.addListener(gMarker, 'click', (function(marker, i) {
		        return function() {
		           showInformations($("#" + marker.getTitle()));
		        }
		      })(gMarker, i));

        });
	});


}( jQuery ) );

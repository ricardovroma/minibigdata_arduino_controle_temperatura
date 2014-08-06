/*
 * MoonCake v1.3.1 - Dashboard Demo JS
 *
 * This file is part of MoonCake, an Admin template build for sale at ThemeForest.
 * For questions, suggestions or support request, please mail me at maimairel@yahoo.com
 *
 * Development Started:
 * July 28, 2012
 * Last Update:
 * December 07, 2012
 *
 */

;(function( $, window, document, undefined ) {
	$(document).ready(function() {
		if( $.fn.sparkline ) {
			$( '.sparkline' ).sparkline( 'html', { enableTagOptions: true } );
		}

		var options = {
			series: {
				lines: { 
					show: true, 
					lineWidth: 1, 
					fillColor: { colors: [{opacity: 0.1}, {opacity: 0.1}, {opacity: 0}] } 
				},
				points: { show: false }
			}, 
			tooltip: true, 
			tooltipOpts: {
				content: '%y'
			},
			xaxis: { 
				mode: 'time'
				//timeformat: "%d/%m/%Y %h:%M:%S" 
			},
			yaxes: [ { min: min, max: max } ],
			grid: { borderWidth: 0, hoverable: true }
		}
		plot = $.plot($( "#demo-chart-00" ), _d, options);
	});

	
}) (jQuery, window, document);
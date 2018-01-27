/**
 *  Contains custom scripts for customizer controls pane
 */

( function ( $, window, undefined ) {

	"use strict";

	window.SageCC = {
		Models: { },
		Views: { }
	};

	/*==============================
	 Main
	 ===============================*/

	SageCC.Views.Main = Backbone.View.extend( {
		el: '',
		events: {

		},
		initialize: function () {

		}
	} );

	new SageCC.Views.Main();

} )( jQuery, window, undefined );
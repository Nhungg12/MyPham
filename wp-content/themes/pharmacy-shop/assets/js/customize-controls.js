( function( api ) {

	// Extends our custom "pharmacy-shop" section.
	api.sectionConstructor['pharmacy-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
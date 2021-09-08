
wp.domReady( () => {

	wp.blocks.registerBlockStyle( 'core/group', [
		{
			name: 'default',
			label: 'Fullwidth',
			isDefault: true,
		},
		{
			name: 'page-container',
			label: 'Non-fullwidth',
		}
    ]);

    wp.blocks.registerBlockStyle( 'core/heading', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'alt',
			label: 'Alternate',
		}
	]);
} );

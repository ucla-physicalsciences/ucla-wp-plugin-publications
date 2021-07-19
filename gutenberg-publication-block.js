const {registerBlockType} = wp.blocks;

registerBlockType('ucla-publications/my-publication',{

	//built-in attributes
	
	title: 'Academic Publications',
	description: 'Block that displays Academic Publications',
	icon: 'dashicons-analytics',
	category: 'embeds',

	//custom attributes
	
	attributes: {},
	//custom functions
	//built-in functions
	edit() {},
	save() {}
});

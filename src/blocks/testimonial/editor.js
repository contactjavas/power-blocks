const { serverSideRender: ServerSideRender } = wp;
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { InspectorControls, RichText } = wp.editor;
const { PanelBody } = wp.components;
const { Fragment } = wp.element;

registerBlockType('powerblocks/testimonial', {
	title: __('Testimonial'),
	icon: 'format-quote',
	category: 'powerblocks',
	keywords: [
		__('power blocks'),
		__('power blocks testimonial'),
		__('blocks'),
		__('testimonial'),
	],
	attributes: powerblocksTestimonial.attributes,
	example: {
		attributes: {
			content: 'Hello World',
		},
	},

	/**
	 * The edit function describes the structure of your block in the context of the editor.
	 * This represents what the editor will render when the block is used.
	 *
	 * The "edit" property must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Editor Component.
	 */
	edit: (props) => {
		console.log(props);
		return (
			<div className={props.className}>
				<h3>Testimonial</h3>
				<ServerSideRender block="powerblocks/testimonial" attributes={props.attributes} />
			</div>
		);
	},

	/**
	 * The save function defines the way in which the different attributes should be combined
	 * into the final markup, which is then serialized by Gutenberg into post_content.
	 *
	 * The "save" property must be specified and must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Frontend HTML.
	 */
	save: (props) => {
		return null;
	},
});

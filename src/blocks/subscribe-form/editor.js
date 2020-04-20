const { serverSideRender: ServerSideRender } = wp;
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const {
	InspectorControls,
	BlockControls,
	RichText,
	AlignmentToolbar,
	PanelColorSettings,
	ColorPalette
} = wp.blockEditor;
const {
	TextControl,
	ToggleControl,
	Panel,
	PanelBody,
	PanelRow,
	RangeControl,
	SelectControl,
	ColorPicker
} = wp.components;
const { Fragment } = wp.element;

registerBlockType('powerblocks/subscribe-form', {
	title: __('Subscribe Form'),
	icon: 'email',
	category: 'powerblocks',
	keywords: [
		__('power blocks'),
		__('power blocks subscribe form'),
		__('blocks'),
		__('subscribe form'),
	],
	attributes: powerblocksSubscribeForm.attributes,
	supports: {
		align: ['wide', 'full'],
	},
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
		const {
			attributes,
			setAttributes,
			className
		} = props;

		const {
			align,
			title,
			description,
			contentAlignment,
			sectionSize,
			sectionBgColor,
			containerSize,
			boxWidth,
			boxBgColor,
			formAction,
			formName,
			inputName,
			inputWidth,
			emailPlaceholder,
			submitButtonText
		} = attributes;

		return (
			<Fragment>

				<InspectorControls>

					<PanelBody title={__('Layout Options', 'power-blocks')}>

						<SelectControl
							label={__("Section Size")}
							value={sectionSize}
							onChange={(value) => setAttributes({ sectionSize: value })}
							separatorType="fullWidth"
							options={[
								{ value: "is-full", label: __("Full Height") },
								{ value: "is-small", label: __("Small Gap") },
								{ value: "is-normal", label: __("Normal") },
								{ value: "is-medium", label: __("Medium Gap") },
								{ value: "is-large", label: __("Large Gap") },
							]}
						/>

						<SelectControl
							label={__("Container Size")}
							value={containerSize}
							onChange={(value) => setAttributes({ containerSize: value })}
							separatorType="fullWidth"
							options={[
								{ value: "is-small", label: __("Small Width") },
								{ value: "is-normal", label: __("Normal") },
								{ value: "is-fluid", label: __("Fluid") },
								{ value: "is-full", label: __("Full Width") },
							]}
						/>

						<RangeControl
							label={__("Form Width (%)")}
							value={boxWidth}
							onChange={(value) => setAttributes({ boxWidth: value })}
							min={0}
							max={100}
							separatorType="fullWidth"
							allowReset
						/>

						<RangeControl
							label={__("Input Width (%)")}
							value={inputWidth}
							onChange={(value) => setAttributes({ inputWidth: value })}
							min={0}
							max={100}
							separatorType="fullWidth"
							allowReset
						/>

					</PanelBody>

					<PanelColorSettings
						title={__("Color Settings")}
						initialOpen={false}
						colorSettings={[
							{
								value: sectionBgColor,
								onChange: (value) => setAttributes({ sectionBgColor: value }),
								label: __("Section Background Color"),
							},
							{
								value: boxBgColor,
								onChange: (value) => setAttributes({ boxBgColor: value }),
								label: __("Box Background Color"),
							},
						]}
					>
					</PanelColorSettings>

				</InspectorControls>

				<BlockControls>
					<AlignmentToolbar
						value={contentAlignment}
						onChange={(value) => setAttributes({ contentAlignment: value })}
					/>
				</BlockControls>

				<div className={"pwb-block pwb-subscribe-form " + className}>
					<div
						class={"pwb-section " + sectionSize}
						style={{
							backgroundColor: sectionBgColor
						}}
					>
						<div class={"pwb-container " + containerSize}>
							<div
								class={"pwb-box pwb-has-text-" + contentAlignment}
								style={{
									backgroundColor: boxBgColor,
									maxWidth: boxWidth + "%",
								}}
							>

								<RichText
									tagName="h2"
									className="pwb-title"
									value={title}
									style={{ textAlign: contentAlignment }}
									onChange={(value) => setAttributes({ title: value })}
								/>

								<RichText
									tagName="div"
									className="pwb-description"
									value={description}
									style={{ textAlign: contentAlignment }}
									onChange={(value) => setAttributes({ description: value })}
								/>

								<form action={formAction} name={formName} class="pwb-form" onSubmit={(e) => e.preventDefault()}>
									<div class="pwb-field">
										<div class="pwb-control is-inline">
											<input type="search" name={inputName} class="pwb-input" style={{ width: inputWidth + "%" }} placeholder={emailPlaceholder} />
											<RichText
												tagName="button"
												className="pwb-button"
												value={submitButtonText}
												withoutInteractiveFormatting
												onChange={(value) => setAttributes({ submitButtonText: value })}
											/>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>

			</Fragment>
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
		const {
			attributes,
			className
		} = props;

		const {
			align,
			title,
			description,
			contentAlignment,
			sectionSize,
			sectionBgColor,
			containerSize,
			boxWidth,
			boxBgColor,
			formAction,
			formName,
			inputName,
			inputWidth,
			emailPlaceholder,
			submitButtonText
		} = attributes;

		return (
			<Fragment>

				<div className={"pwb-block pwb-subscribe-form " + className}>
					<div
						class={"pwb-section " + sectionSize}
						style={{
							backgroundColor: sectionBgColor
						}}
					>
						<div class={"pwb-container " + containerSize}>
							<div
								class={"pwb-box pwb-has-text-" + contentAlignment}
								style={{
									backgroundColor: boxBgColor,
									maxWidth: boxWidth + "%",
								}}
							>

								<RichText.Content
									tagName="h2"
									className="pwb-title"
									value={title}
								/>

								<RichText.Content
									tagName="div"
									className="pwb-description"
									value={description}
								/>

								<form action={formAction} name={formName} class="pwb-form">
									<div class="pwb-field">
										<div class="pwb-control is-inline">
											<input type="search" name={inputName} class="pwb-input" style={{ width: inputWidth + "%" }} placeholder={emailPlaceholder} />
											<RichText.Content
												tagName="button"
												className="pwb-button"
												value={submitButtonText}
											/>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>

			</Fragment>
		);
	},
});

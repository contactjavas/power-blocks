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
			note,
			contentAlignment,
			sectionSize,
			sectionBgColor,
			containerSize,
			boxWidth,
			boxVerticalPadding,
			boxBorderRadius,
			boxBgColor,
			formAction,
			formName,
			fieldHeight,
			inputBorderWidth,
			inputBorderColor,
			fieldBorderRadius,
			inputName,
			inputWidth,
			inputPlaceholder,
			submitButtonText,
			submitButtonBgColor,
			submitButtonTextColor
		} = attributes;

		return (
			<Fragment>

				<InspectorControls>

					<PanelBody title={__('Layout Settings', 'power-blocks')}>

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
							label={__("Box Width (%)")}
							value={boxWidth}
							onChange={(value) => setAttributes({ boxWidth: value })}
							min={0}
							max={100}
							separatorType="fullWidth"
							allowReset
						/>

						<RangeControl
							label={__("Box Vertical Padding (px)")}
							value={boxVerticalPadding}
							onChange={(value) => setAttributes({ boxVerticalPadding: value })}
							min={0}
							max={300}
							separatorType="fullWidth"
							allowReset
						/>

						<RangeControl
							label={__("Box Border Radius (px)")}
							value={boxBorderRadius}
							onChange={(value) => setAttributes({ boxBorderRadius: value })}
							min={0}
							max={100}
							separatorType="fullWidth"
							allowReset
						/>

						<RangeControl
							label={__("Field Height (px)")}
							value={fieldHeight}
							onChange={(value) => setAttributes({ fieldHeight: value })}
							min={20}
							max={100}
							separatorType="fullWidth"
							allowReset
						/>

						<RangeControl
							label={__("Field Border Radius (px)")}
							value={fieldBorderRadius}
							onChange={(value) => setAttributes({ fieldBorderRadius: value })}
							min={0}
							max={100}
							separatorType="fullWidth"
							allowReset
						/>

						<RangeControl
							label={__("Input Border Width (px)")}
							value={inputBorderWidth}
							onChange={(value) => setAttributes({ inputBorderWidth: value })}
							min={0}
							max={50}
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
							{
								value: inputBorderColor,
								onChange: (value) => setAttributes({ inputBorderColor: value }),
								label: __("Input Border Color"),
							},
							{
								value: submitButtonBgColor,
								onChange: (value) => setAttributes({ submitButtonBgColor: value }),
								label: __("Button Background Color"),
							},
							{
								value: submitButtonTextColor,
								onChange: (value) => setAttributes({ submitButtonTextColor: value }),
								label: __("Button Text Color"),
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
									paddingTop: boxVerticalPadding + 'px',
									paddingBottom: boxVerticalPadding + 'px',
									backgroundColor: boxBgColor,
									maxWidth: boxWidth + "%",
									borderRadius: boxBorderRadius + "px"
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
											<input
												type="email"
												name={inputName}
												class="pwb-input"
												placeholder={inputPlaceholder}
												style={{
													width: inputWidth + "%",
													height: fieldHeight + "px",
													borderTopLeftRadius: fieldBorderRadius + "px",
													borderBottomLeftRadius: fieldBorderRadius + "px",
													borderLeftWidth: inputBorderWidth + "px",
													borderTopWidth: inputBorderWidth + "px",
													borderBottomWidth: inputBorderWidth + "px",
													borderColor: inputBorderColor
												}}
											/>
											<button
												class="pwb-button"
												style={{
													height: fieldHeight + "px",
													color: submitButtonTextColor,
													backgroundColor: submitButtonBgColor,
													borderTopRightRadius: fieldBorderRadius + "px",
													borderBottomRightRadius: fieldBorderRadius + "px",
												}}
											>
												<RichText
													tagName="span"
													value={submitButtonText}
													withoutInteractiveFormatting
													onChange={(value) => setAttributes({ submitButtonText: value })}
												/>
											</button>
										</div>
									</div>
								</form>

								<RichText
									tagName="div"
									className="pwb-note"
									value={note}
									style={{ textAlign: contentAlignment }}
									onChange={(value) => setAttributes({ note: value })}
								/>

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
			note,
			contentAlignment,
			sectionSize,
			sectionBgColor,
			containerSize,
			boxWidth,
			boxVerticalPadding,
			boxBorderRadius,
			boxBgColor,
			formAction,
			formName,
			fieldHeight,
			inputBorderWidth,
			inputBorderColor,
			fieldBorderRadius,
			inputName,
			inputWidth,
			inputPlaceholder,
			submitButtonText,
			submitButtonBgColor,
			submitButtonTextColor
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
									paddingTop: boxVerticalPadding + 'px',
									paddingBottom: boxVerticalPadding + 'px',
									backgroundColor: boxBgColor,
									maxWidth: boxWidth + "%",
									borderRadius: boxBorderRadius + "px"
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
											<input
												type="email"
												name={inputName}
												class="pwb-input"
												placeholder={inputPlaceholder}
												style={{
													width: inputWidth + "%",
													height: fieldHeight + "px",
													borderTopLeftRadius: fieldBorderRadius + "px",
													borderBottomLeftRadius: fieldBorderRadius + "px",
													borderLeftWidth: inputBorderWidth + "px",
													borderTopWidth: inputBorderWidth + "px",
													borderBottomWidth: inputBorderWidth + "px",
													borderColor: inputBorderColor
												}}
											/>
											<button
												class="pwb-button"
												style={{
													height: fieldHeight + "px",
													color: submitButtonTextColor,
													backgroundColor: submitButtonBgColor,
													borderTopRightRadius: fieldBorderRadius + "px",
													borderBottomRightRadius: fieldBorderRadius + "px",
												}}
											>
												{submitButtonText}
											</button>
										</div>
									</div>
								</form>

								<RichText.Content
									tagName="div"
									className="pwb-note"
									value={note}
									style={{ textAlign: contentAlignment }}
									onChange={(value) => setAttributes({ note: value })}
								/>

							</div>
						</div>
					</div>
				</div>

			</Fragment>
		);
	},
});

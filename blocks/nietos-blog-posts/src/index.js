import { registerBlockType } from '@wordpress/blocks';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, RangeControl, ToggleControl, CheckboxControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { __ } from '@wordpress/i18n';
import ServerSideRender from '@wordpress/server-side-render';

registerBlockType('nietos/blog-posts', {
	edit: ({ attributes, setAttributes }) => {
		const {
			postsPerPage,
			selectedCategories,
			showFeaturedImage,
			showExcerpt,
			showCategories,
			showDate,
			columns
		} = attributes;

		// Fetch categories for the inspector controls
		const categories = useSelect((select) => {
			return select('core').getEntityRecords('taxonomy', 'category', {
				per_page: -1,
				orderby: 'name',
				order: 'asc',
				hide_empty: true
			});
		}, []);

		const blockProps = useBlockProps();

		return (
			<div {...blockProps}>
				<InspectorControls>
					<PanelBody title={__('Asetukset', 'twentytwentyfive')}>
						<RangeControl
							label={__('Artikkelien määrä', 'twentytwentyfive')}
							value={postsPerPage}
							onChange={(value) => setAttributes({ postsPerPage: value })}
							min={1}
							max={20}
						/>
						<RangeControl
							label={__('Sarakkeita', 'twentytwentyfive')}
							value={columns}
							onChange={(value) => setAttributes({ columns: value })}
							min={1}
							max={4}
						/>
					</PanelBody>

					<PanelBody title={__('Kategoriat', 'twentytwentyfive')} initialOpen={false}>
						{categories && categories.length > 0 ? (
							<>
								<p>{__('Valitse kategoriat (tyhjä = kaikki)', 'twentytwentyfive')}</p>
								{categories.map((category) => (
									<CheckboxControl
										key={category.id}
										label={category.name}
										checked={selectedCategories.includes(category.id)}
										onChange={(isChecked) => {
											const newCategories = isChecked
												? [...selectedCategories, category.id]
												: selectedCategories.filter((id) => id !== category.id);
											setAttributes({ selectedCategories: newCategories });
										}}
									/>
								))}
							</>
						) : (
							<p>{__('Ladataan kategorioita...', 'twentytwentyfive')}</p>
						)}
					</PanelBody>

					<PanelBody title={__('Näytä elementit', 'twentytwentyfive')} initialOpen={false}>
						<ToggleControl
							label={__('Featured Image', 'twentytwentyfive')}
							checked={showFeaturedImage}
							onChange={(value) => setAttributes({ showFeaturedImage: value })}
						/>
						<ToggleControl
							label={__('Kategoriat', 'twentytwentyfive')}
							checked={showCategories}
							onChange={(value) => setAttributes({ showCategories: value })}
						/>
						<ToggleControl
							label={__('Päivämäärä', 'twentytwentyfive')}
							checked={showDate}
							onChange={(value) => setAttributes({ showDate: value })}
						/>
						<ToggleControl
							label={__('Ote', 'twentytwentyfive')}
							checked={showExcerpt}
							onChange={(value) => setAttributes({ showExcerpt: value })}
						/>
					</PanelBody>
				</InspectorControls>

				<div className="nietos-blog-posts-editor-preview">
					<ServerSideRender
						block="nietos/blog-posts"
						attributes={attributes}
					/>
				</div>
			</div>
		);
	},

	save: () => {
		// Server-side rendered block, return null
		return null;
	}
});

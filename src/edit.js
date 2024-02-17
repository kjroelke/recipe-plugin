import React from '@wordpress/element';
import {
	useBlockProps,
	TextControl,
	Flex,
	FlexBlock,
	Button,
	FlexItem,
} from '@wordpress/block-editor';
// import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const blockProps = useBlockProps();
	return (
		<div {...blockProps}>
			<h2>Ingredients</h2>
			{attributes.ingredients.map((ingredient, index, arr) => {
				return (
					<Flex key={index}>
						<FlexBlock>
							<TextControl
								label="Ingredient Quantity"
								value={ingredient.quantity}
								onChange={(quantity) => {
									const newIngredients = (arr[
										index
									].quantity = quantity);
									setAttributes({
										ingredients: newIngredients,
									});
								}}
							/>
						</FlexBlock>
						<FlexBlock>
							<TextControl
								label="Ingredient Unit"
								value={ingredient.unit}
								onChange={(unit) => {
									const newIngredients = (arr[index].unit =
										unit);

									setAttributes({
										ingredients: newIngredients,
									});
								}}
							/>
						</FlexBlock>
						<FlexBlock>
							<TextControl
								label="Ingredient Name"
								value={ingredient.name}
								onChange={(name) => {
									const newIngredients = (arr[index].name =
										name);
									setAttributes({
										ingredients: newIngredients,
									});
								}}
							/>
						</FlexBlock>
						<FlexItem>
							<Button>Add Ingredient</Button>
						</FlexItem>
					</Flex>
				);
			})}
		</div>
	);
}

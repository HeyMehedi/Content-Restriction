<?php
/**
 * @author  HeyMehedi
 * @since   1.0
 * @version 1.1.1
 */

use HeyMehedi\All_In_One_Content_Restriction\Helper;
use HeyMehedi\All_In_One_Content_Restriction\Markup_Manager;

$post_type   = isset( $args['post_type'] ) ? $args['post_type'] : 'post';
$restrict_in = isset( $args['restrict_in'] ) ? $args['restrict_in'] : 'category';
?>
<div class="part5 fixed-details">

	<h2><?php esc_html_e( 'Rule Applied', 'all-in-one-content-restriction' );?></h2>
	<p><?php esc_html_e( 'Restrict in ', 'all-in-one-content-restriction' );?><span id="restrict_in_title"><?php echo esc_html( Helper::get_current_restrict_in_label( $post_type, $restrict_in ) ); ?></span></p>

	<label for="heymehedi-search_bar_selected" class="form-label"><?php esc_html_e( 'Title or ID', 'all-in-one-content-restriction' );?></label>
	<input id="heymehedi-search_bar_selected" type="text" class="form-control" placeholder="<?php esc_attr_e( 'Type to search', 'all-in-one-content-restriction' );?>">

	<div id="heymehedi-items-wrapper-selected">

		<table id="heymehedi-selected_items_table">

			<thead>

				<tr>
					<th class="text-center"><?php esc_html_e( 'Drop', 'all-in-one-content-restriction' );?></th>
					<th class="text-center"><?php esc_html_e( 'ID', 'all-in-one-content-restriction' );?></th>
					<th><?php esc_html_e( 'Title', 'all-in-one-content-restriction' );?></th>
				</tr>

			</thead>

			<tbody id="heymehedi-selected_items_table_body">

				<?php
				echo Markup_Manager::display_taxonomy_single_items_html(
					$post_type,
					$restrict_in,
					'dashicons-minus',
					array(),
					isset( $args['selected_ids'] ) ? $args['selected_ids'] : array(),
					true );
				?>

			</tbody>

		</table>

	</div>

</div>
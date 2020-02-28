<?php
/**
 * Add a responsive meta tag to the head of the document
 *
 * @package WP-Theme-Components
 * @subpackage responsive-meta-tag
 * @author Cameron Jones
 * @version 1.0.0
 */

namespace WP_Theme_Components\Responsive_Meta_Tag;

/**
 * Bail if accessed directly
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Add the meta tag to the head
 *
 * @since 1.0.0
 */
function add_responsive_meta_tag() {
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
}

add_action( 'wp_head', __NAMESPACE__ . '\\add_responsive_meta_tag' );

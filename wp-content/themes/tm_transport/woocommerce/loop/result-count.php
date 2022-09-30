<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wp_query;

if ( ! woocommerce_products_will_display() ) {
	return;
}
?>

<div class="col-md-6">

	<p class="woocommerce-result-count">
		<?php
		$paged    = max( 1, $wp_query->get( 'paged' ) );
		$per_page = $wp_query->get( 'posts_per_page' );
		$total    = $wp_query->found_posts;
		$first    = ( $per_page * $paged ) - $per_page + 1;
		$last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

		if ( 1 == $total ) {
			_e( 'Showing the single result', 'tm_transport' );
		} elseif ( $total <= $per_page || - 1 == $per_page ) {
			printf( esc_html__( 'Showing all %d results', 'tm_transport' ), $total );
		} else {
			printf( _x( 'Showing %1$d&ndash;%2$d of %3$d results', '%1$d = first, %2$d = last, %3$d = total', 'tm_transport' ), $first, $last, $total );
		}
		?>
	</p>

</div>

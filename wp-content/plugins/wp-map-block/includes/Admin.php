<?php
namespace WPMapBlock;

class Admin
{
	public static function init(){
		$self = new self();

		add_action( 'admin_notices', array($self, 'alms_sale_notice') );
		add_action( 'admin_init', array( $self, 'hide_alms_sale_notice' ) );
	}

	public function alms_sale_notice(){
		if ( ! current_user_can( 'manage_options' ) || defined('ACADEMY_VERSION') || get_option('wpmapblock-hide-alms-sale-notice') ) {
			return;
		}

		$install_time = get_option('wp_map_block_first_install_time');
		if(!$install_time || time() < strtotime('+3 days', $install_time)){
			return;
		}

		$class = 'notice notice-success';
		$heading = __( 'Enjoying WP Map Block? We have more to offer.', 'wp-map-block' );
		$message = __( 'We\'ve recently launched <strong>Academy LMS Pro</strong>, the LMS plugin to create, manage, and sell online courses. Launch your own eLearning business today to get a <strong>40% discount</strong> on Academy LMS Pro. <a href="https://academylms.net/go/alms-deal-from-wpmapblock" target="_blank">Grab the deal</a> with a <strong>Coupon: WPMAPBLOCK</strong> before it expires!', 'wp-map-block' );
		printf(
			'<div class="%1$s" style="display:flex; align-items:center; column-gap: 15px; padding: 15px 20px;">
				<div class="notice-logo">
					<img width="120px" src="%2$s" alt="logo"/>
				</div>
				<div class="notice-content">
					<p><strong>%3$s</strong></p><p>%4$s</p>
					<p>
						<a href="%5$s" class="button-primary">Hide Notice</a>
					</p>
				</div>
			</div>',
			esc_attr( $class ),
			esc_url( WPMAPBLOCK_PLUGIN_ROOT_URI . 'assets/images/alms-offer.gif' ),
			esc_html( $heading ),
			wp_kses_post( $message ),
			esc_url( add_query_arg( 'wpmapblock-alms-sale-notice', 1 ) )
		);
	}
	public function hide_alms_sale_notice() {
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( isset( $_GET['wpmapblock-alms-sale-notice'] ) && '1' === $_GET['wpmapblock-alms-sale-notice'] && current_user_can( 'manage_options' ) ) {
			update_option( 'wpmapblock-hide-alms-sale-notice', true );
		}
	}
}

<?php # -*- coding: utf-8 -*-

namespace TheDramatist\WooComAW\AccountWidgetInit;

/**
 * Class AccountWidgetInit
 *
 * @author  Khan M Rashedun-Naby <naby88@gmail.com>
 * @link    http://rnaby.github.io/
 *
 * @since   1.0.0
 *
 * @package woocom-account-widget
 * @subpackage woocom-account-widget/AccountWidgetInit
 * @license https://www.gnu.org/licenses/gpl.txt GPL
 */
class AccountWidgetInit {

	/**
	 * This method is responsible for initializing the widget.
	 *
	 * @since   1.0.0
	 */
	public function init() {
		add_action( 'widgets_init', [ $this, 'register_widget' ] );
	}

	/**
	 * Registering the widget.
	 *
	 * @since   1.0.0
	 */
	public function register_widget() {
		return register_widget( '\TheDramatist\WooComAW\AccountWidgetCore\AccountWidgetCore' );
	}

}
<p>
	<label for="<?php echo $this->get_field_id( 'logged_out_title' ); ?>"><?php _e( 'Logged out title:',
	                                                                                'woocom-account-widget' ) ?></label>
	<input
		type="text"
		class="widefat"
		id="<?php echo esc_attr( $this->get_field_id( 'logged_out_title' ) ); ?>"
		name="<?php echo esc_attr( $this->get_field_name( 'logged_out_title' ) ); ?>"
		value="<?php if ( isset ( $instance[ 'logged_out_title' ] ) ) {
			echo esc_attr( $instance[ 'logged_out_title' ] );
		} else {
			echo __( 'Customer Login', 'woocom-account-widget' );
		} ?>"
	/>
</p>

<p><label for="<?php echo $this->get_field_id( 'logged_in_title' ); ?>"><?php _e( 'Logged in title:',
                                                                                  'woocom-account-widget' ) ?></label>
	<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'logged_in_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'logged_in_title' ) ); ?>" value="<?php if ( isset ( $instance[ 'logged_in_title' ] ) ) {
		echo esc_attr( $instance[ 'logged_in_title' ] );
	} else {
		echo __( 'Welcome %s', 'woocom-account-widget' );
	} ?>" /></p>

<p>
	<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_cartlink' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_cartlink' ) ); ?>"<?php checked( $show_cartlink ); ?> />
	<label for="<?php echo $this->get_field_id( 'show_cartlink' ); ?>"><?php _e( 'Show link to shopping cart',
	                                                                             'woocom-account-widget' ); ?></label><br />
	<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_items' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_items' ) ); ?>"<?php checked( $show_items ); ?> />
	<label for="<?php echo $this->get_field_id( 'show_items' ); ?>"><?php _e( 'Show number of items in cart',
	                                                                          'woocom-account-widget' ); ?></label><br />

	<?php if ( class_exists( 'WPF_Uploads' ) ): ?>
		<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_upload_new' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_upload_new' ) ); ?>"<?php checked( $show_upload_new ); ?> />
		<label for="<?php echo $this->get_field_id( 'show_upload_new' ); ?>"><?php _e( 'Show number of uploads left',
		                                                                               'woocom-account-widget' ); ?></label><br />
	<?php elseif ( function_exists( 'woocommerce_umf_admin_menu' ) ): ?>
		<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_upload' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_upload' ) ); ?>"<?php checked( $show_upload ); ?> />
		<label for="<?php echo $this->get_field_id( 'show_upload' ); ?>"><?php _e( 'Show number of uploads left',
		                                                                           'woocom-account-widget' ); ?></label><br />
	<?php endif; ?>
	<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_unpaid' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_unpaid' ) ); ?>"<?php checked( $show_unpaid ); ?> />
	<label for="<?php echo $this->get_field_id( 'show_unpaid' ); ?>"><?php _e( 'Show number of unpaid orders',
	                                                                           'woocom-account-widget' ); ?></label><br />
	<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_pending' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_pending' ) ); ?>"<?php checked( $show_pending ); ?> />
	<label for="<?php echo $this->get_field_id( 'show_pending' ); ?>"><?php _e( 'Show number of uncompleted orders',
	                                                                            'woocom-account-widget' ); ?></label><br>
	<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'show_logout_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_logout_link' ) ); ?>"<?php checked( $show_logout_link ); ?> />
	<label for="<?php echo $this->get_field_id( 'show_logout_link' ); ?>"><?php _e( 'Show logout link',
	                                                                                'woocom-account-widget' ); ?></label>
</p>
<p><label for="<?php echo $this->get_field_id( 'wma_redirect' ); ?>"><?php _e( 'Redirect to page after login:',
                                                                               'woocom-account-widget' ) ?></label>
	<select name="<?php echo esc_attr( $this->get_field_name( 'wma_redirect' ) ); ?>" class="widefat">
		<option value="">
			<?php echo esc_attr( __( 'Select page', 'woocom-account-widget' ) ); ?></option>
		<?php
		$pages = get_pages();
		foreach ( $pages as $page ) {
			$option = '<option value="' . esc_attr( $page->ID ) . '" ' . selected( $instance[ 'wma_redirect' ],
			                                                                       $page->ID, false ) . '>';
			$option .= $page->post_title;
			$option .= '</option>';
			echo esc_html( $option );
		}
		?>
	</select>

<p><?php _e( 'Other options', 'woocom-account-widget' ); ?>:<br>
	<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'login_with_email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'login_with_email' ) ); ?>"<?php checked( $login_with_email ); ?> />
	<label for="<?php echo $this->get_field_id( 'login_with_email' ); ?>"><?php _e( 'Login with email address',
	                                                                                'woocom-account-widget' ); ?></label>
</p>
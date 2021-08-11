<?php
	
	function forty_register_widgets() {
		register_widget('forty_address');
	}
	add_action( 'widgets_init', 'forty_register_widgets' );

	class forty_address extends WP_Widget {
		public function __construct() {
			$des = array(
				'description'	=> __( 'Input your address.', 'forty' )
			);
			parent::__construct( 'forty_address_widget', __( 'forty &mdash; Addess Widget', 'forty' ), $des );
		}


		public function widget( $args, $instance ) {
	?>
		<section class="split contact">
			<section class="alt">
				<div class="contact-method">
					<span class="icon solid alt fa-home"></span>
					<h3><?php _e( 'Addresse', 'forty' ); ?></h3>
					<p>
						<?php echo !empty($instance['addr']) ? $instance['addr'] : ''; ?>
					</p>
					<p>
						<?php echo !empty($instance['addr']) ? $instance['addr2'] : ''; ?>
					</p>
					<p>
						<?php echo !empty($instance['addr']) ? $instance['addr3'] : ''; ?>
					</p>
				</div>
			</section>
			<section>
				<div class="contact-method">
					<span class="icon solid alt fa-phone"></span>
					<h3><?php _e( 'Telefon', 'forty' ); ?></h3>
					<p><a href="<?php echo !empty($instance['phn']) ? 'tel:'.$instance['phn'] : '#'; ?>"><?php echo !empty($instance['phn']) ? $instance['phn'] : ''; ?></a></p>
				</div>
			</section>
			<section>
				<div class="contact-method">
					<span class="icon solid alt fa-envelope"></span>
					<h3><?php _e( 'Email', 'forty' ); ?></h3>
					<p><a href="<?php echo !empty($instance['mail']) ? 'mailto:'.$instance['mail'] : '#'; ?>"><?php echo !empty($instance['mail']) ? $instance['mail'] : ''; ?></a></p>
				</div>
			</section>
		</section>

	<?php
		}

		public function form( $instance ) {
	?>
	
<!-- 		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php _e( 'Title: ', 'forty' ); ?></label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" value="<?php echo !empty($instance['title']) ? esc_attr( $instance['title'] ) : '' ?>" class="widefat">
		</p> -->

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('addr') ); ?>"><?php _e( 'Addresse:', 'forty' ); ?></label>
			<textarea name="<?php echo esc_attr( $this->get_field_name('addr') ); ?>" id="<?php echo esc_attr( $this->get_field_id('addr') ); ?>" rows="1" class="widefat"><?php echo !empty($instance['addr']) ? esc_html( $instance['addr'] ) : '' ?></textarea>
			<textarea name="<?php echo esc_attr( $this->get_field_name('addr2') ); ?>" id="<?php echo esc_attr( $this->get_field_id('addr2') ); ?>" rows="1" class="widefat"><?php echo !empty($instance['addr2']) ? esc_html( $instance['addr2'] ) : '' ?></textarea>
			<textarea name="<?php echo esc_attr( $this->get_field_name('addr3') ); ?>" id="<?php echo esc_attr( $this->get_field_id('addr3') ); ?>" rows="1" class="widefat"><?php echo !empty($instance['addr3']) ? esc_html( $instance['addr3'] ) : '' ?></textarea>
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('phn') ); ?>"><?php _e( 'Telefon:', 'forty' ); ?> </label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name('phn') ); ?>" id="<?php echo esc_attr( $this->get_field_id('phn') ); ?>" value="<?php echo !empty($instance['phn']) ? esc_attr( $instance['phn'] ) : ''; ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('mail') ); ?>"><?php _e( 'Email:', 'forty' ); ?> </label>
			<input type="text" name="<?php echo esc_attr( $this->get_field_name('mail') ); ?>" id="<?php echo esc_attr( $this->get_field_id('mail') ); ?>" value="<?php echo !empty($instance['mail']) ? esc_attr( $instance['mail'] ) : ''; ?>" class="widefat">
		</p>
		
	<?php
		}
	} 
	?>
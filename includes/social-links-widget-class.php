<?php

class Social_Links_Widget_Class extends WP_Widget {


	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		 $widget_ops = array(
			 'classname'   => 'Social_Links_Widget',
			 'description' => __( 'Social Links Widget', 'social-links-widget' ),
		 );
		 parent::__construct( 'Social_Links_Widget', __( 'Social Links Widget', 'social-links-widget' ), $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		$links = array(
			'facebook'  => esc_attr( $instance['facebook'] ),
			'twitter'   => esc_attr( $instance['twitter'] ),
			'instagram' => esc_attr( $instance['instagram'] ),
			'linkedin'  => esc_attr( $instance['linkedin'] ),
			'pinterest' => esc_attr( $instance['pinterest'] ),
			'youtube'   => esc_attr( $instance['youtube'] ),
			'wechat'    => esc_attr( $instance['wechat'] ),
			'skype'     => esc_attr( $instance['skype'] ),
			'snapchat'  => esc_attr( $instance['snapchat'] ),
			'dribbble'  => esc_attr( $instance['dribbble'] ),
			'vimeo'     => esc_attr( $instance['vimeo'] ),
			'tumblr'    => esc_attr( $instance['tumblr'] ),
			'vine'      => esc_attr( $instance['vine'] ),
			'flickr'    => esc_attr( $instance['flickr'] ),
			'yahoo'     => esc_attr( $instance['yahoo'] ),
			'reddit'    => esc_attr( $instance['reddit'] ),
		);
		echo $args['before_widget'];
		if ( isset( $instance['title'] ) ) {
			echo $args['before_title'];
			echo $instance['title'];
			echo $args['after_title'];
		}
		$this->DisplayForm( $links );
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		 // load the options content from below
		$this->getForm( $instance );
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance = array(
			'title'     => ! empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : '',
			'facebook'  => ! empty( $new_instance['facebook'] ) ? sanitize_text_field( $new_instance['facebook'] ) : '',
			'twitter'   => ! empty( $new_instance['twitter'] ) ? sanitize_text_field( $new_instance['twitter'] ) : '',
			'instagram' => ! empty( $new_instance['instagram'] ) ? sanitize_text_field( $new_instance['instagram'] ) : '',
			'linkedin'  => ! empty( $new_instance['linkedin'] ) ? sanitize_text_field( $new_instance['linkedin'] ) : '',
			'pinterest' => ! empty( $new_instance['pinterest'] ) ? sanitize_text_field( $new_instance['pinterest'] ) : '',
			'youtube'   => ! empty( $new_instance['youtube'] ) ? sanitize_text_field( $new_instance['youtube'] ) : '',
			'wechat'    => ! empty( $new_instance['wechat'] ) ? sanitize_text_field( $new_instance['wechat'] ) : '',
			'snapchat'  => ! empty( $new_instance['snapchat'] ) ? sanitize_text_field( $new_instance['snapchat'] ) : '',
			'skype'     => ! empty( $new_instance['skype'] ) ? sanitize_text_field( $new_instance['skype'] ) : '',
			'dribbble'  => ! empty( $new_instance['dribbble'] ) ? sanitize_text_field( $new_instance['dribbble'] ) : '',
			'vimeo'     => ! empty( $new_instance['vimeo'] ) ? sanitize_text_field( $new_instance['vimeo'] ) : '',
			'tumblr'    => ! empty( $new_instance['tumblr'] ) ? sanitize_text_field( $new_instance['tumblr'] ) : '',
			'vine'      => ! empty( $new_instance['vine'] ) ? sanitize_text_field( $new_instance['vine'] ) : '',
			'flickr'    => ! empty( $new_instance['flickr'] ) ? sanitize_text_field( $new_instance['flickr'] ) : '',
			'yahoo'     => ! empty( $new_instance['yahoo'] ) ? sanitize_text_field( $new_instance['yahoo'] ) : '',
			'reddit'    => ! empty( $new_instance['reddit'] ) ? sanitize_text_field( $new_instance['reddit'] ) : '',
		);
		return $instance;
	}

	public function getForm( $instance ) {
		// social links label
		$label = array(
			'title'     => __( ucfirst( 'title:' ), 'social-links-widget' ),
			'facebook'  => __( ucfirst( 'facebook:' ), 'social-links-widget' ),
			'twitter'   => __( ucfirst( 'twitter:' ), 'social-links-widget' ),
			'linkedin'  => __( ucfirst( 'linkedin:' ), 'social-links-widget' ),
			'instagram' => __( ucfirst( 'instagram:' ), 'social-links-widget' ),
			'pinterest' => __( ucfirst( 'pinterest:' ), 'social-links-widget' ),
			'youtube'   => __( ucfirst( 'youtube:' ), 'social-links-widget' ),
			'wechat'    => __( ucfirst( 'wechat:' ), 'social-links-widget' ),
			'skype'     => __( ucfirst( 'skype:' ), 'social-links-widget' ),
			'snapchat'  => __( ucfirst( 'snapchat:' ), 'social-links-widget' ),
			'dribbble'  => __( ucfirst( 'dribbble:' ), 'social-links-widget' ),
			'vimeo'     => __( ucfirst( 'vimeo:' ), 'social-links-widget' ),
			'tumblr'    => __( ucfirst( 'tumblr:' ), 'social-links-widget' ),
			'vine'      => __( ucfirst( 'vine:' ), 'social-links-widget' ),
			'flickr'    => __( ucfirst( 'flickr:' ), 'social-links-widget' ),
			'yahoo'     => __( ucfirst( 'yahoo:' ), 'social-links-widget' ),
			'reddit'    => __( ucfirst( 'reddit:' ), 'social-links-widget' ),
		);

		// title
		$title = isset( $instance['title'] ) ? sanitize_text_field( $instance['title'] ) : '';
		// facebook
		$facebook = isset( $instance['facebook'] ) ? sanitize_text_field( $instance['facebook'] ) : '';
		// twitter
		$twitter = isset( $instance['twitter'] ) ? sanitize_text_field( $instance['twitter'] ) : '';
		// linkedin
		$linkedin = isset( $instance['linkedin'] ) ? sanitize_text_field( $instance['linkedin'] ) : '';
		// instagram
		$instagram = isset( $instance['instagram'] ) ? sanitize_text_field( $instance['instagram'] ) : '';
		// pinterest
		$pinterest = isset( $instance['pinterest'] ) ? sanitize_text_field( $instance['pinterest'] ) : '';
		// youtube
		$youtube = isset( $instance['youtube'] ) ? sanitize_text_field( $instance['youtube'] ) : '';
		// wechat
		$wechat = isset( $instance['wechat'] ) ? sanitize_text_field( $instance['wechat'] ) : '';
		// skype
		$skype = isset( $instance['skype'] ) ? sanitize_text_field( $instance['skype'] ) : '';
		// snapchat
		$snapchat = isset( $instance['snapchat'] ) ? sanitize_text_field( $instance['snapchat'] ) : '';
		// dribbble
		$dribbble = isset( $instance['dribbble'] ) ? sanitize_text_field( $instance['dribbble'] ) : '';
		// vimeo
		$vimeo = isset( $instance['vimeo'] ) ? sanitize_text_field( $instance['vimeo'] ) : '';
		// tumblr
		$tumblr = isset( $instance['tumblr'] ) ? sanitize_text_field( $instance['tumblr'] ) : '';
		// vine
		$vine = isset( $instance['vine'] ) ? sanitize_text_field( $instance['vine'] ) : '';
		// flickr
		$flickr = isset( $instance['flickr'] ) ? sanitize_text_field( $instance['flickr'] ) : '';
		// yahoo
		$yahoo = isset( $instance['yahoo'] ) ? sanitize_text_field( $instance['yahoo'] ) : '';
		// reddit
		$reddit = isset( $instance['reddit'] ) ? sanitize_text_field( $instance['reddit'] ) : '';

		ob_start();?>
		<!-- title -->
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo $label['title']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" placeholder="Enter Follow us on social media">
		</p>
		<!-- facebook -->
		<p><label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php echo $label['facebook']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'facebook' ); ?>" id="<?php echo $this->get_field_id( 'facebook' ); ?>" value="<?php echo esc_attr( $facebook ); ?>" placeholder="Enter facebook profile link">
		</p>
		<!-- twitter -->
		<p><label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php echo $label['twitter']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'twitter' ); ?>" id="<?php echo $this->get_field_id( 'twitter' ); ?>" value="<?php echo esc_attr( $twitter ); ?>" placeholder="Enter twitter profile link">
		</p>
		<!-- instagram -->
		<p><label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php echo $label['instagram']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'instagram' ); ?>" id="<?php echo $this->get_field_id( 'instagram' ); ?>" value="<?php echo esc_attr( $instagram ); ?>" placeholder="Enter instagram profile link">
		</p>
		<!-- linkedin -->
		<p><label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php echo $label['linkedin']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" value="<?php echo esc_attr( $linkedin ); ?>" placeholder="Enter linkedin profile link">
		</p>
		<!-- pinterest -->
		<p><label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php echo $label['pinterest']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" value="<?php echo esc_attr( $pinterest ); ?>" placeholder="Enter pinterest profile link">
		</p>
		<!-- youtube -->
		<p><label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php echo $label['youtube']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'youtube' ); ?>" id="<?php echo $this->get_field_id( 'youtube' ); ?>" value="<?php echo esc_attr( $youtube ); ?>" placeholder="Enter youtube profile link">
		</p>
		<!-- wechat -->
		<p><label for="<?php echo $this->get_field_id( 'wechat' ); ?>"><?php echo $label['wechat']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'wechat' ); ?>" id="<?php echo $this->get_field_id( 'wechat' ); ?>" value="<?php echo esc_attr( $wechat ); ?>" placeholder="Enter wechat profile link">
		</p>
		<!-- skype -->
		<p><label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php echo $label['skype']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'skype' ); ?>" id="<?php echo $this->get_field_id( 'skype' ); ?>" value="<?php echo esc_attr( $skype ); ?>" placeholder="Enter skype profile link">
		</p>
		<!-- snapchat -->
		<p><label for="<?php echo $this->get_field_id( 'snapchat' ); ?>"><?php echo $label['snapchat']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'snapchat' ); ?>" id="<?php echo $this->get_field_id( 'snapchat' ); ?>" value="<?php echo esc_attr( $snapchat ); ?>" placeholder="Enter snapchat profile link">
		</p>
		<!-- dribbble -->
		<p><label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php echo $label['dribbble']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" value="<?php echo esc_attr( $dribbble ); ?>" placeholder="Enter dribbble profile link">
		</p>
		<!-- vimeo -->
		<p><label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php echo $label['vimeo']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" id="<?php echo $this->get_field_id( 'vimeo' ); ?>" value="<?php echo esc_attr( $vimeo ); ?>" placeholder="Enter vimeo profile link">
		</p>
		<!-- tumblr -->
		<p><label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php echo $label['tumblr']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" id="<?php echo $this->get_field_id( 'tumblr' ); ?>" value="<?php echo esc_attr( $tumblr ); ?>" placeholder="Enter tumblr profile link">
		</p>
		<!-- vine -->
		<p><label for="<?php echo $this->get_field_id( 'vine' ); ?>"><?php echo $label['vine']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'vine' ); ?>" id="<?php echo $this->get_field_id( 'vine' ); ?>" value="<?php echo esc_attr( $vine ); ?>" placeholder="Enter vine profile link">
		</p>
		<!-- flickr -->
		<p><label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php echo $label['flickr']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'flickr' ); ?>" id="<?php echo $this->get_field_id( 'flickr' ); ?>" value="<?php echo esc_attr( $flickr ); ?>" placeholder="Enter flickr profile link">
		</p>
		<!-- yahoo -->
		<p><label for="<?php echo $this->get_field_id( 'yahoo' ); ?>"><?php echo $label['yahoo']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'yahoo' ); ?>" id="<?php echo $this->get_field_id( 'yahoo' ); ?>" value="<?php echo esc_attr( $yahoo ); ?>" placeholder="Enter yahoo profile link">
		</p>
		<!-- reddit -->
		<p><label for="<?php echo $this->get_field_id( 'reddit' ); ?>"><?php echo $label['reddit']; ?></label><input type="text" class="widefat" name="<?php echo $this->get_field_name( 'reddit' ); ?>" id="<?php echo $this->get_field_id( 'reddit' ); ?>" value="<?php echo esc_attr( $reddit ); ?>" placeholder="Enter reddit profile link">
		</p>
		<?php
		echo ob_get_clean();
	}
	// output content
	public function DisplayForm( $links ) {
		 // facebook
		if ( ! empty( $links['facebook'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Facebook</span> <i class='fa fa-facebook'></i></a></div>", esc_url( $links['facebook'] ) );
		}
		// Twitter
		if ( ! empty( $links['twitter'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Twitter</span> <i class='fa fa-twitter'></i></a></div>", esc_url( $links['twitter'] ) );
		}
		// Instagram
		if ( ! empty( $links['instagram'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Instagram</span> <i class='fa fa-instagram'></i></a></div>", esc_url( $links['instagram'] ) );
		}
		// linkedin
		if ( ! empty( $links['linkedin'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Linkedin</span> <i class='fa fa-linkedin'></i></a></div>", esc_url( $links['linkedin'] ) );
		}
		// pinterest
		if ( ! empty( $links['pinterest'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Pinterest</span> <i class='fa fa-pinterest'></i></a></div>", esc_url( $links['pinterest'] ) );
		}
		// youtube
		if ( ! empty( $links['youtube'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Youtube</span> <i class='fa fa-youtube'></i></a></div>", esc_url( $links['youtube'] ) );
		}
		// wechat
		if ( ! empty( $links['wechat'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Wechat</span> <i class='fa fa-wechat'></i></a></div>", esc_url( $links['wechat'] ) );
		}
		// sype
		if ( ! empty( $links['skype'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Skype</span> <i class='fa fa-skype'></i></a></div>", esc_url( $links['skype'] ) );
		}

		// snapchat
		if ( ! empty( $links['snapchat'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Snapchat</span> <i class='fa fa-snapchat-ghost'></i></a></div>", esc_url( $links['snapchat'] ) );
		}
		// dribbble
		if ( ! empty( $links['dribbble'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Dribbble</span> <i class='fa fa-dribbble'></i></a></div>", esc_url( $links['dribbble'] ) );
		}
		// Vimeo
		if ( ! empty( $links['vimeo'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Vimeo</span> <i class='fa fa-vimeo'></i></a></div>", esc_url( $links['vimeo'] ) );
		}
		// Vine
		if ( ! empty( $links['vine'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Vine</span> <i class='fa fa-vine'></i></a></div>", esc_url( $links['vine'] ) );
		}
		// Tumlr
		if ( ! empty( $links['tumblr'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Tumblr</span> <i class='fa fa-tumblr'></i></a></div>", esc_url( $links['tumblr'] ) );
		}

		// Flickr
		if ( ! empty( $links['flickr'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Flickr</span> <i class='fa fa-flickr'></i></a></div>", esc_url( $links['flickr'] ) );
		}

		// yahoo
		if ( ! empty( $links['yahoo'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Yahoo</span><i class='fa fa-yahoo'></i></a></div>", esc_url( $links['yahoo'] ) );
		}
		// reddit
		if ( ! empty( $links['reddit'] ) ) {
			printf( "<div class='tooltip'><a href='%s' target='_blank'><span class='tooltiptext'>Reddit</span><i class='fa fa-reddit'></i></a></div>", esc_url( $links['reddit'] ) );
		}
	}
}

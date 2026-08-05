<?php 
/**
 * Clock widget
 * 
 * @package Test
 */

namespace TEST_THEME\inc;
use WP_Widget;

use TEST_THEME\Inc\Traits\Singleton;

class Clock_Widget extends WP_Widget {

	use Singleton;

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'clock_widget', // Base ID
			'Clock', // Name
			[ 'description' => __( 'Clock Widget', 'test' ), 
            ] // Args
		);
	}

    /**
     * Outputs the widget on the front end.
     *
     * @param array $args {
     *     Display arguments passed by WordPress from the registered sidebar.
     *     These are NOT defined by the widget itself, but by the theme's
     *     register_sidebar() call. They contain the HTML wrappers that should
     *     surround the widget and its title, allowing the theme to control
     *     the markup for all widgets in a sidebar.
     *
     *     Common values include:
     *     - $before_widget : Opening HTML for the widget container.
     *     - $after_widget  : Closing HTML for the widget container.
     *     - $before_title  : Opening HTML for the widget title (often <h2>).
     *     - $after_title   : Closing HTML for the widget title.
     * }
     * @param array $instance The widget's saved settings from the database.
     */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];

		if ( ! empty( $title ) ) {
			echo $args['before_title'] . esc_html( $title ) . $args['after_title'];
		}
		?>
		<section class="card">
			<div class="clock card-body">
				<span id="time"></span>
				<span id="ampm"></span>
				<span id="time-emoji"></span>
			</div>
		</section>
		<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @param array $instance Previously saved values from database.
	 *
	 * @see WP_Widget::form()
	 *
	 */
	public function form( $instance ) {
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( 'New title', 'test' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', 'test' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 * @see WP_Widget::update()
	 *
	 */
	public function update( $new_instance, $old_instance ) {
		$instance          = [];
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}
}
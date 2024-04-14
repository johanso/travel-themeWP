<?php

if(!defined('ABSPATH')) die();

class Travels_Posts_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'travels_widget',
			esc_html__( 'Últimos posts con imagenes', 'travels' ), 
			array( 'description' => esc_html__( 'Agrega Post con imagen al Widget', 'travels' ), )
		);
	}

	public function widget( $args, $instance ) { ?>

    <section class="posts-sidebar">
      <header class="posts-sidebar__header">
        <h5 class="posts-sidebar__title">
          <?php echo esc_attr($instance['title']); ?>
        </h5>
      </header>

      <div class="posts-sidebar__content">
        <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $instance['quantity'],
          );
          $posts = new WP_Query($args);
          while ( $posts->have_posts() ) {
            $posts->the_post();
            get_template_part('template-parts/blog-loop');
          }
          wp_reset_query()
        ?>
      </div>
    </section>

    <?php
	}

  public function form( $instance ) {
    $quantity = !empty($instance['quantity']) ? $instance['quantity'] : esc_html('¿cuantos posts quieres mostrar?');
    $title = !empty($instance['title']) ? $instance['title'] : esc_html('');
    ?>

    <p>
      <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
      </label>
    </p>    

    <p>
      <label for="<?php echo esc_attr($this->get_field_id('quantity')); ?>">
        <?php esc_attr_e('¿cuantos posts quieres mostrar?', 'travels'); ?>
      </label>
    </p>
    <p>
      <input class="widefat" id="<?php echo esc_attr($this->get_field_id('quantity')); ?>" name="<?php echo esc_attr($this->get_field_name('quantity')); ?>" type="number" value="<?php echo esc_attr($quantity); ?>">
    </p>
    <?php
  }

	public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['quantity'] = (!empty($new_instance['quantity'])) ? strip_tags($new_instance['quantity']) : '';
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    return $instance;
	}
} 

function travels_registrar_widget() {
  register_widget( 'Travels_Posts_Widget' );
}
add_action( 'widgets_init', 'travels_registrar_widget' );
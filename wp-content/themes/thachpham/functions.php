<?php

	register_nav_menu('main-menu', __('Menu Chính'));

	//* Add post thumbnail to theme
	add_theme_support('post-thumbnails'); //Bật tính năng Set Featured Image cho bài viết
	add_image_size('featured-thumb', 330, 335, true); //Size ảnh thumbnail của .featured-post

	//Insert jQuery from Google Libraries
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
	   wp_enqueue_script('jquery');
	   wp_enqueue_script( 'comment-reply' );
	}

	//Insert main.js
	function main_javascript() {
    wp_enqueue_script( 'mainjs', get_stylesheet_directory_uri() . '/js/main.js', array('jquery') );
	}
	add_action( 'wp_enqueue_scripts', 'main_javascript' );

	// Tạo sidebar
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Sidebar Chính',
			'id' => 'main-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		));
	}

	//Tuỳ biến searchform.
	function custom_searchform( $form ) {
	    $form = '<form role="search" method="get" class="search" action="' . home_url( '/' ) . '" >
	    <input type="text" placeholder="'.__("Nhập từ khoá").'" value="' . get_search_query() . '" name="s" id="s" />
	    <input type="submit" id="searchsubmit" value="Tìm" />
	    </form>';

	    return $form;
	}
	add_filter( 'get_search_form', 'custom_searchform' );

	//Tạo widget danh sách bài mới
	class thachpham_recent_posts extends WP_Widget {

	    function __construct() {
	        parent::__construct(
	          'thachpham-recent-posts',
	          'Bài viết mới kèm thumbnail',
	          array( 'description' => 'Hiển thị bài viết mới bao gồm thumbnail', )
	        );
	}
	    
	    public function widget($args, $instance) {
	            extract($args);
	      
	      $title = apply_filters( 'widget_title', $instance['title'] );
	      $number = $instance['number'];
	    
	          
	            echo $before_widget . $before_title;
	            if ( ! empty ( $title ) ) {
	              echo $title;
	            }
	            echo $after_title;
	        
	        $args = array (
	          'posts_per_page' => $number,
	        );
	        $neatly_posts = new WP_Query($args);
	        if( $neatly_posts->have_posts() ) {
	          echo '<ul>';
	          while( $neatly_posts->have_posts() ) : $neatly_posts->the_post(); ?>
	            <li>
	                <div class="post-thumbnail">
	                	<?php if ( has_post_thumbnail() ) : the_post_thumbnail('thumbnail'); endif; ?>
	                </div>
	                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	            </li>
	          <?php endwhile;
	        }
	        
	        wp_reset_postdata();
	            
	            echo $after_widget;
	        }
	            
	  
	  
	    public function form( $instance ) {
	        $title = strip_tags($instance['title']);
	        if (isset( $instance[ 'number' ] ) ) {
	          $number = $instance['number'];
	        } else { $number = '5'; }

	    ?>
	    <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
	    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
	    <p><em>Use the following options to customize the display.</em></p>
	    
	    <p style="border-bottom:4px double #eee;padding: 0 0 10px;">
	      <label for="<?php echo $this->get_field_id( 'number' ); ?>">Số lượng bài viết cần hiển thị</label>
	      <input id="<?php echo $this->get_field_id( 'number'); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo esc_attr($number); ?>" type="number" style="width:100%;" /><br>
	    </p>
	      
	    <?php }
	 
	    
	    public function update( $new_instance, $old_instance ) {
	        $instance = $old_instance;
	        
	        $instance['title'] = strip_tags($new_instance['title']);
	        $instance['number'] = strip_tags($new_instance['number']);
	        $instance['thumbsize'] = strip_tags($new_instance['thumbsize']);
	        $instance['show_title'] = $new_instance['show_title'] ? 1 : 0;
	        $instance['show_date'] = $new_instance['show_date'] ? 1 : 0; 
	        $instance['show_read_more'] = $new_instance['show_read_more'] ? 1 : 0; 
	          
	        return $instance;
	    }
	        
	}

	function register_thachpham_recent_posts() {
	    register_widget( 'thachpham_recent_posts' );
	}
	add_action( 'widgets_init', 'register_thachpham_recent_posts' );


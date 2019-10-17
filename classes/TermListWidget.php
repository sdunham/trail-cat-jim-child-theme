<?php

namespace TrailCatJim;

class TermListWidget extends \WP_Widget_Tag_Cloud {
    public function __construct() {
		$widget_ops = array(
			'description' => __( 'A list of all tags with at least one associated post.' ),
			'customize_selective_refresh' => true,
        );
        
		\WP_Widget::__construct( 'tcj_term_list', __( 'Term List' ), $widget_ops );
    }
    
    /**
	 * Outputs the content for the current Tag Cloud widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Tag Cloud widget instance.
	 */
	public function widget( $args, $instance ) {
		$current_taxonomy = $this->_get_current_taxonomy( $instance );

		if ( ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			if ( 'post_tag' === $current_taxonomy ) {
				$title = __( 'Tags' );
			} else {
				$tax = get_taxonomy( $current_taxonomy );
				$title = $tax->labels->name;
			}
		}

        $show_count = ! empty( $instance['count'] );
        
        $terms = get_terms( [
            'taxonomy' => $current_taxonomy,
            'hierarchical' => false,
        ] );

		if ( empty( $terms ) ) {
			return;
        }
        
        $termListHTML = '';

        foreach ($terms as $term) {
            $termListHTML .= '<a href="'.get_term_link($term).'" class="">';
            $termListHTML .= $term->name;
            if ($show_count) {
                $termListHTML .= '<span class="tag-link-count"> ('.$term->count.')</span>';
            }
            $termListHTML .= '</a>';
        }

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		echo $args['before_widget'];
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

        // Using widget_tag_cloud class here to take advantage of existing styles used in theme
		echo '<div class="tagcloud widget_tag_cloud">';

		echo $termListHTML;

		echo "</div>\n";
		echo $args['after_widget'];
	}
}
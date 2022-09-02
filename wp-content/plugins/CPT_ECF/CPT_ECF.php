<?php
/*
  Plugin Name: ECF WordPress
  Description: ECF WordPress
  Version: 1.0
  Author: Amina Seraoui
 */

class CPT_ECF {
    public function __construct() {
        add_action('admin_menu', [$this, 'admin_menu']);
        add_shortcode('tests-list', [$this, 'getShortcut']);
    }

    public function admin_menu() {
        add_menu_page('Plugin CPT', 'Plugin CPT', 'manage_options', 'plugin-cpt', [$this, 'render'], 'dashicons-admin-comments', 4);
    }

    public function render() {
        if (!current_user_can('manage_options')) {
            wp_die(__('Vous n\'avez pas les droits pour accéder à cette page.'));
        }

        include(sprintf("%s/view.php", dirname(__FILE__)));
    }

    public function getShortcut()
    {
        $args = [
            'post_type'      => 'tests-comparatifs'
        ];
//
        $query = new WP_Query($args);
        echo '<pre>';
        var_dump($query);
        echo '</pre>';
//
        if($query->have_posts()) :

            while($query->have_posts()) :

                $query->the_post() ;

                $result .= '<div class="cpt-item">';
                $result .= '<div class="cpt-item-image">' . get_the_post_thumbnail() . '</div>';
                $result .= '<div class="cpt-item-name">' . get_the_title() . '</div>';
//                $result .= '<div class="cpt-price">' . get_term_link('price', $type) . '</div>';
                $result .= '<div class="cpt-item-description">' . get_the_content() . '</div>';
                $result .= '</div>';

            endwhile;

            wp_reset_postdata();

        endif;

        return $result;
    }
}

$cpt_ecf = new CPT_ECF();

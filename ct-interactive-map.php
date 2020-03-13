<?php
/* 
Plugin Name: CT Interactive Map 
Author: Vishal Gularia
Version: 1.0.0
Plugin URI: https://clicktecs.com/
Description: Customized Interactive Map plugin for Signs Websites by Clicktecs.
Requires at least: 3.4
Requires PHP: 5.3
Author URI: https://clicktecs.com/
Copyright: Clicktecs
Text Domain: ct-vg

*/ 

// Set your own path here
include( dirname( __FILE__ ) . '/library/admin-page-framework/admin-page-framework.php' );
if ( ! class_exists( 'CtInteractiveMap_AdminPageFramework' ) ) {
    return;
}

class CtInteractiveMap extends CtInteractiveMap_AdminPageFramework {

    public function setUp() {

        $this->setRootMenuPage( 'Interactive Map' ); 

        $this->addSubMenuItems(
            array(
                'title'     => 'General Settings',
                'page_slug' => 'ct_interactive_map_general_settings'
            ),
            array(
                'title'     => 'Interactive Map Outside',
                'page_slug' => 'ct_interactive_map_outside'
            ),
            array(
                'title'     => 'Interactive Map Inside',
                'page_slug' => 'ct_interactive_map_inside',
            ),
            array(
                'title'     => 'Interactive Map Guide',
                'page_slug' => 'ct_interactive_map_guide'
            )
        );


    }

    /**
     * Do page specific settings.
     *
     * @callback        action      load_{page slug}
     */
    public function load_ct_interactive_map_general_settings() {

        $this->addSettingSections(
            array(
                'section_id'    => 'ct_general_settings',
                'title'         => __( 'General Settings', 'ct-vg' )
            )
        );

        $this->addSettingFields(
            'ct_general_settings',  // target section ID
            array(
                'field_id'  => 'main_outside_image',
                'type'      => 'image',
                'title'     => __( 'Main Outside Image', 'admin-page-framework-loader' ),
                'preview' => array(
                    'style' => 'max-width: 200px;',
                ),
            ),
            array(
                'field_id'  => 'main_inside_image',
                'type'      => 'image',
                'title'     => __( 'Main Inside Image', 'admin-page-framework-loader' ),
                'preview' => array(
                    'style' => 'max-width: 200px;',
                ),
            ),
            array(
                'field_id'  => '__submit',
                'type'      => 'submit',
                'save'      => false
            )
        );   
    }    


    /**
     * Do page specific settings.
     *
     * @callback        action      load_{page slug}
     */
    public function load_ct_interactive_map_outside() {

        $this->addSettingSections(
            array(
                'section_id'    => 'vehicle_graphics',
                'title'         => __( 'Vehicle Graphic', 'ct-vg' ),
                'collapsible'       => array(
                    'toggle_all_button' => 'top-right',
                ),
            ),
            array(
                'section_id'        => 'open_now_sign',
                'title'             => 'Open Now',
                'collapsible'       => array(
                    'is_collapsed'     => true,
                ),
            ),
            array(
                'section_id'        => 'creative_sign',
                'title'             => 'Creative Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'clicktecs_sign',
                'title'             => 'Clicktecs Sign',
                'collapsible'       => array(
                    'collapse_others_on_expand' => false,
                ),
            ),
            array(
                'section_id'        => 'handicap_man',
                'title'             => 'Handicap Man Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'wall_sign',
                'title'             => 'Wall Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'window_sign',
                'title'             => 'Window Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'xyz_sign',
                'title'             => 'XYZ Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'door_sign',
                'title'             => 'Door Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'led_sign',
                'title'             => 'LED Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'made_easy_sign',
                'title'             => 'Made Easy Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'directional_sign',
                'title'             => 'Directional Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'roof_sign',
                'title'             => 'Roof Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'wall_graphic_sign',
                'title'             => 'Wall Graphic Sign',
                'collapsible'       => array(
                    'collapse_others_on_expand' => false,
                    'toggle_all_button' => 'bottom-right',
                ),
            )
        );

        require_once( dirname( __FILE__ ) .'/outside_map_fields.php');

    }

    /**
     * Do page specific settings.
     *
     * @callback        action      load_{page slug}
     */
    public function load_ct_interactive_map_inside() {

        $this->addSettingSections(
            array(
                'section_id'    => 'caution_sign',
                'title'         => __( 'Caution Graphic', 'ct-vg' ),
                'collapsible'       => array(
                    'toggle_all_button' => 'top-right',
                ),
            ),
            array(
                'section_id'        => 'white_board_sign',
                'title'             => 'White Board',
                'collapsible'       => array(
                    'is_collapsed'     => true,
                ),
            ),
            array(
                'section_id'        => 'mandela_now_sign',
                'title'             => 'Mandela Now',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'click_sign',
                'title'             => 'Click Sign',
                'collapsible'       => array(
                    'collapse_others_on_expand' => false,
                ),
            ),
            array(
                'section_id'        => 'reception_sign',
                'title'             => 'Reception Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'circul_sign',
                'title'             => 'Circular Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'haxagon_sign',
                'title'             => 'Haxagon Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'table_design',
                'title'             => 'Table Design Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'floor_sign',
                'title'             => 'Floor Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'yellow_wall_sign',
                'title'             => 'Yellow Wall Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'direction_easy_sign',
                'title'             => 'Diraction Easy Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'glassdesign_sign',
                'title'             => 'Glass Design Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'human_sign',
                'title'             => 'Human Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'restroom_sign',
                'title'             => 'Restroom Sign',
                'collapsible'       => array(
                    'collapse_others_on_expand' => false,
                    'toggle_all_button' => 'bottom-right',
                ),
            )
        );

        require_once( dirname( __FILE__ ) .'/inside_map_fields.php');

    }

    /**
     * Triggered in the middle of rendering the page.
     * 
     * Inserts your custom contents here.
     * 
     * @remark      do_{page slug}
     */
    public function do_ct_interactive_map_inside() {

        
        /*<h3>Say Something</h3>
        <p>This is In Side  page!</p>
        */

    }

    public function do_ct_interactive_map_outside() {


        /*<h3>Say Something</h3>
        <p>This is my Out Side  page!</p>
        */
    }

    public function do_ct_interactive_map_guide() {

        echo '<h3>How to add Interactive Map in Pages</h3>
        <p>Use this shortcode <strong>[ct_interactive_map]</strong> to add the interactive map on pages.</p>';

    }

    public function load() {

        /*$this->addSettingSections(
            array(
                'section_id'        => 'my_section',
                'title'             => 'My Section',
            )
        );*/

        

    }

}

new CtInteractiveMap;



/**
 * Include CSS file for Admin.
 */
add_action('admin_enqueue_scripts', 'ct_interactive_map_css_and_js');

function ct_interactive_map_css_and_js($hook)
{

    $current_screen = get_current_screen();

    if ( strpos($current_screen->base, 'ct_interactive_map_general_settings') === false  && strpos($current_screen->base, 'ct_interactive_map_inside') === false && strpos($current_screen->base, 'ct_interactive_map_outside') === false && strpos($current_screen->base, 'ct_interactive_map_guide') === false ) {
        return;
    } else {

        wp_enqueue_style('ct-interactive-map-admin', plugins_url('css/admin/admin.css',__FILE__ ));
    }
}



/**
 * Include CSS file for Front-end.
 */
function ct_interactive_map_scripts() {
    wp_register_style( 'ct-interactive-map',  plugin_dir_url( __FILE__ ) . 'css/ct-interactive-map.css' );
    wp_enqueue_style( 'ct-interactive-map' );

    // 
    wp_enqueue_script( 'ct-interactive-map', plugin_dir_url( __FILE__ ).'js/ct-interactive-map.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ct_interactive_map_scripts' );


function ct_interactive_map_func(){
    include(plugin_dir_path( __FILE__ )."./frontend_layout.php");
    return $final_output;

}
add_shortcode('ct_interactive_map','ct_interactive_map_func');




<?php
/* 
Plugin Name: CT Interactive Map 
Author: Vishal Gularia
Version: 2.0.3
Plugin URI: https://github.com/gulariav/ct-interactive-map
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
                'section_id'        => 'sidewalk_sign',
                'title'             => 'Sidewalk Sign',
                'collapsible'       => array(
                    'is_collapsed'     => true,
                ),
            ),
            array(
                'section_id'        => 'monument_sign', // Old name creative_sign 
                'title'             => 'Monument Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'yard_sign', // Old name clicktecs_sign 
                'title'             => 'Yard Sign',
                'collapsible'       => array(
                    'collapse_others_on_expand' => false,
                ),
            ),
            array(
                'section_id'        => 'ada_sign', // Old name handicap_man 
                'title'             => 'ADA Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'outdoor_sign', // Old name: wall_sign
                'title'             => 'Outdoor Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'window_sign',
                'title'             => 'Window Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'awning_sign', //old name, xyz_sign
                'title'             => 'Awning Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'vinyl_lettering', //old name, door_sign
                'title'             => 'Vinyl Lettering',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'electrical_sign', //old name, led_sign
                'title'             => 'Electrical Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'store_front_sign', //old name, made_easy_sign
                'title'             => 'Store Front Sign',
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
                'section_id'        => 'wall_graphic', //old name, wall_graphic_sign
                'title'             => 'Wall Graphic',
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
                'title'         => __( 'Caution Sign', 'ct-vg' ),
                'collapsible'       => array(
                    'toggle_all_button' => 'top-right',
                ),
            ),
            array(
                'section_id'        => 'retractable_banners', //old name, white_board_sign
                'title'             => 'Retractable Banners',
                'collapsible'       => array(
                    'is_collapsed'     => true,
                ),
            ),
            array(
                'section_id'        => 'ceiling_graphics', //old name, mandela_now_sign
                'title'             => 'Ceiling Graphics',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'hanging_sign', //old name, click_sign
                'title'             => 'Hanging Sign',
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
                'section_id'        => 'front_desk_wall_sign', //old name, circul_sign
                'title'             => 'Front Desk Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'wall_graphics', //old name, haxagon_sign
                'title'             => 'Wall Graphics',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'front_desk_sign', //old name, haxagon_sign
                'title'             => 'Front Desk Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'floor_graphics', //old name, floor_sign
                'title'             => 'Floor Graphics',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'lobby_sign', //old name, floor_sign
                'title'             => 'Lobby Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'exit_sign', //old name, floor_sign
                'title'             => 'Exit Sign',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'privacy_film', //old name, glassdesign_sign
                'title'             => 'Privacy Film',
                'collapsible'       => true
            ),
            array(
                'section_id'        => 'square_hanging_sign', //old name, human_sign
                'title'             => 'Square Hanging Sign',
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




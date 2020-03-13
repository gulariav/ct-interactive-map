<?php 



$main_outside_img_input = CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ct_general_settings', 'main_outside_image' ) ); 
$main_inside_img_input = CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ct_general_settings', 'main_inside_image' ) ); 

if( !empty( $main_outside_img_input )) 
  $main_outside_img_src = $main_outside_img_input;
else 
  $main_outside_img_src = plugin_dir_url( __FILE__ ).'interactiveMap-outside.jpg';

if( !empty( $main_inside_img_input )) 
  $main_inside_img_src = $main_inside_img_input;
else 
  $main_inside_img_src = plugin_dir_url( __FILE__ ).'banner-indoor.jpg';
  
$final_output = '
<div class="im-header">
  <div class="im-switch-bar">
    <div class="im-legend">
        <input type="button" value="Outside" class="outside-btn btn active"  id="im-outside-btn">
        <input type="button" value="Inside" class="inside-btn btn"  id="im-inside-btn">
    </div>
  </div>
</div>
<div class="intetactivemap im-outside">

   		<img src="'.$main_outside_img_src.'">
   		<div class="car">
   			<div class="car-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'image' ) ).'">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
   		<div class="open-now">
   			<div class="open-now-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'open_now_sign', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'open_now_sign', 'image' ) ).'" alt="">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'open_now_sign', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'open_now_sign', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
   		<div class="creative">
   			<div class="creative-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'creative_sign', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'creative_sign', 'image' ) ).'" alt="">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'creative_sign', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'creative_sign', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
   		<div class="clicktecs">
   			<div class="clicktecs-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'clicktecs_sign', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'clicktecs_sign', 'image' ) ).'" alt="">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'clicktecs_sign', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'clicktecs_sign', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
        <div class="handicap-man">
            <div class="handicap-man-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'handicap_man', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'handicap_man', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'handicap_man', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'handicap_man', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="wall-sign">
            <div class="wall-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="window-sign">
            <div class="window-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'window_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'window_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'window_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'window_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="xyz-sign">
            <div class="xyz-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'xyz_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'xyz_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'xyz_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'xyz_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="door-sign">
            <div class="door-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'door_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'door_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'door_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="led-sign">
            <div class="led-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'led_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'led_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'led_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'led_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="made-easy">
            <div class="made-easy-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'made_easy_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'made_easy_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'made_easy_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'made_easy_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="Directional-sign">
            <div class="Directional-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'directional_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'directional_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'directional_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'directional_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="roof-sign">
            <div class="roof-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'roof_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'roof_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'roof_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'roof_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="wall-graphics-sign">
            <div class="wall-graphics-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
   </div>

   <div class="intetactivemap im-inside">
      <img src="'.$main_inside_img_src.'">
      <div class="caution">
        <div class="caution-inner">
          <div class="">
            <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'caution_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'caution_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'caution_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'caution_sign', 'link' ) ).'">View More..</a>
          </div>
        </div>
      </div>
      <div class="white-board">
        <div class="white-board-inner">
          <div class="">
            <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'white_board_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'white_board_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'white_board_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'white_board_sign', 'link' ) ).'">View More..</a>
          </div>
        </div>
      </div>
        <div class="mandela-now">
            <div class="mandela-inner">
                <div class="">
                  <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'mandela_now_sign', 'title' ) ).'</h4>
                  <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'mandela_now_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'mandela_now_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'mandela_now_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
      <div class="click">
        <div class="click-inner">
          <div class="">
            <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'click_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'click_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'click_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'click_sign', 'link' ) ).'">View More..</a>
          </div>
        </div>
      </div>
      <div class="reception">
        <div class="reception-inner">
          <div class="">
            <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'reception_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'reception_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'reception_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'reception_sign', 'link' ) ).'">View More..</a>
          </div>
        </div>
      </div>

        <div class="circul">
            <div class="circul-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'circul_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'circul_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'circul_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'circul_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="haxagon">
            <div class="haxagon-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'haxagon_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'haxagon_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'haxagon_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'haxagon_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="table-design">
            <div class="table-design-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'table_design', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'table_design', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'table_design', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'table_design', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="floor-sign">
            <div class="floor-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="yellow-wall">
            <div class="yellow-wall-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yellow_wall_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yellow_wall_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yellow_wall_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yellow_wall_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="diraction-easy">
            <div class="diraction-easy-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'direction_easy_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'direction_easy_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'direction_easy_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'direction_easy_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="glassdesign-sign">
            <div class="glassdesign-sign-inner">
                <div class="">
                   <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'glassdesign_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'glassdesign_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'glassdesign_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'glassdesign_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="human-sign">
            <div class="human-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'human_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'human_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'human_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'human_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="restroom-sign">
            <div class="restroom-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'restroom_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'restroom_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'restroom_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'restroom_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
   </div>
   ';
<?php 



$main_outside_img_input = CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ct_general_settings', 'main_outside_image' ) ); 
$main_inside_img_input = CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ct_general_settings', 'main_inside_image' ) ); 

if( !empty( $main_outside_img_input )) 
  $main_outside_img_src = $main_outside_img_input;
else 
  $main_outside_img_src = plugin_dir_url( __FILE__ ).'img/interactiveMap-outside.jpg';

if( !empty( $main_inside_img_input )) 
  $main_inside_img_src = $main_inside_img_input;
else 
  $main_inside_img_src = plugin_dir_url( __FILE__ ).'img/banner-indoor.jpg';
  
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

   		<img src="'.$main_outside_img_src.'" alt="Outside Signs Interactive Main Image">
   		<div class="vehicle">
   			<div class="vehicle-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'image' ) ).'">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vehicle_graphics', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
   		<div class="sidewalk-sign">
   			<div class="sidewalk-sign-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'sidewalk_sign', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'sidewalk_sign', 'image' ) ).'" alt="">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'sidewalk_sign', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'sidewalk_sign', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
   		<div class="monument-sign">
   			<div class="monument-sign-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'monument_sign', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'monument_sign', 'image' ) ).'" alt="">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'monument_sign', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'monument_sign', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
   		<div class="yard-sign">
   			<div class="yard-sign-inner">
   				<div class="">
   					<h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yard_sign', 'title' ) ).'</h4>
   					<img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yard_sign', 'image' ) ).'" alt="">
   					<p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yard_sign', 'desc' ) ).'</p>
   					<a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'yard_sign', 'link' ) ).'">View More..</a>
   				</div>
   			</div>
   		</div>
        <div class="ada-sign">
            <div class="ada-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ada_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ada_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ada_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ada_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="outdoor-sign">
            <div class="outdoor-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'outdoor_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'outdoor_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'outdoor_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'outdoor_sign', 'link' ) ).'">View More..</a>
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
        <div class="awning-sign">
            <div class="awning-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'awning_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'awning_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'awning_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'awning_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="vinyl_lettering">
            <div class="vinyl_lettering-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vinyl_lettering', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vinyl_lettering', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vinyl_lettering', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'vinyl_lettering', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="electrical-sign">
            <div class="electrical-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'electrical_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'electrical_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'electrical_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'electrical_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="store-front-sign">
            <div class="store-front-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'store_front_sign', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'store_front_sign', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'store_front_sign', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'store_front_sign', 'link' ) ).'">View More..</a>
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
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic', 'title' ) ).'</h4>
                    <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic', 'image' ) ).'" alt="">
                    <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic', 'desc' ) ).'</p>
                    <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphic', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
   </div>

   <div class="intetactivemap im-inside">
      <img src="'.$main_inside_img_src.'" alt="Inside Signs Interactive Main Image">
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
      <div class="retractable-banners">
        <div class="retractable-banners-inner">
          <div class="">
            <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'retractable_banners', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'retractable_banners', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'retractable_banners', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'retractable_banners', 'link' ) ).'">View More..</a>
          </div>
        </div>
      </div>
        <div class="ceiling-graphics">
            <div class="ceiling-graphics-inner">
                <div class="">
                  <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ceiling_graphics', 'title' ) ).'</h4>
                  <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ceiling_graphics', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ceiling_graphics', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'ceiling_graphics', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
      <div class="hanging-sign">
        <div class="hanging-sign-inner">
          <div class="">
            <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'hanging_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'hanging_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'hanging_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'hanging_sign', 'link' ) ).'">View More..</a>
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

        <div class="front-desk-wall-sign">
            <div class="front-desk-wall-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_wall_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_wall_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_wall_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_wall_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="wall-graphics">
            <div class="wall-graphics-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphics', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphics', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphics', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'wall_graphics', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="front-desk-sign">
            <div class="front-desk-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'front_desk_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="floor-sign">
            <div class="floor-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_graphics', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_graphics', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_graphics', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'floor_graphics', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="lobby-sign">
            <div class="lobby-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'lobby_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'lobby_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'lobby_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'lobby_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="exit-sign">
            <div class="exit-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'exit_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'exit_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'exit_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'exit_sign', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="privacy-film">
            <div class="privacy-film-inner">
                <div class="">
                   <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'privacy_film', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'privacy_film', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'privacy_film', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'privacy_film', 'link' ) ).'">View More..</a>
                </div>
            </div>
        </div>
        <div class="square-hanging-sign">
            <div class="square-hanging-sign-inner">
                <div class="">
                    <h4>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'square_hanging_sign', 'title' ) ).'</h4>
            <img src="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'square_hanging_sign', 'image' ) ).'">
            <p>'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'square_hanging_sign', 'desc' ) ).'</p>
            <a href="'.CtInteractiveMap_AdminPageFramework::getOption( 'CtInteractiveMap', array( 'square_hanging_sign', 'link' ) ).'">View More..</a>
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
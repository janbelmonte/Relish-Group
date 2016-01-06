<?php

add_theme_support( 'post-thumbnails' );
add_action('do_meta_boxes', 'customposttype_image_box');

function customposttype_image_box() {

	remove_meta_box( 'postimagediv', 'kumori-item', 'side' );
	remove_meta_box( 'postimagediv', 'carousel-image', 'side' );

	add_meta_box('postimagediv', __('Custom Image'), 'post_thumbnail_meta_box', 'kumori-item', 'advanced', 'high');
	add_meta_box('postimagediv', __('Custom Image'), 'post_thumbnail_meta_box', 'carousel-image', 'advanced', 'high');

}

/**************************************************************************
 * adds the Note Meta Box
 **************************************************************************/
function add_note_meta_box() {
    add_meta_box(
        'note_meta_box', // $id
        'Notes', // $title
        'show_note_meta_box', // $callback
        'post', // $page
        'side', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_note_meta_box');

function show_note_meta_box() {
    global $post;
    $meta = get_post_meta($post->ID, 'note', true);

    // Use nonce for verification
  echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    echo '<p>';
    echo '<label for="note">Note for Category/Menu Item</label>';
    echo '<br />';
    echo '<input class="widefat" type="text" name="note" id="note" value="'.$meta.'" size="30" />';
    echo '</p>';
}
/**************************************************************************
 * Save the meta fields on save of the post
 **************************************************************************/
function save_note_meta($post_id) {
    // verify nonce
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    $old = get_post_meta($post_id, "note", true);

    $new = $_POST["note"];

    if ($new && $new != $old) {
        update_post_meta($post_id, "note", $new);
    } elseif ('' == $new && $old) {
        delete_post_meta($post_id, "note", $old);
    }
}
add_action('save_post', 'save_note_meta');


/**************************************************************************
 * adds the Sub Menu Item Meta Box
 **************************************************************************/
function add_submenu_item_meta_box() {
    add_meta_box(
        'submenu_item_meta_box', // $id
        'Sub Menu Item', // $title
        'show_submenu_item_meta_box', // $callback
        'post', // $page
        'side', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_submenu_item_meta_box');

function show_submenu_item_meta_box() {
    global $post;
    $meta = get_post_meta($post->ID, 'submenu_item', true);

    // Use nonce for verification
  echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

    echo '<p>';
    echo "<span>Place the Sub Menu Item in a comma-separated list. <br>For example: <em>Food Item_Price,Food Item_Price</em></span>";
    echo '<input class="widefat" type="text" name="submenu_item" id="submenu_item" value="'.$meta.'" size="30" />';
    echo '</p>';
}
/**************************************************************************
 * Save the meta fields on save of the post
 **************************************************************************/
function save_submenu_item_meta($post_id) {
    // verify nonce
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    $old = get_post_meta($post_id, "submenu_item", true);

    $new = $_POST["submenu_item"];

    if ($new && $new != $old) {
        update_post_meta($post_id, "submenu_item", $new);
    } elseif ('' == $new && $old) {
        delete_post_meta($post_id, "submenu_item", $old);
    }
}
add_action('save_post', 'save_submenu_item_meta');


/**************************************************************************
 * Meta Box Plugin for Menu Item Post Type
 **************************************************************************/
add_filter( 'rwmb_meta_boxes', 'trg_menu_item_meta_boxes' );
function trg_menu_item_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Menu Item Details', 'trg_' ),
        'priority'   => 'high',
        'post_types' => 'menu-item',
        'fields'     => array(
            array(
                'id'   => 'price',
                'name' => __( 'Price', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'note',
                'name' => __( 'Note', 'trg_' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'sub_menu_item_1',
                'name' => __( 'Sub Menu Item 1', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_1_price',
                'name' => __( 'Sub Menu Item 1 Price', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_2',
                'name' => __( 'Sub Menu Item 2', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_2_price',
                'name' => __( 'Sub Menu Item 1 Price', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_3',
                'name' => __( 'Sub Menu Item 3', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_3_price',
                'name' => __( 'Sub Menu Item 1 Price', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_4',
                'name' => __( 'Sub Menu Item 4', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_4_price',
                'name' => __( 'Sub Menu Item 1 Price', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_5',
                'name' => __( 'Sub Menu Item 5', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'sub_menu_item_5_price',
                'name' => __( 'Sub Menu Item 1 Price', 'trg_' ),
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}

/**************************************************************************
 * Meta Box Plugin for Kumori Item Post Type
 **************************************************************************/
add_filter( 'rwmb_meta_boxes', 'trg_kumori_item_meta_boxes' );
function trg_kumori_item_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Kumori Item Details', 'trg_' ),
        'priority'   => 'high',
        'post_types' => 'kumori-item',
        'fields'     => array(
            array(
                'id'   => 'price',
                'name' => __( 'Price', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'note',
                'name' => __( 'Note', 'trg_' ),
                'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}

/**************************************************************************
 * Meta Box Plugin for Branches Post Type
 **************************************************************************/
add_filter( 'rwmb_meta_boxes', 'trg_branches_meta_boxes' );
function trg_branches_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Branch Details', 'trg_' ),
        'priority'   => 'high',
        'post_types' => 'branch',
        'fields'     => array(
            array(
                'id'   => 'address_line_1',
                'name' => __( 'Address Line 1', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'city',
                'name' => __( 'City', 'trg_' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'branch_contact_details',
                'name' => __( 'Contact Details', 'trg_' ),
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}

/************************************************
 * Remove Editor from menu-item
 ************************************************/
 function remove_editor() {
   remove_post_type_support('menu-item', 'editor');
   remove_post_type_support('kumori-item', 'editor');
   remove_post_type_support( 'branch', 'editor' );
 }
 add_action('admin_init', 'remove_editor');

/* Load template with specified tag */
function menu_item_query($restaurant, $menu_category){
  $categoryArgs = array(
    'post_type' => "menu-item",
    'tax_query' => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => $restaurant,
      ),
      array(
        'taxonomy' => 'tag',
        'field'    => 'name',
        'terms'    => $menu_category,
      ),
    ),
    'order' => 'ASC',
    'order_by' => 'id',
  );
  $categoryQuery = new WP_Query($categoryArgs);
  return $categoryQuery;
}
function menu_item_loop($queryObj){
  if ( $queryObj -> have_posts()) {
    while ( $queryObj -> have_posts() ) {
      $queryObj -> the_post();
      $postID = get_the_ID();

      if( rwmb_meta( 'sub_menu_item_1' ) != '' ){
				echo '<tr>';
				switch($restaurant){
					case 'osakaohsho':
						echo '<td class="tg-yw4l"><b>'.get_the_title($postID).'</b></td>';
						break;
						default:
						echo '<td class="tg-yw4l">'.get_the_title($postID).'</td>';
				}
        echo '<td class="tg-yw4l">';
        if( rwmb_meta( 'price' ) != '' ){ echo rwmb_meta( 'price' ); }
        echo '</td>
	      </tr>';
        $sub_menu_item_1 = rwmb_meta( 'sub_menu_item_1' );
        $sub_menu_item_1_price = rwmb_meta( 'sub_menu_item_1_price' );
        $sub_menu_item_2 = rwmb_meta( 'sub_menu_item_2' );
        $sub_menu_item_2_price = rwmb_meta( 'sub_menu_item_2_price' );
        $sub_menu_item_3 = rwmb_meta( 'sub_menu_item_3' );
        $sub_menu_item_3_price = rwmb_meta( 'sub_menu_item_3_price' );
        $sub_menu_item_4 = rwmb_meta( 'sub_menu_item_4' );
        $sub_menu_item_4_price = rwmb_meta( 'sub_menu_item_4_price' );
        $sub_menu_item_5 = rwmb_meta( 'sub_menu_item_5' );
        $sub_menu_item_5_price = rwmb_meta( 'sub_menu_item_5_price' );
        $subItems = array(
          array(
            'id' => $sub_menu_item_1,
            'price' => $sub_menu_item_1_price,
          ),
          array(
            'id' => $sub_menu_item_2,
            'price' => $sub_menu_item_2_price,
          ),
          array(
            'id' => $sub_menu_item_3,
            'price' => $sub_menu_item_3_price,
          ),
          array(
            'id' => $sub_menu_item_4,
            'price' => $sub_menu_item_4_price,
          ),
          array(
            'id' => $sub_menu_item_5,
            'price' => $sub_menu_item_5_price,
          ),

        );
        foreach ($subItems as $item) {
          if( isset($item[id]) ){
            echo '<tr>
              <td class="tg-yw4l indent">'.$item[id].'</td>
              <td class="tg-yw4l">'.$item[price].'</td>
            </tr>';
          }
        }
      } else {
				echo '<tr>
	        <td class="tg-yw4l">'.get_the_title($postID).'</td>
	        <td class="tg-yw4l">';
	        if( rwmb_meta( 'price' ) != '' ){ echo rwmb_meta( 'price' ); }
	        echo '</td>
	      </tr>';
			}
    }
  }
}

function kumori_loop(){
  $kumoriArgs = array(
    'post_type' => "kumori-item",
    'order' => 'ASC',
    'order_by' => 'id',
  );
  $kumoriQuery = new WP_Query($kumoriArgs);
  $evenFlag = true; // Checks if tint should be light(even=>true) or dark(odd=>false)
  if( $kumoriQuery -> have_posts() ){
    while( $kumoriQuery -> have_posts() ){
      $kumoriQuery -> the_post();
      $postID = get_the_ID();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full);
        if( $evenFlag ){
          echo '<div class="menu-item bg-light-grey" style="background: url('.$src['0'].')"><p class="imgDescription">'.get_the_title($postID).'</p></div>';
        } else {
          echo '<div class="menu-item bg-dark-grey" style="background: url('.$src['0'].')"><p class="imgDescription">'.get_the_title($postID).'</p></div>';
        }
        $evenFlag = ($evenFlag ? false : true);
    }
  }
}

function branch_query($restaurant){
  $branchArgs = array(
    'post_type' => "branch",
    'tax_query' => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => $restaurant,
      ),
    ),
    'order' => 'ASC',
    'order_by' => 'id',
  );
  $branchQuery = new WP_Query($branchArgs);
  return $branchQuery;
}

function branch_loop($restaurant, $queryObj){
  if( $queryObj -> have_posts() ){
    while( $queryObj -> have_posts() ){
      $queryObj -> the_post();
      $postID = get_the_ID();
			switch($restaurant){
				case 'osakaohsho':
					echo
		      '<div class="three columns">
		      <p><b>'.get_the_title($postID).'</b><br/>
		      '.rwmb_meta( 'address_line_1' ).',<br/>
		      '.rwmb_meta( 'city' ).'<br/>
		      '.rwmb_meta("branch_contact_details").'</p>
		      </div>';
					break;
				case 'kumori':
					echo '<div class="four columns">
						<p class="item-name">'.get_the_title($postID).'</p>
						<p class="item-desc">'.rwmb_meta( 'address_line_1' ).'<br/>'.rwmb_meta("branch_contact_details").'</p>
					</div>';
					break;
				case 'weenamkee':
					if (rwmb_meta('address_line_1') != '') {
						echo '<div class="wnk-menu-item">
							<p class="item-name">'.get_the_title($postID).'</p>
							<p class="item-desc">'.rwmb_meta( 'address_line_1' ).', '.rwmb_meta( 'city' ).'<br />'.rwmb_meta("branch_contact_details").'</p>
						</div>';
					} else {
						echo '<div class="wnk-menu-item">
							<p class="item-name">'.get_the_title($postID).'</p>
							<p class="item-desc">'.rwmb_meta( 'city' ).'<br />'.rwmb_meta("branch_contact_details").'</p>
						</div>';
					}

					break;
			}

    }
  }
}
//
function carousel_query($restaurant){
  $carouselArgs = array(
    'post_type' => "carousel-image",
    'tax_query' => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => $restaurant,
      ),
    ),
    'order' => 'ASC',
    'order_by' => 'id',
  );
  $carouselQuery = new WP_Query($carouselArgs);
  return $carouselQuery;
}

function carousel_loop($restaurant, $queryObj){
  if( $queryObj -> have_posts() ){
    $counter = 0;
    while( $queryObj -> have_posts() ){
      $queryObj -> the_post();
      $postID = get_the_ID();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full);
      switch($restaurant){
        case 'osakaohsho':
          echo '<img class="osaka-carousel-img" src="'.$src['0'].'" />';
          break;
        case 'weenamkee':
          echo '<img class="wnk-carousel-img" src="'.$src['0'].'"/>';
          break;
        case 'kumori':
            if( $counter == 0 ){
							$link = $src['0'];
              echo '<div class="item active" style="background-image:url('.$link.'); background-size:cover; background-position: center center; height:100vh;">';
              echo '<div class="carousel-caption">';
              echo '</div>';
              echo '</div>';
            } else {
							$link = $src['0'];
              echo '<div class="item" style="background-image:url('.$link.'); background-size:cover; background-position: center center; height:100vh;">
        	      <div class="carousel-caption">
        	      </div>
        	    </div>';
            }
          break;
				case 'relish':
            if( $counter == 0 ){
							$link = $src['0'];
              echo '<div class="item active" style="background-image:url('.$link.'); background-size:cover; background-position: center center; height:100vh;">';
              echo '<div class="carousel-caption">';
              echo '</div>';
              echo '</div>';
            } else {
							$link = $src['0'];
              echo '<div class="item" style="background-image:url('.$link.'); background-size:cover; background-position: center center; height:100vh;">
        	      <div class="carousel-caption">
        	      </div>
        	    </div>';
            }
          break;
      }
      $counter++;
    }
  }
}

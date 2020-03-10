<?php
/**
 * Electro Child
 *
 * @package electro-child
 */

/**
 * Include all your custom code here
 */

add_action('wp_ajax_wdm_add_user_custom_data_options', 'wdm_add_user_custom_data_options_callback');
add_action('wp_ajax_nopriv_wdm_add_user_custom_data_options', 'wdm_add_user_custom_data_options_callback');

function wdm_add_user_custom_data_options_callback()
{
/*  $objProduct = new WC_Product_Variable();
  $objProduct->set_name("Product Title");
$objProduct->set_status("publish");  // can be publish,draft or any wordpress post status
$objProduct->set_catalog_visibility('visible'); // add the product visibility status
$objProduct->set_description("Product Description");
$objProduct->set_sku("product-sku"); //can be blank in case you don't have sku, but You can't add duplicate sku's
$objProduct->set_price(10.55); // set product price
$objProduct->set_regular_price(10.55); // set product regular price
$objProduct->set_manage_stock(true); // true or false
$objProduct->set_stock_quantity(10);
$objProduct->set_stock_status('instock'); // in stock or out of stock value
$objProduct->set_backorders('no');
$objProduct->set_reviews_allowed(true);
$objProduct->set_sold_individually(false);
$objProduct->set_category_ids(array(1,2,3)); // array of 
$product_id = $objProduct->save(); 
$attributes = array(
  array("name"=>"Size","options"=>array("S","L","XL","XXL"),"position"=>1,"visible"=>1,"variation"=>1),
  array("name"=>"Color","options"=>array("Red","Blue","Black","White"),"position"=>2,"visible"=>1,"variation"=>1)
);
if($attributes){
  $productAttributes=array();
  foreach($attributes as $attribute){
    $attr = wc_sanitize_taxonomy_name(stripslashes($attribute["name"])); // remove any unwanted chars and return the valid string for taxonomy name
    $attr = 'pa_'.$attr; // woocommerce prepend pa_ to each attribute name
    if($attribute["options"]){
      foreach($attribute["options"] as $option){
        wp_set_object_terms($product_id,$option,$attr,true); // save the possible option value for the attribute which will be used for variation later
      }
    }
    $productAttributes[sanitize_title($attr)] = array(
      'name' => sanitize_title($attr),
      'value' => $attribute["options"],
      'position' => $attribute["position"],
      'is_visible' => $attribute["visible"],
      'is_variation' => $attribute["variation"],
      'is_taxonomy' => '1'
    );
  }
  update_post_meta($product_id,'_product_attributes',$productAttributes); // save the meta entry for product attributes
}


//Variations

$variations = array(
  array("regular_price"=>10.11,"price"=>10.11,"sku"=>"ABC1","attributes"=>array(array("name"=>"Size","option"=>"L"),array("name"=>"Color","option"=>"Red")),"manage_stock"=>1,"stock_quantity"=>10),
  array("regular_price"=>10.11,"price"=>10.11,"sku"=>"ABC2","attributes"=>array(array("name"=>"Size","option"=>"XL"),array("name"=>"Color","option"=>"Red")),"manage_stock"=>1,"stock_quantity"=>10)
  
);
if($variations){
  try{
    foreach($variations as $variation){
      $objVariation = new WC_Product_Variation();
      $objVariation->set_price($variation["price"]);
      $objVariation->set_regular_price($variation["regular_price"]);
      $objVariation->set_parent_id($product_id);
      if(isset($variation["sku"]) && $variation["sku"]){
        $objVariation->set_sku($variation["sku"]);
      }
      $objVariation->set_manage_stock($variation["manage_stock"]);
      $objVariation->set_stock_quantity($variation["stock_quantity"]);
      $objVariation->set_stock_status('instock'); // in stock or out of stock value
      $var_attributes = array();
      foreach($variation["attributes"] as $vattribute){
        $taxonomy = "pa_".wc_sanitize_taxonomy_name(stripslashes($vattribute["name"])); // name of variant attribute should be same as the name used for creating product attributes
        $attr_val_slug =  wc_sanitize_taxonomy_name(stripslashes($vattribute["option"]));
        $var_attributes[$taxonomy]=$attr_val_slug;
      }
      $objVariation->set_attributes($var_attributes);
      $objVariation->save();
    }
  }
  catch(Exception $e){
    // handle exception here
  }
}*/
$product_id = 5496;
$quantity = 1;
$variation_id = 0;
$variation_id = 5498;
$variation    = array(
  'Color' => 'Blue',
);

$passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
$product_status = get_post_status($product_id);

if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity) && 'publish' === $product_status) {

  do_action('woocommerce_ajax_added_to_cart', $product_id);

  if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
    wc_add_to_cart_message(array($product_id => $quantity), true);
  }

  WC_AJAX :: get_refreshed_fragments();
} else {

  $data = array(
    'error' => true,
    'status' => $product_status,
    'product_id'=>$product_id,
    'passed'=>$passed_validation,
    'add_cart'=>WC()->cart->add_to_cart($product_id, $quantity, $variation_id),
    'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));

  echo wp_send_json($data);
}

wp_die();
}
function add_theme_scripts()
{
  wp_enqueue_style( 'pet-product-style', get_stylesheet_directory_uri().'/pet-product.css' ,true,'1.1','all');
  wp_enqueue_style( 'summernote', 'https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css',true,'1.1','all');
  wp_enqueue_style( 'bootstrap-toogle', 'https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css',true,'1.1','all');
  wp_enqueue_style( 'timepicket-css', 'https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css',true,'1.1','all');
  wp_enqueue_style( 'datepicker-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css',true,'1.1','all');

  wp_enqueue_script(  'bootstrap-min-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', 1.1, true);
  wp_enqueue_script(  'jquery-timepicker', 'https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js', 1.1, true);
    wp_enqueue_script(  'bootstrap-toogle', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js', 1.1, true);
  wp_enqueue_script(  'summernote-js', 'https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js', 1.1, true);
  wp_enqueue_script(  'bootstrap-datepicker-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js', 1.1, true);
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

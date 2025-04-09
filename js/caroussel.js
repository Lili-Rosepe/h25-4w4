(function(){

console.log("caroussel.js")

})()
function theme_4w4_enqueue_styles() { 
  wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css');  
  wp_enqueue_style('mon-style-style', get_stylesheet_uri()); 
  wp_enqueue_script(
    'destination_restapi',
    get_template_directory_uri() . '/js/destination.js',
    array(),
    filemtime(get_template_directory() . 
    '/js/destination.js'),
    true
  );
  } 
  /* 
  */
  add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');
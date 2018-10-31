<?php
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );



register_nav_menus( array(
    'primary' => __( 'Primary Menu',      'mytheme' ),
    ) );

add_action( 'wp_enqueue_scripts', 'add_style' );
  function add_style(){
    
   

    //<!-- Bootstrap core CSS -->    
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,700|Work+Sans' );

  
    //<!-- Custom fonts for this template -->    
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );  
    wp_enqueue_style( 'styleTheme', get_template_directory_uri(). '/style.css' );

    //wp_enqueue_style('main-styles', get_template_directory_uri() . '/senorcoders.min.css', array(), filemtime(get_template_directory() . '/senorcoders.min.css'), false); //live
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/src/css/senorcoders.css', array(), filemtime(get_template_directory() . '/src/css/senorcoders.css'), false); //dev
		
  }



  add_action( 'wp_enqueue_scripts', 'add_script' );
  function add_script(){

     //<!-- Bootstrap core JavaScript -->
    wp_enqueue_script( 'popperJs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array( 'jquery' ) );
    
    wp_enqueue_script( 'boostrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array( 'jquery' ) );
	  wp_enqueue_script( 'select2js', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js', array( 'jquery' ) );
    
    wp_enqueue_script( 'senorcoders', get_template_directory_uri() . '/js/senorcoders.min.js', array('jquery'), null , true );

  }

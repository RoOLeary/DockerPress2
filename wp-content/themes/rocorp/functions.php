<?php

add_action( 'init', function() {
   register_post_type( 'docs', [
      'show_ui' => true,
      'labels'  => [
        //@see https://developer.wordpress.org/themes/functionality/internationalization/
      	'menu_name' => __( 'Docs', 'rocorp' ),
      ],
      'public' => true,
      'has_archive' => false,
      'show_in_graphql' => true,
      'graphql_name' => 'document',
      'graphql_single_name' => 'document',
      'graphql_plural_name' => 'documents',
      'graphql_plural_type' => 'Documents',


      'rewrite' => array( 'slug' => 'documents' ), // my custom slug
   ] );
} );


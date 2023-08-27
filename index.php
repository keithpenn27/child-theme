<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link git@github.com:keithpenn27/child-theme.git
*
* @package WordPress
* @subpackage Child Theme
* @since Parent Theme 1.0
*/

get_header(  );

if ( have_posts(  ) ) {
  while ( have_posts(  ) ) {
    the_post(  );
    the_title( __( sprintf('<h2 class="header ct-header"><a class="link ct-link" href="%s">', get_permalink( ) ) ), '</a></h2>' );
  }
}

get_footer(  );
?>
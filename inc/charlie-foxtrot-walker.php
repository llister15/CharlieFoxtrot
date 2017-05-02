<?php

/*  Walker Classes  */

Class WS_Walker_Nav_Primary extends Walker_Nav_menu {

 public function start_lvl( &$output, $depth = 0, $args = array() ) {
    //ul
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";

  }

  
  public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0) {
    //li a span

    //li element
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty( $item->classes ) ? aray() : (array) $item->classes;

    $classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';
    $classes[] = ( $item->current  || $item->current_item_anchestor) ? 'active' : '';
    $classes[] = 'menu-item-' . $item->ID;
    if ( $depth && $args->walker->has_children ) {
      $classes[] = 'dropdown-submenu';
    }

    $class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args ) );
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen( $id ) ? ' id="' .esc_attr($id) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

    //a element
    $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters( 'the_title' , $item->title, $item->ID ) . $args->link_after;
    $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

  }

/*
  public function end_el() {

  }

  public function end_lvl() {

  }
*/

}

/* For making a mega menu with bootstrap  */

Class WS_Walker_Nav_Mega extends Walker_Nav_menu {

 public function start_lvl( &$output, $depth = 0, $args = array() ) {
    //ul
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    if ($depth >= 1) {
        $output .= "\n$indent<ul role=\"row\" class=\"row$submenu depth_$depth\">\n";
    } else {
        $output .= "\n$indent<ul role=\"mega-menu\" class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

  }

  
  public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0) {
    //li a span

    //li element
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    if ( 0 === strcasecmp( $item->attr_title, 'mega-menu' ) && 1 === $depth ) {
        $output .= $indent . '<li role="presentation" class="container">';
    } elseif ( 0 === strcasecmp( $item->title, 'mega-menu' ) && 1 === $depth ) {
                $output .= $indent . '<li role="presentation" class="container">';
    } elseif ( 2 == $depth ) {
        $output .= $indent . '<li role="presentation" class="col-xs-6 col-md-4 text-center">';

    //a element @$depth >=1
    $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
    $attributes .= ! empty($item->title) ? ' id="' . esc_attr($item->title) . '"' : '';
    $attributes .= ! empty($item->classes) ? ' class="' . esc_attr(array_values($item->classes)[0]) . '"' : '';

    $attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters( 'the_title' , $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    } else {

    // $li_attributes for any attributes that you may want to add.
    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty( $item->classes ) ? aray() : (array) $item->classes;

    $classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';
    $classes[] = ( $item->current  || $item->current_item_anchestor) ? 'active' : '';
    $classes[] = 'menu-item-' . $item->ID;
    if ( $depth && $args->walker->has_children ) {
      $classes[] = 'dropdown-submenu';
    }

    $class_names = join( ' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args ) );
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen( $id ) ? ' id="' .esc_attr($id) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
   

    //a element
    $attributes = ! empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= ! empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters( 'the_title' , $item->title, $item->ID ) . $args->link_after;
    $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
  }

/*
  public function end_el() {

  }

  public function end_lvl() {

  }
*/

}
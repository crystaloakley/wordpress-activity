
<?php
/**
 * Plugin Name: Event Custom Post Type
 * Plugin URI: http://crystaloakley.x10.bz
 * Description: A simple plugin that adds an event custom post type.
 * Version: 0.1
 * Author: Crystal Oakley
 * Author URI: http://crystaloakley.x10.bz
 * License: GPL2
 */

/*  Copyright 2016 Crystal Oakley (email : crystaloakley@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
                

                
function my_custom_events() {
    
    $labels = array(
        'name'               => 'Events',
        'singular_name'      => 'Events',
        'menu_name'          => 'Events',
        'name_admin_bar'     => 'Events',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Events',
        'new_item'           => 'New Events',
        'edit_item'          => 'Edit Events',
        'view_item'          => 'View Events',
        'all_items'          => 'All Events',
        'search_items'       => 'Search Events',
        'parent_item_colon'  => 'Parent Events:',
        'not_found'          => 'No Events found.',
        'not_found_in_trash' => 'No Events found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-calendar-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Events' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'events', $args );
}
add_action( 'init', 'my_custom_events' );

// Flush rewrite rules to add "review" as a permalink slug
function my_rewrite_flush() {
    my_custom_events();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
                
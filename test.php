<?php
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";


function add_dynamic_menu_item_for_profile_link($items, $args) {
    $root_url = site_url();
    $url = $root_url.'/login/';
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        $username = $user->user_login;
        $url = $root_url."/members/$username/profile/";
    }
    $items .= '<li id="my-profile" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-last"><a href="' . $url . '">My Profile</a></li>';
    return $items;
}
add_filter('wp_nav_menu_items', 'add_dynamic_menu_item_for_profile_link', 10, 2);

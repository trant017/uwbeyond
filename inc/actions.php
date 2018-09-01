<?php

function modifyDashboardMenu() {
    //TODO add actual page to see all content
    add_menu_page(__('UW Database', 'bccms'), __('UW Database', 'bccms'), 'manage_options', 'uw-dashboard', 'index.php', '', 2);
    //TODO add actual page to see all cards
    add_submenu_page('uw-dashboard', __('All UW Skills', 'bccms'), __('All UW Skills', 'bccms'), 'manage_options', 'bw-content-card', '');
    add_submenu_page('uw-dashboard', __('All UW Tags', 'bccms'), __('All UW Tags', 'bccms'), 'manage_options', 'edit.php?post_type=page', '');
    add_submenu_page('uw-dashboard', __('All UW Races', 'bccms'), __('All UW Races', 'bccms'), 'manage_options', 'edit.php?post_type=post', '');
    add_submenu_page('uw-dashboard', __('All UW Classes', 'bccms'), __('All UW Classes', 'bccms'), 'manage_options', 'edit.php?post_type=bccms_news', '');
    add_submenu_page('uw-dashboard', __('All Magic', 'bccms'), __('All Magic', 'bccms'), 'manage_options', 'edit.php?post_type=bccms_faq', '');
}

if (is_admin()) {
    add_action('admin_menu', 'modifyDashboardMenu', 1001);
}

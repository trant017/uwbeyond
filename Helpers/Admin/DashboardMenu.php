<?php

namespace Helpers\Admin;

class DashboardMenu
{
    public static function init()
    {
        //TODO add menu for uw database
        add_menu_page(__('UW Database', 'bccms'), __('UW Database', 'bccms'), 'manage_options', 'see-all-content', 'index.php', '', 2);
    }
}
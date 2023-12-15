<?php

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        
        $output .= "\n$indent<ul class=\"nav-submenu\">\n";
    }
}

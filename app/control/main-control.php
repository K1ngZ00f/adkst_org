<?php
include "_control.php"; 
require "../../app/view/main-view.php"; 
class main_control extends _control
{
    function Action( $ajaxURI )
    {
        switch(strtolower($ajaxURI) )
        {
            default:
            case 'home':
            case 'index':
            case 'default':
                (new main_view())->PrintHTML();
            break;
                
            case 'test':
                echo "<h1>THIS IS A TEST</h1>";
            break;
        }
    }
} 
(new main_control())->Action( $_GET['ajax'] ); 

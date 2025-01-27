<?php

/** *
 * @return permision number
 * authorize permission numbers return
 * **/
/*
--
CONFIGURATION
--
*/
//Config User authorize permission numbers return
if (!function_exists('authrz_user')) {
    function authrz_user($variable)
    {
        switch (strtolower($variable)) {
            case 'module':
                return 11;
                break;
            case 'component':
                return 11;
                break;
            case 'transaction':
                return array("module" => 11, "component" => 11);
                break;
            case 'home':
                return 111110;
                break;
        }
    }
}



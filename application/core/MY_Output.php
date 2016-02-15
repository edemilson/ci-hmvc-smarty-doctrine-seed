<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Output extends CI_Output
{

    function _display($output = '')
    {

        parent::_display($output);

        if (class_exists('CI_Controller') && class_exists('Smarty_Internal_Debug') && (config_item('smarty_debug') || $this->enable_profiler)) {
            $CI =& get_instance();
            $smarty_debug = new Smarty_Internal_Debug();
            $smarty_debug->display_debug($CI->ci_smarty);
        }

    }

}

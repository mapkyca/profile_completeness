<?php
    /**
     * Generic Profile Completeness tool.
     * Provides a generic mechanism for displaying "completeness" of a profile.
     * @licence GNU Public License version 2
     * @link http://www.marcus-povey.co.uk
     * @author Marcus Povey <marcus@marcus-povey.co.uk>
     */

    function profilecomplete_init()
    {
    }
    
    function profilecomplete_calculate(ElggUser $user)
    {
        global $CONFIG;

        $populated = 0;
        $fields = elgg_trigger_plugin_hook('profilecomplete', 'defaultfields', array(
            'user' => $user
        ), elgg_get_config('profile_fields'));
        $required = count($fields);

        foreach ($fields as $field => $type)
        {
            if (isset($user->$field))
                $populated++;
        }


        return (int)(($populated / $required)*100);
    }

    elgg_register_event_handler('init', 'system', 'profilecomplete_init');

<?php
    define('TMPLT',get_bloginfo('template_directory'));
    define('TMPLTD',get_template_directory());
    
    function mix($path)
    {
        $manifest = TMPLTD.'/assets/mix-manifest.json';
        $manifest = json_decode(file_get_contents($manifest), true);

        return TMPLT.'/assets'.$manifest[$path];
    }
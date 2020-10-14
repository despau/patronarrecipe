<?php

function patronarrecipe_new_avatar( $defaults ){
    $avatar_url     = 'https://wapu.us/wp-content/uploads/2016/07/original_wapuu.png';

    $defaults[$avatar_url]  = 'Default Patronrecipe Avatar';

    return $defaults;
}
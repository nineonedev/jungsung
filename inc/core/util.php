<?php

$AOS_FADE_UP = 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
		
function aos_fade_up($delay = 0){
    global $AOS_FADE_UP; 
    if($delay === 0){
        return $AOS_FADE_UP; 
    }
    return $AOS_FADE_UP. ' data-aos-delay="'.$delay.'"';
}

function dd($var ='', $exit = false){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';

    if($exit){
        exit; 
    }
}

function lord_icon($key = ''){
    if(empty($key)) return ''; 
    return '<lord-icon
            src="https://cdn.lordicon.com/'.$key.'.json"
            trigger="loop"
            delay="2000"
            colors="primary:#ffffff,secondary:#ffffff"
            ></lord-icon>';
}



function url($path = ''){
    global $ROOT; 
    $cache = CACHE_CONTROL ? '?v='.date('YmdHis') : '';
    return $ROOT.$path.$cache;  
}
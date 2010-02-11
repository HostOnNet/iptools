<?php

function get_youtube_flv_url($url)
{
    $content = file_get_contents($url);
    
    if (preg_match_all("/fmt_url_map.*/", $content, $matches))
    {
        $url = urldecode($matches[0][0]);
        $urls = explode('|', $url);
        $url = $urls[1];
        $urls = explode(',', $url);
        $flv_url = $urls[0];
        $flv_url = str_replace('"','', $flv_url);
        return $flv_url;
    }
    else
    {
        echo "<p>failed to find youtube video url.</p>";
        exit();
    }
}

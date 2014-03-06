<?php
    // tool functions -------------------------------------------------------------------------------------------------------       
    // hyper text echo
    function anchor($url, $text, $newPage="") {
        if ($newPage) $newPage = ' target="_blank"';
        return '<a href="' . $url . '"' . $newPage . ">" . $text . "</a>";
    }
    
    function img($src, $style="") {
        if ($style) $style = ' style="' . $style . '"';
        return '<img src="' . $src . '"' . $style . '>';
    }
    
    function hte($text="") {
        echo $text . "<br>\n";
    }
    
    function htr($text="") {
        return $text . "<br>\n";
    }
    
    function starts_with($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }

    function ends_with($haystack, $needle)
    {
        $length = strlen($needle);
        $start  = $length * -1; //negative
        return (substr($haystack, $start) === $needle);
    }

    function writeMenuEntry($text, $link) {
        global $currentFile;  
        //the next line needs to be at the top of every page
        //$currentFile = basename(__FILE__);

        $localFile = strtolower($text) . ".php";

        echo '<div class="menuItem">';
        if ($localFile == $currentFile) {
            echo '<div class="menuItemActive">';
            echo $text;
            echo "</div>";
        }
        else
            echo(anchor($link, $text));
        echo("</div>\n");
    }
    
    function writeMenuEntries($items){
        foreach($items as $text => $link){writeMenuEntry($text, $link);}
    }

?>
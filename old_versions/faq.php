<?php
    $currentFile = basename(__FILE__); 
    require("debugstatus.inc");
    require("tools.inc");    
    require("header.inc");
    require("tableofcontents.inc");
?>

<div class="main">
    
    <div class="masterWidget" style="height:300px">
        <h3>FAQ</h3><br>
        <br>
        
    <?php

        // buffered output to have headings and content in order
        $htBuffer = "";
        function htt($z="") {
            global $htBuffer;
            $htBuffer .= htr($z);
        }

        // table of contents and content
        $toc = new Toc();
        htt($toc->add("WTF?"));
        htt("oh yeahy");
        htt();

        htt($toc->add("Is namecoin cool?"));
        htt("oh yeahy");
        htt();

        htt($toc->add("Is it bad that coins are lost with the name operations?"));
        htt("Only a small amount is lost with each operation so there is room for plenty of names. Should it ever become a
               problem we can still change the algorithm.");
        htt();

        // OUTPUT table of contents and content
        $toc->ht_echo();    
        hte();
        hte();
        echo $htBuffer;
        hte();
        
        hte("Check out the " . anchor("http://dot-bit.org/FAQ", "dot-bit FAQ for now"));
        hte();
    ?>

    </div>

</div>

<?php require("footer.inc"); ?>
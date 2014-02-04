<?php
    $currentFile = basename(__FILE__); 
    require("debugstatus.inc");    
    require("tools.inc");
    require("header.inc");
    require("tableclass.inc");
?>

<div class="main">
    
    <!--div id="menu" class="FL">
        <ul>
        <li>menu1</li>
        <li>menu2</li>
        <li>FAQ</li>
        <li><a href="http://dot-bit.org/Namecoin">About</a></li>
        </ul>
    </div-->

    <!-- right side widgets -->
    <div class="masterWidget" style="float:right;padding-right:0;margin-right:0;padding-top:0;margin-top:0">
        <div class="widget" style="width:300px;">
            <h3>Download Wallet</h3><br>
            Version Q.3.72<br>
            &nbsp;&nbsp;Qt GUI and daemon.<br>
            &nbsp;&nbsp;<a target="_blank" href="https://github.com/namecoin/namecoin/tree/vQ.3.72">Sources on Github</a><br>
            &nbsp;&nbsp;<a href="http://namecoin.info/files/namecoin_win_vQ.3.72.zip">Windows binary</a><br>
            &nbsp;&nbsp;<a href="http://software.opensuse.org/download.html?project=home%3Ap_conrad%3Acoins&package=namecoin">Linux packages</a><br>
            &nbsp;&nbsp;Mac binary - N/A<br>
            &nbsp;&nbsp;<a target="_blank" href="https://bitcointalk.org/index.php?topic=236340.msg3436752#msg3436752">Hashes on Bitcointalk</a><br>
            <br>
            Older versions and more<br>
            &nbsp;&nbsp;<a href="http://dot-bit.org/files/">http://dot-bit.org/files/</a><br> 
            <br>
        </div>
        <div class="widget" style="width:300px;">
            <h3>Donate</h3><br>
            <a target="_blank" href="http://dot-bit.org/forum/viewtopic.php?f=5&t=473">Namecoin marketing and development fund</a>.<br>
            NMC: NDtPuyg3adscr6HCE1GUiSsKPtA8ewKgz3<br>
            BTC: 17Si1rdVd6gaYbwLq9NkXtGV9Qzt3NmTKa<br>
        </div>
        <div class="widget" style="width:300px;">
            <h3>Announces</h3><br>
            <ul>
                <li>Alerts : <a target="_blank" href="http://dot-bit.org/forum/viewtopic.php?f=19&t=1524">mailing list</a></li>
                <li>Twitter : <a target="_blank" href="https://twitter.com/NamecoinDotInfo">@NamecoinDotInfo</a></li>
                <li>Important announcements : <a target="_blank" href="http://dot-bit.org/forum/viewforum.php?f=19">forum</a></li>
            </ul>
        </div>
        <div class="widget">
            <h3>Exchanges</h3> - <a target="_blank" href="http://dot-bit.org/Trade">details on the wiki</a>
            <ul>
                <li><a target="_blank" href="https://btc-e.com">btc-e</a></li>
                <li><a target="_blank" href="https://coinmkt.com">coinMKT</a></li>
                <li><a target="_blank" href="https://cryptonit.net">Cryptonit</a></li>
                <li><a target="_blank" href="https://kraken.com">Kraken</a><br>    </li>                
                <li><a target="_blank" href="http://liliontransfer.org">Lilion Transfer</a></li>
                <li><a target="_blank" href="https://www.vaultofsatoshi.com">Vault of Satoshi</a><br>    </li>
                <li><a target="_blank" href="https://vircurex.com">Vircurex</a><br>    </li>
                <li><a target="_blank" href="https://24change.com">24change</a><br>    </li>
            </ul>
        </div>               
        <div class="widget">
            <h3>Namecoin websites</h3><br>
            <ul>
                <!--<li><a target="_blank" href="http://gee.bit">gee.bit</a> 
                        <br>  </li>            -->
                <li><a target="_blank" href="http://bitse.bit">Dot-Bit Search Engine</a>
				        (<a target="_blank" href="http://bitse.uberbills.com">basic dns</a>)<br>  </li>                        
                <li><a target="_blank" href="http://explorer.bit">Namecoin Block Explorer</a> 
                        (<a target="_blank" href="http://explorer.dot-bit.org/">basic dns</a>)<br>  </li>
                <li><a target="_blank" href="http://dc-charts.com/?dc=2&ex=0&cu=0&sw=0&dl=1&sc=0">dc-charts</a></li>
                <li><a target="_blank" href="http://nx.bit">nx.bit</a> 
                        (<a target="_blank" href="http://blockchained.com/namecoin">basic dns</a>) </li>
            </ul>
        </div>        
    </div>

    <!-- main widgets -->
    <div class="masterWidget">
        <h3>What is Namecoin</h3><br>
        Namecoin is an open source decentralized key/value registration and transfer system based on <a href="http://bitcoin.org" target="_blank">Bitcoin</a> technology (a decentralized cryptocurrency).<br>
        <br>
        It allows you to:
        <ul>
            <li>Securely register and transfer arbitrary names (keys), no possible censorship!</li>
            <li>Attach values (data) to the names (currently up to 520 bytes, will be extended)</li>
            <li>Trade and transact namecoins, the digital currency NMC </li>
        </ul>

        There are plenty of possible use cases. Some examples:
        <ul>
            <li>DNS: domain_name => domain_zone_configuration (also for i2p, Tor)</li>
            <li>TLS: https like encryption and secure identification by Namecoin domain/ID/name
            <li>Alias/Identity: user_name => user_public_identity (email, name, gpg key, BTC-adress, etc)</li>
            <li>Timestamping: document_hash => document_infos (name, hash, owner, etc)</li>
            <li>Broadcasting / Messaging</li>
            <li>Web of trust</li>
            <li>Bonds, shares</li>
            <li>Voting</li>
            <li>Torrent tracker</li>
        </ul>

        To register a name, you must own some namecoins (NMC, the internal cryptocurrency used by the software).<br>
        <br>
        Find more information in the <a target="_blank" href="http://dot-bit.org/Namecoin_Projects">dot-bit wiki</a>.
        <br>
        <br>
        <br>        
        <h3>News</h3><br>
        <?php
            //~ $n = new NewsTable();
            //~ $n->add_row("2012-09-25", "", "Finally the release version for windows: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?p=3051#p3051", "v3.50 win32 build", 1));
            
            //~ $n->add_row("2012-06-10", "", "New higher level frontend: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=525", "NMControl", 1));
            
            //~ $n->add_row("2012-05-26", "", "Out now: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=500", "v3.50", 1));

            //~ $n->add_row("2012-05-25", "", "New rpc command: " . 
                         //~ anchor("http://dot-bit.org/forum/viewtopic.php?f=8&t=499", "sendtoname", 1));


            //~ $n->set_columns_width(array("70px", "5px", ""));
            //~ hte($n->get_table());        
        ?>
          2013-10-29 A severe bug was found in the name verification code. It has been fixed as of version Q.3.72<br>
          <b>Only trust the fixed version Q.3.72 or higher with names!</b><br>
          <br>
          For the latest news
		go to the <a target="_blank" href="http://dot-bit.org/forum/">dot-bit forum</a> or
		check out <a target="_blank" href="http://reddit.com/r/namecoin">r/namecoin</a>.
        <?php //        or subscribe to the <a target="_blank" href="https://twitter.com/NamecoinDotInfo">twitter account</a>.<br> ?>
        <br>
        Official anouncements will also be made on <a target="_blank" href="https://bitcointalk.org/index.php?topic=236340.0">this Bitcointalk thread</a>.
    </div>



    <div class="masterWidget" style="width:500px">
    <h3>Namecoin Projects</h3><br>
        Please visit this wiki page for a list of the latest Namecoin related projects:<br>
        <a target="_blank" href="http://dot-bit.org/Namecoin_Projects">http://dot-bit.org/Namecoin_Projects</a>
        <?php
        //~ <div class="widget">
            //~ <h3>Dot-BIT</h3><br>
                //~ A p2p dns system - dot-bit is the first project using namecoin:<br>
                //~ <a target="_blank" href="http://dot-bit.org">dot-bit wiki website</a> - also the general Namecoin wiki<br>
                //~ <a target="_blank" href="http://dot-bit.org/forum/index.php">dot-bit forum</a> - also the general Namecoin forum<br>
        //~ </div>

        //~ <div class="widget">
            //~ <h3>Namecoin Stock Control</h3><br>
                //~ Issuing and handling of multiple Namecoin names, e.g. stocks, bonds.<br>
                //~ Names can be traded manually (otc). Dividends can be payed.<br>
                //~ <a target="_blank" href="https://bitcointalk.org/index.php?topic=123271">bitcointalk thread</a><br>
                //~ <a target="_blank" href="https://github.com/phelixbtc/ncsc">github</a><br>
        //~ </div>

        //~ <div class="widget">
            //~ <h3>Other projects</h3><br>
            //~ identities, alias, messaging, your project?<br>
            //~ <br>
        //~ </div>   
        ?>        
            
    </div>

    <div class="masterWidget" style="width:500px">
    <h3>Bounties</h3><br>
        There is a <a target="_blank" href="https://dot-bit.org/forum/viewforum.php?f=18">bounties board</a>
        on the Namecoin forum.<br>
        
    </div>




</div>

<?php require("footer.inc"); ?>

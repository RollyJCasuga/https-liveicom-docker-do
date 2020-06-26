
    <!-- CRAWLER -->
        <div class="crawler">
                <marquee id="text" scrollamount="4" behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                <?php

                    if ($_SESSION['loginStatus']) {
                        for ($i=0; $i < 50; $i++) {
                            echo "<img id='logo' src='liveiLogo.png'>&nbsp;&nbsp;&nbsp;&nbsp;Welcome ".$_SESSION['firstname']."! Thank you, for being a part of Livei.com community since ".$date."&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                    }
                    // else if ($GLOBALS["cookielogin"]) {
                    //     for ($i=0; $i < 50; $i++) {
                    //         echo "
                    //             <img id='logo' src='liveiLogo.png'>&nbsp;&nbsp;&nbsp;&nbsp;Welcome back ".$_COOKIE[$cookieuser].", Please Login!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    //             <img id='logo' src='liveiLogo.png'>&nbsp;&nbsp;&nbsp;&nbsp;Livei.com is open 24/7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    //             <img id='logo' src='liveiLogo.png'>&nbsp;&nbsp;&nbsp;&nbsp;Free! Free! Free! Putty training. Learn how to remote login to your Raspberry Pi. Talk with one of our Linux experts to schedule your training now.&nbsp;&nbsp;&nbsp;&nbsp;
                    //         ";
                    //     }
                    // }
                    else{
                        for ($i=0; $i < 50; $i++) {
                            echo "
                            <img id='logo' src='liveiLogo.png'>&nbsp;&nbsp;&nbsp;&nbsp;Hello Friend! Welcome To Livei.com open 24/7. Please Register and Login.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img id='logo' src='liveiLogo.png'>&nbsp;&nbsp;&nbsp;&nbsp;Free! Free! Free! Putty training. Learn how to remote login to your Raspberry Pi. Talk with one of our Linux experts to schedule your training now.&nbsp;&nbsp;&nbsp;&nbsp;
                            ";
                        }
                    }
            ?>
                </marquee>
    </div>

    <!-- Place this tag where you want the Live Helper Plugin to render. -->
    <div id="lhc_status_container_page" ></div>

    <!-- Place this tag after the Live Helper Plugin tag. -->
    <script type="text/javascript">
    
    </script>   
</body>

</html>

<!-- livechat -->
<script>

    if (window.innerWidth < 480) {
        var LHCChatOptionsPage = {'height':300,'mobile':false};
        LHCChatOptionsPage.opt = {};
        (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
        var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
        po.src = '//www.livei.com/lhc_web/index.php/chat/getstatusembed/(theme)/1?r='+referrer+'&l='+location;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    }
    else {
        var LHCChatOptions = {};
        LHCChatOptions.opt = {widget_height:300,widget_width:300,popup_height:520,popup_width:500};
        (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
        var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
        po.src = '//livei.com/lhc_web/index.php/chat/getstatus/(click)/internal/(position)/bottom_left/(ma)/br/(top)/350/(units)/pixels/(leaveamessage)/true/(theme)/1?r='+referrer+'&l='+location;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    }
</script>
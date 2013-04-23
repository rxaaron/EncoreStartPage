<!DOCTYPE html>
<html>
    <head>
        <title>Encore Pharmacy</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="rsc/esp.css" type="text/css" />
        <link rel="shortcut icon" href="rsc/favicon.ico" />
        <script>
            function navigate(inpt){
                document.location.href= inpt;
            }
            function clearbox(inpt2){
                y="comm"+inpt2;
                z="a"+inpt2;
                document.getElementById(z).innerHTML="Show Comments";
                document.getElementById(y).innerHTML="";
                document.getElementById(z).onclick = function () { expandbox(inpt2); };
                return false;
            }
            function expandbox(inpt) {
                var xmlhttp;
                xmlhttp=new XMLHttpRequest();
                xmlhttp.open("POST","manifests/scripts/mfst_comments.php",false);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("ID="+inpt);
                w="a"+inpt;
                x="comm"+inpt;
                document.getElementById(w).innerHTML="Hide Comments";
                document.getElementById(x).innerHTML=xmlhttp.responseText;
                document.getElementById(w).onclick = function () { clearbox(inpt); };
                return false;
            }
            function showadmin(v){
                document.getElementById(v).style.display='inline-table';
                document.getElementById("enclogo").onclick = function () { hideadmin(v); };
                return false;
            }
            function hideadmin(u){
                document.getElementById(u).style.display='none';
                document.getElementById("enclogo").onclick = function () { showadmin(u); };
            }
        </script>
    </head>
    <body>
        <div id="banner">
            <img id="enclogo" src="rsc/ENC_Logo.png" alt="Encore!!!" width ="250" height="100" onclick="showadmin('admin');">
        </div>
        <div id="main">
            <div id="nav">
                <div id="wiki" class="wiki" onclick="navigate('http://gmapserver.grcs.local/wiki/');">
                    <p>Wiki</p>
                </div>
                <div id="cs" class="c2" onclick="navigate('http://gmapserver.grcs.local/narclog/');">
                    <p>C II Log</p>
                </div>
                <div id="calendar" class="calendar" onclick="navigate('http://gmapserver.grcs.local/calendar/');">
                    <p>Calendar</p>
                </div>
                <div id="admin" class="admin">
                    <p>
                        <a href="phpmyadmin/">PhpMyAdmin</a><br /><br />
                        <a href="https://gmapserver:10000">WebMin</a><br /><br />
                        <a href="http://rxaaron.github.com">GitHub</a>
                    </p>
                </div>
                <div id="er" class="erbox" onclick="navigate('http://gmapserver.grcs.local/erbox/');">
                    <p>ER Box</p>
                </div>
                <div id="manifests" class="manifests" onclick="navigate('http://gmapserver.grcs.local/manifests/');">
                    <p>Manifests</p>
                </div>
                <div id="pais" class="pais" onclick="navigate('http://gmapserver.grcs.local/pais/');">
                    <p>PAIS Bulk</p>
                </div>
                <div id="sfc" class="sfcform" onclick="navigate('http://gmapserver.grcs.local/sfc/');">
                    <p>SFC Formulary</p>
                </div>
                <div id="documents" class="documents" onclick="navigate('http://gmapserver.grcs.local/docs/');">
                    <p>Documents</p>
                </div>
             </div>
        </div>
        <div id="sidebar">
            <?php include_once 'manifests/scripts/mfst_outstanding.php'; ?>
        </div>
    </body>
</html>
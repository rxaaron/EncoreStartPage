<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
        </script>
    </head>
    <body>
        <div id="banner">
            <img src="rsc/ENC_Logo.png" alt="Encore!!!" width ="250" height="100">
        </div>
        <div id="main">
            <div id="nav">
                <div id="wiki" class="wiki" onclick="navigate('wiki/');">
                    <p>Wiki</p>
                </div>
                <div id="cs" class="c2" onclick="navigate('narclog/');">
                    <p>C II Log</p>
                </div>
                <div id="calendar" class="calendar" onclick="navigate('calendar/');">
                    <p>Calendar</p>
                </div>
                <div id="er" class="erbox" onclick="navigate('erbox/');">
                    <p>ER Box</p>
                </div>
                <div id="manifests" class="manifests" onclick="navigate('manifests/');">
                    <p>Manifests</p>
                </div>
                <div id="pais" class="pais" onclick="navigate('pais/');">
                    <p>PAIS Bulk</p>
                </div>
                <div id="sfc" class="sfcform" onclick="navigate('sfc/');">
                    <p>SFC Formulary</p>
                </div>
                <div id="documents" class="documents" onclick="navigate('docs/');">
                    <p>Document Manager</p>
                </div>
            </div>
        </div>
    </body>
</html>
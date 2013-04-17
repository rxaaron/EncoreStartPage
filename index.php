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
             document.getElementById(inpt2).innerHTML="";
             return false;
            }
            function expandbox(inpt) {
                var xmlhttp;
                xmlhttp=new XMLHttpRequest();
                xmlhttp.open("POST","manifests/scripts/mfst_comments.php",false);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("ID="+inpt);
                x="comm"+inpt;
                document.getElementById(x).innerHTML=xmlhttp.responseText;
                return false;
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
                    <p>Documents</p>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <?php include_once 'manifests/scripts/mfst_outstanding.php'; ?>
        </div>
    </body>
</html>
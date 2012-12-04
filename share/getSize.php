<?php
    /*
     *
     * Copy from a server to another server
     *
     * by Ali[at]MihanDoost[dot]Com - 26/sep/2009
     *
     */

$buffer=64 ; //in kb
$updatepersec=1 ; //update progress bar every x seccend
$uplaodFolder='data/temp/';
$thisfilename='index.php';

session_start();
?>
<html>
    <head>
        <title>Ali.MD.PHP.CopyFile</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        function getUrlSize($remoteFile) {
            $ch = curl_init($remoteFile);
            curl_setopt($ch, CURLOPT_NOBODY, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); //not necessary unless the file redirects (like the PHP example we're using here)
            $data = curl_exec($ch);
            curl_close($ch);
            if ($data === false) {
                echo 'cURL failed';
                exit;
            }

            $contentLength = -1;
//            $status = 'unknown';
//            if (preg_match('/^HTTP\/1\.[01] (\d\d\d)/', $data, $matches)) {
//                $status = (int)$matches[1];
//            }
            if (preg_match('/Content-Length: (\d+)/', $data, $matches)) {
                $contentLength = (int)$matches[1];
            }
            return $contentLength;
        }


        if(isset($_REQUEST['f'])) {
            echo "File Size : ".getUrlSize($_REQUEST['f']);
        }


        ?>
        <div>
            <form action="" method="post">
                Copy URL :
                <input type="text" size="64" name="f"/>
                <input type="submit" value="Copy" />
            </form>
        </div>
    </body>
</html>

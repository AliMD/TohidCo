<?php
/* w2box: web 2.0 File Repository
 * http://labs.beffa.org/w2box/
 *
 * configuration file
 *
 */

$config = Array();

// --- basic ---
// title of your w2box
$config['w2box_title'] = "Tohid Foundry Sharing center";
// path to the storage directory
$config['storage_path'] = "../media";
// maximum allowed file size in megabytes.
$config['max_filesize'] = 100; // MBytes
// allowed file type
$config['allowed_ext'] = array("gif","jpg","jpeg","png","pdf","txt","doc","rtf","zip","7z","rar");
// if bigger then 0, automatically delete file after X days
$config['delete_after'] = 0;
// if true, do not direct link to files
$config['disable_directlink'] = false;
// if true, allow upload to overwrite file that exist
$config['allow_overwrite'] = false;
// if true, ask confirmation before deletion
$config['confirm_delete'] = false;
// if true, show a warning msg at the top
// you can edit the warning msg at the end 
// of this file ($lang['warning_msg'])
$config['show_warning'] = false;
// if true, utf8 encode the direct link, 
// turn this on if you're directlink doesn't work 
// with international characters
$config['utf8encode_directlink'] = false;
// enable folder creation and the value is the maximum depth
$config['enable_folder_maxdepth'] = 3;

//activate upload progress bar
$config['upload_progressbar']=true;
//path to the cgi script as an URL link relative to public url of the script
$config['upload_cgiscript']=rooturl()."upload.cgi";
//$config['upload_cgiscript']="/cgi-bin/upload.cgi
//path to the tmp dir, if this one doesn't work, use a full path
//(ie "/home/username/tmp", "~tmp", "C:/wamp/tmp")
$config['upload_tmpdir']="tmp";

//--- admin ---
// To log-in as an admin when every feature is
// hidden, click on "Powered" (hidden link) at
// the bottom of the page.
// 
// if true, activate admin authentication
$config['admin_actived'] = true;
// admin username
$config['admin_username'] = "admin";
// admin password
$config['admin_password'] = "123";
// if true, allow upload only for admin
$config['protect_upload'] = true;
// if true, show upload feature only for admin
$config['hide_upload'] = true;
// if true, allow delete only for admin
$config['protect_delete'] = true;
// if true, show delete feature only for admin
$config['hide_delete'] = true;
// if true, allow make dir only for admin
$config['protect_makedir'] = true;
// if true, show make dir feature only for admin
$config['hide_makedir'] = true;


//--- activity logging --
// if true, log activity to file
$config['log'] = true;
// log filename
$config['log_filename'] = "log.txt";
// if true, log upload activity
$config['log_upload'] = true;
// if true, log delete activity
$config['log_delete'] = true;
// if true, log download activity (you should disable 
// direct link if you want to track every download
$config['log_download'] = true;

require("lang/index.php");
?>
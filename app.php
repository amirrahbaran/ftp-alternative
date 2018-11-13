<?php

$title = "[ explorer app ]";// Title (may contain HTML tags)
$windowtitle = $title;             // Window title (text only)
$defaultstatusmsg = $title;        // Default status message (text only)

$bodybgcolor  = "#BBBBBB";         // Background color of page body
$bodyfgcolor  = "#000000";         // Foreground color of page body
$thbgcolor    = "#909090";         // Background color of table headers
$thfgcolor    = "#000000";         // Foreground color of table headers
$tdbgcolor    = "#000000";         // Background color of table cells
$tdfgcolor    = "#FFFFFF";         // Foreground color of table cells
$infocolor    = "#0000FF";         // Info messages foreground color
$warningcolor = "#FF0000";         // Warning messages foreground color
$errorcolor   = "#FF0000";         // Error messages foreground color
$linkcolor    = "#FFFFAA";         // Link color
$actlinkcolor = "#FFFF00";         // Active link color

$recyclebin = "recyclebin";          // Recycle bin (must be located in base directory)
$recyclebininfofileext = "explorerappbinfo";  // Extension of information file in trash can

$filealiases = true;               // File aliasing feature
$filealiasext = "explorerappbalias";        // File alias extension

$defaultsortby = "name";           // Default sort mode (name/size/date)
$hidedotfiles = true;              // Hide dot-files (obsolete : use $hidefilepattern instead)
$hidefilepattern = "^(CVS|\..*)$"; // All files matching that pattern will be hidden
$showunixattrs = false;            // Show perms / owner / group (UNIX)
$filemode = 0777;                  // Create mode for files (UNIX)
$dirmode = 0777;                   // Create mode for directories (UNIX)
$uploadmaxsize = 2097152;          // Max file size for uploads (check your php.ini)

$readmefile = "";    // README file name (empty means no README file)
$showreadmefile = false;           // Allows README file to be in file list

$useimages = false;                // Use images, set to false by default to respect the philosophy
$imagesdir = "images";          // Images directory (must be located in base directory)
$showimagesdir = true;            // Show images directory
$recyclebinimage = "trashcan.png";   // Image for trash can
$upperdirimage = "upperdir.png";   // Image for upper and main directory
$opendirimage = "opendir.png";     // Image for open directory
$dirimage = "dir.png";             // Image for simple directory
$fileimage = "file.png";           // Image for file directory
$editimage = "edit.png";           // Image for edit action
$viewimage = "view.png";           // Image for view action

$searchmaxlevels = 10;             // Search levels (max depth in sub directories for searches, 0 means no limits)
$downloadimage = "download.png";   // Image for download action

$editcols = 80;                    // Number of columns for edit area
$editrows = 24;                    // Number of rows for edit area
$defaultfileformat = "dos";        // Default file format when editing and saving (dos/unix)
$viewextensions = array(           // Viewable extensions (empty array means every file is viewable)
   "txt",
   "php",
   "php3",
   "jsp",
   "asp",
   "htm",
   "html",
   "shtml",
   "xml",
   "wml",
   "js",
   "css",
   "cgi"
);

$authmethod = "session";      // Do not require user authentication
//$authmethod = "session"; // Use builtin session-based authentication (recommended, needs the PHP session
                           // management feature activated)
//$authmethod = "cookie";  // Use builtin cookie-based authentication (not recommended : very basic, very UNSECURE)
//$authmethod = "realm";   // Use builtin browser's basic authentication (needs PHP to be running as a module)
//$authmethod = "server";  // Require server based authentication (such as Apache's .htaccess)

$realmname = "Web File Browser";  // Realm name for use with $authmethod = "realm"

$noauthprofile = "full";          // Default profile used when $authmethod = "none"

$allowunknownusers = false;       // If set to false, any server authenticated but locally unknown user
                                  // gets the unknown-user profile (see bellow)
$unknownuserprofile = "readonly"; // Profile used for locally unknown users

// ---- PROFILES ----
// You can create as many profiles as you need using these samples

$profile = array(
   "full" => array(
      "allowmove" => true,                 // Allows file and directory moving
      "allowrename" => true,               // Allows file and directory renaming
      "allowalias" => true,                // Allows file aliasing
      "allowcopy" => true,                 // Allows file copying
      "allowdelete" => true,               // Allows file deletion
      "allowremovedir" => true,            // Allows directory deletion
      "allowcreatefile" => true,           // Allows file creation
      "allowcreatedir" => true,            // Allows directory creation
      "allowupload" => true,               // Allows file uploads
      "allowurlupload" => true,            // Allows file uploads from URL
      "allowbrowsetrashcan" => true,       // Allows browsing of trash can
      "allowemptytrashcan" => true,        // Allows emptying of trash can
      "allowrestorefromtrashcan" => true,  // Allows restore files from trash can
      "allowdownload" => true,             // Allows file download
      "allowedit" => true,                 // Allows file edition
      "allowshow" => true,                 // Allows file viewing (useful only if allowedit is false)
      "allowsearch" => true,               // Allows searches
      "allowregexpsearch" => true          // Allows optional use of regular expressions in searches
   ),
   "readonly" => array(
      "allowmove" => false,                // Allows file and directory moving
      "allowrename" => false,              // Allows file and directory renaming
      "allowalias" => false,               // Allows file aliasing
      "allowcopy" => false,                // Allows file copying
      "allowdelete" => false,              // Allows file deletion
      "allowremovedir" => false,           // Allows directory deletion
      "allowcreatefile" => false,          // Allows file creation
      "allowcreatedir" => false,           // Allows directory creation
      "allowupload" => false,              // Allows file uploads
      "allowurlupload" => false,           // Allows file uploads from URL
      "allowbrowsetrashcan" => false,      // Allows browsing of trash can
      "allowemptytrashcan" => false,       // Allows emptying of trash can
      "allowrestorefromtrashcan" => false, // Allows restore files from trash can
      "allowdownload" => true,             // Allows file download
      "allowedit" => false,                // Allows file edition
      "allowshow" => true,                 // Allows file viewing (useful only if allowedit is false)
      "allowsearch" => true,               // Allows searches
      "allowregexpsearch" => true          // Allows optional use of regular expressions in searches
   )
);

// ---- USERS ----
// You can create as may users as you need using this templates :

$user = array(
   "admin" => array(
      "password" => "peppermint",
      "profile" => "full"
   ),
   "test" => array(
      "password" => "1234",
      "profile" => "readonly"
   )
);

// ---- Things that **may** be customized (but without any warranty)... ----

// *** I INSIST *** : you be careful what you do here !
// Many people ask me questions because of their mis-usage of these parameters...

$basedir = @dirname(__FILE__);    // Base directory = local directory
//$basedir = "/foo/bar";          // Base directory = custom directory (UNIX)
//$basedir = "c:/My Documents";   // Base directory = custom directory (WINDOWS)

// Remember that the trash can must be located in the base directory (local or custom)

$filelinks = true;                 // Links on files (inhibited with a custom $basedir
                                   // unless you specify $basevirtualdir), works fine
                                   // when $basedir = local directory

$basevirtualdir = "";              // If you have set a custom $basedir AND $filelinks = true
                                   // and if the base directory is accessible thru a
                                   // virtual directory of the webserver
                                   // set this variable (eg. "/virtualfoo/virtualbar")
                                   // in all other cases let it empty !

// ---- Local settings -----------------------------------------------------

// Date format
$dateformat = "m-d-Y H:i:s";       // Date format. Here are some other examples (that you can combine) :
                                   // "M D, Y"   = Dec Fri, 2002
                                   // "m/d/y"    = 12/20/02
                                   // "m-d-y"    = 12-20-02
                                   // "l M d, Y" = Friday Dec 20, 2002
                                   // "F dS, Y"  = December 20th, 2002
                                   // "H:i:s"    = 24 hour time with seconds
                                   // "h:i a"    = 12 hour time with am,pm
                                   // etc...

// Charset
$charset = "UTF-8";

// Messages
//  If you want another language just replace this array by the one
//  in your favorite language file (an include file is not done to keep
//  the whole code in 1 single file)
$messages = array(
   "rlm1"=>"Authentication required",
   "rlm2"=>"Authentication error",
   "rlm3"=>"کد کاربري",
   "rlm4"=>"کلمه عبور",
   "rlm5"=>"ورود",
   "rlm6"=>"خروج",
   "trc0"=>"خالي",
   "trc1"=>"سطل زباله خالي شد",
   "trc2"=>"سطل زباله به طور کامل خالي نشد",
   "trc3"=>"سطل زباله يافت نشد",
   "trc9"=>"خالي کردن",
   "rst0"=>"بازيابي",
   "rst1"=>"نام فايل انتخابي صحيح نيست",
   "rst2"=>"بازيابي فقط در سطل زباله امکان پذير است",
   "rst3"=>"تمامي فايل ها انتخابي بازيابي شدند",
   "rst4"=>"قابل بازيابي نيست %VAR1% فايل",
   "rst5"=>"نام فايل وارد نشده است",
   "rst9"=>"بازيابي فايل انتخابي",
   "mov0"=>"انتقال",
   "mov1"=>"نام فايل يا پوشه انتخابي صحيح نيست",
   "mov2"=>"مسير مقصد براي انتقال صحيح نيست",
   "mov3"=>"منتقل شدند %VAR1% تمامي فايل هاي انتخابي به پوشه",
   "mov4"=>"اشکال در انتقال فايل ها",
   "mov5"=>"مسير مقصد براي انتقال صحيح نيست",
   "mov6"=>"مسير مقصد براي انتقال صحيح نيست",
   "mov9"=>"انتقال فايل انتخابي",
   "ren0"=>"تغيير نام",
   "ren1"=>"نام وارد شده غير معتبر است",
   "ren2"=>"نام وارد شده غير معتبر است",
   "ren3"=>"نام فايل انتخابي تغيير کرد",
   "ren4"=>"اشکال در تغيير نام فايل",
   "ren5"=>"اشکال در تغيير نام فايل",
   "ren9"=>"تغيير نام فايل انتخابي",
   "cpy0"=>"کپي",
   "cpy1"=>"نام وارد شده غير معتبر است",
   "cpy2"=>"نام وارد شده غير معتبر است",
   "cpy3"=>"فايل انتخابي کپي شد",
   "cpy4"=>"اشکال در کپي فايل",
   "cpy5"=>"اشکال در کپي شاخه",
   "cpy6"=>"نام وارد شده غير معتبر است",
   "cpy9"=>"کپي فايل انتخابي",
   "als0"=>"نام مستعار",
   "als1"=>"نام وارد شده غير معتبر است",
   "als2"=>"فايل انتخابي نام مستعار پذيرفت",
   "als3"=>"اشکال در افزودن نام مستعار",
   "als4"=>"نام مستعار برداشته شد",
   "als5"=>"نام مستعار برداشته شد",
   "als6"=>"اشکال در افزودن نام مستعار به شاخه ها",
   "als7"=>"نام وارد شده غير معتبر است",
   "als9"=>"افزودن نام مستعار به فايل انتخابي",
   "cre0"=>"ايجاد فايل",
   "cre1"=>"نام وارد شده غير معتبر است",
   "cre2"=>"ايجاد شد %VAR1% فايل",
   "cre3"=>"اشکال در ايجاد فايل",
   "cre4"=>"نام وارد شده غير معتبر است",
   "cre9"=>"ايجاد فايل جديد",
   "sav1"=>"نام وارد شده غير معتبر است",
   "sav2"=>"اشکال در ذخيره فايل",
   "sav3"=>"نام وارد شده غير معتبر است",
   "sav4"=>"ذخيره",
   "sav5"=>"انصراف",
   "sav6"=>"فرمت فايل ويندوز و داس",
   "sav7"=>"فرمت فايل يونيکس",
   "del0"=>"حذف",
   "del1"=>"نام وارد شده غير معتبر است",
   "del4"=>"تمامي فايل هاي انتخابي به سطل زباله منتقل شدند",
   "del5"=>"اشکال در حذف فايل",
   "del6"=>"نام وارد شده غير معتبر است",
   "del7"=>"شاخه به جاي فايل انتخاب شده است",
   "del9"=>"حذف فايل انتخابي",
   "rmd0"=>"حذف شاخه",
   "rmd1"=>"نام وارد شده غير معتبر است",
   "rmd2"=>"شاخه انتخابي حذف شد",
   "rmd3"=>"اشکال در حذف شاخه ( شاخه خالي نيست )",
   "rmd4"=>"نام وارد شده غير معتبر است",
   "rmd5"=>"فايل به جاي شاخه انتخاب شده است",
   "rmd9"=>"حذف شاخه انتخابي",
   "fup0"=>"ارسال",
   "fup1"=>"نام وارد شده غير معتبر است",
   "fup2"=>"ارسال شد %VAR1% فايل",
   "fup3"=>"اشکال در ارسال فايل",
   "fup4"=>"نام وارد شده غير معتبر است",
   "fup9"=>"ارسال فايل",
   "uup0"=>"ارسال آدرس وب",
   "uup1"=>"آدرس وب وارد شده غير معتبر است",
   "uup2"=>"ارسال شد %VAR1% آدرس وب",
   "uup3"=>"اشکال در ارسال آدرس وب",
   "uup4"=>"آدرس وب وارد شده غير معتبر است",
   "uup9"=>"ارسال فايل از آدرس وب",
   "mkd0"=>"ساخت شاخه",
   "mkd1"=>"نام وارد شده غير معتبر است",
   "mkd2"=>"ايجاد شد %VAR1% شاخه",
   "mkd3"=>"اشکال در ساخت شاخه",
   "mkd4"=>"نام وارد شده غير معتبر است",
   "mkd9"=>"ساخت شاخه جديد",
   "edt1"=>"نام وارد شده غير معتبر است",
   "edt2"=>"نام وارد شده غير معتبر است",
   "edt3"=>"اين نوع فايل قابل ويرايش نيست",
   "edt4"=>"اين نوع فايل قابل نمايش نيست",
   "edt5"=>"اشکال در خواندن فايل",
   "edt6"=>"نام وارد شده غير معتبر است",
   "edt7"=>"نام وارد شده غير معتبر است",
   "edt8"=>"ويرايش فايل",
   "edt9"=>"نمايش فايل",
   "edt10"=>"<small><small>ويرايش</small></small>", // E(dit action)
   "edt11"=>"<small><small>نمايش</small></small>", // V(iew action)
   "edt12"=>"بازگشت به ليست فايل ها",
   "dir1"=>"اشکال در خواندن شاخه",
   "dir2"=>"شاخه اصلي",
   "dir3"=>"شاخه قبلي",
   "dir4"=>"سطل زباله",
   "dir5"=>"زير شاخه",
   "tab1"=>"انتخاب", // Sel(ection)
   "tab2"=>"مقصد",
   "tab3"=>"نام فايل",
   "tab4"=>"اندازه",
   "tab5"=>"تاريخ ايجاد",
   "tab6"=>"سطح دسترسي",
   "tab7"=>"مالک",
   "tab8"=>"گروه",
   "tab9"=>"فقط خواندني",
   "tab10"=>"عمليات",
   "tab11"=>"شاخه",
   "tab12"=>"فايل",
   "tab13"=>"کيلو بايت", // K(ilo)b(ytes)
   "tab14"=>"بله",
   "act1"=>"عمليات شناخته نشده",
   "act2"=>"آيا مطمئن هستيد " ,
   "act3"=>"فايل يا شاخه مبداء انتخاب نشده است",
   "act4"=>"فايل انتخاب نشده است",
   "act5"=>"نام جديد فايل براي تغيير نام وارد نشده است",
   "act6"=>"نام جديد فايل براي کپي وارد نشده است",
   "act7"=>"تعداد فايل ها و شاخه هاي انتخابي زياد است",
   "act8"=>"فقط فايل ها را انتخاب کنبد",
   "act9"=>"يک شاخه انتخاب کنيد",
   "sch1"=>"جستجوي فايل ها از شاخه جاري",
   "sch2"=>"جستجو",
   "sch3"=>"فايلي يافت نشد",
   "sch4"=>" %VAR1% نتايج جستجو براي",
   "sch5"=>"شاخه جستجو شده",
   "sch6"=>"شرايط جستجو وارد نشده است",
   "sch7"=>"استفاده از عبارات حسابي",
   "sch8"=>"نمايش شاخه فايل انتخابي",
   "sch9"=>"نمايش شاخه",
   "dwn1"=>"<small><small>دريافت</small></small>", // D(ownload action)
   "dwn2"=>"نام وارد شده غير معتبر است",
   "dwn3"=>"اشکال در دريافت فايل",
   "dwn4"=>"نام وارد شده غير معتبر است",
   "dwn5"=>"دريافت فايل",
   "inf1"=>"مرتب سازي بر اساس نام فايل",
   "inf2"=>"مرتب ازي بر اساس اندازه",
   "inf3"=>"مرتب سازي بر اساس تاريخ ايجاد",
   "inf4"=>"نمايش شاخه",
   "inf5"=>"نمايش فايل",
   "inf6"=>"بازگشت به شاخه اصلي",
   "inf7"=>"بازگشت به شاخه قبلي",
   "inf8"=>"سطل زباله"
);

// ---------------------------------------------------------------------

// Checks and rebuilds sub-directory
function extractSubdir($d) {
   global $basedir;

   $tmp = "";
   if ($d != "") {
      $rp = ereg_replace("((.*)\/.*)\/\.\.$", "\\2", $d);
      $tmp = strtr(str_replace($basedir, "", $rp), "\\", "/");
      while ($tmp[0] == '/') $tmp = substr($tmp, 1);
   }

   return $tmp;
}

// Returns full file path
function getFilePath($f, $sd = "") {
   global $basedir, $subdir;

   return $basedir."/".(($sd != "") ? $sd : $subdir)."/".@basename($f);
}

// Return UNIX file perms
function getFilePerms($p) {
   if      (($p & 0xc000) === 0xc000) $type = 's';
   else if (($p & 0x4000) === 0x4000) $type = 'd';
   else if (($p & 0xa000) === 0xa000) $type = 'l';
   else if (($p & 0x8000) === 0x8000) $type = '-';
   else if (($p & 0x6000) === 0x6000) $type = 'b';
   else if (($p & 0x2000) === 0x2000) $type = 'c';
   else if (($p & 0x1000) === 0x1000) $type = 'p';
   else $type = '?';

   $u["r"] = ($p & 00400) ? 'r' : '-';
   $u["w"] = ($p & 00200) ? 'w' : '-';
   $u["x"] = ($p & 00100) ? 'x' : '-';
   $g["r"] = ($p & 00040) ? 'r' : '-';
   $g["w"] = ($p & 00020) ? 'w' : '-';
   $g["x"] = ($p & 00010) ? 'x' : '-';
   $o["r"] = ($p & 00004) ? 'r' : '-';
   $o["w"] = ($p & 00002) ? 'w' : '-';
   $o["x"] = ($p & 00001) ? 'x' : '-';

   if($p & 0x800) $u["x"] = ($u[x] == 'x') ? 's' : 'S';
   if($p & 0x400) $g["x"] = ($g[x] == 'x') ? 's' : 'S';
   if($p & 0x200) $o["x"] = ($o[x] == 'x') ? 't' : 'T';

   return $type.$u["r"].$u["w"].$u["x"].$g["r"].$g["w"].$g["x"].$o["r"].$o["w"].$o["x"];
}

// Checks file name
function checkFileName($f) {
   global $subdir, $thisfile, $hidedotfiles, $hidefilepattern, $recyclebin, $recyclebininfofileext, $showimagesdir, $imagesdir, $readmefile, $showreadmefile, $filealiases, $filealiasext;
 
   $f = @basename($f);

   return !(   (($subdir == "") && (strtolower($f) == $thisfile))
            || ($f == "..")
            || (($subdir == "") && ($f == $recyclebin))
            || (!$showimagesdir && ((($subdir == "") && ($f == $imagesdir)) || ($subdir == $imagesdir)))
            || ($hidedotfiles && ($f[0] == '.'))
            || (($hidefilepattern != "") && ereg($hidefilepattern, $f))
            || ($filealiases && ereg("^.*\.".strtolower($filealiasext)."$", strtolower($f)))
            || (!$showreadmefile && ($f == $readmefile))
            || (($subdir == $recyclebin) && (($f == $readmefile) || ereg(".*\.".strtolower($recyclebininfofileext)."$", strtolower($f)))) );
}

// Checks for edit extension
function checkExtension($f) {
   global $viewextensions;

   if (count($viewextensions) != 0) {
      foreach ($viewextensions as $ext) {
         if (ereg(".*\.".strtolower($ext)."$", strtolower($f))) return true;
      }
      return false;
   } else {
      return true;
   }
}

// Find files matching a regexp pattern
function searchFiles($sd, $searchpattern, $level = 0) {
   global $basedir, $subdir, $searchmaxlevels, $regexpsearch, $hidefilepattern;

   $count = 0;

   if (   ($searchmaxlevels == 0)
       || ($level < $searchmaxlevels)) {
      $dir = $basedir."/".$sd;

      if (!$regexpsearch && $level == 0) {
         $searchpattern = "^".str_replace("*", ".*", str_replace("?", ".", str_replace(".", "\.", $searchpattern)))."$";
      }
         
      $d = @opendir($dir); 

      while (($file = @readdir($d))) { 
         if (@is_dir($dir."/".$file) && ($file != ".") && ($file != "..")) {
            $count += searchFiles($sd."/".$file, $searchpattern, $level + 1); 
         } else if (ereg(strtolower($searchpattern), strtolower($file)) && !ereg($hidefilepattern, $file)) {
            $fp = getFilePath($file, $sd);
            addFileToList($file, $fp, ($subdir != "") ? str_replace($subdir."/", "", extractSubdir($fp)) : extractSubdir($fp), 9);
            $count++;
         }
      } 

      @closedir($d); 
   }

   return $count;
}

// Adds a file to file list
function addFileToList($file, $fp, $alias, $level, $image = "", $msg = "") {
   global $files, $subdir, $recyclebin, $sortby, $showunixattrs, $dateformat, $useimages, $imagesdir, $dirimage, $fileimage, $messages;

   if ($alias == "") $alias = $file;

   $date = @filemtime($fp);
   $size = (@is_dir($fp)) ? -1 : @filesize($fp); // negative size for directories
   $perms = "";
   $owner = "";
   $group = "";
   if ($showunixattrs) {
      $perms = getFilePerms(@fileperms($fp));
      if (function_exists("posix_getpwuid")) {
         $uid = @posix_getpwuid(@fileowner($fp));
         $owner = $uid["name"];
      }
      if (function_exists("posix_getgrgid")) {
         $gid = @posix_getgrgid(@filegroup($fp));
         $group = $gid["name"];
      }
   }

   if ($sortby == "size") {
      $key = $level." ".str_pad($size, 20, "0", STR_PAD_LEFT)." ".$alias;
   } else if ($sortby == "date") {
      $key = $level." ".date("YmdHis", $date)." ".$alias;
   } else {
      $key = $level." ".$alias;
   }

   $files[$key] = array(
      "name" => $file,
      "alias" => (($useimages) ? "<img src=\"$imagesdir/".(($image != "") ? $image : ((@is_dir($fp)) ? $dirimage : $fileimage))."\" border=0 align=center>&nbsp;" : "").(($subdir == $recyclebin) ? ereg_replace("(.*)\.[0-9]*$", "\\1", $alias) : $alias),
      "level" => $level,
      "path" => $fp,
      "size" => $size,
      "date" => date($dateformat, $date),
      "perms" => $perms,
      "owner" => $owner,
      "group" => $group,
      "dir" => @is_dir($fp),
      "link" => @is_link($fp),
      "readonly" => !@is_writeable($fp),
      "statusmsg" => (($msg != "") ? $msg : ((@is_dir($fp)) ? $messages["inf4"] : $messages["inf5"]))
   );
}

// Generates full message
function getMsg($class, $msgcode, $msgparam1 = "", $msgparam2 = "") {
   global $messages;

   $msg = str_replace("%VAR1%", $msgparam1, str_replace("%VAR2%", $msgparam2, $messages[$msgcode]));

   return (($class != "") ? "<p class=$class>" : "").htmlspecialchars($msg);
}

// Manages redirections
function redirectWithMsg($class, $msgcode, $msgparam1 = "", $msgparam2 = "", $extraparams = "") {
   global $thisscript, $subdir, $sortby;

   $msg = getMsg($class, $msgcode, $msgparam1, $msgparam2);
   header("Location: $thisscript?subdir=".rawurlencode($subdir)."&sortby=$sortby&msg=".rawurlencode($msg).$extraparams);
   exit;
}

// Page header
function pageHeader() {
   global $hiddeninfo, $title, $windowtitle, $thbgcolor, $thfgcolor, $tdbgcolor, $tdfgcolor, $bodybgcolor, $bodyfgcolor, $infocolor, $warningcolor, $errorcolor, $linkcolor, $actlinkcolor, $msg, $charset, $defaultstatusmsg;

   if ($hiddeninfo != "") {
      echo "\n<!--\nINFO :$hiddeninfo\n-->\n";
   }
   echo "\n<html dir=rtl>";
   echo "\n<head>";
   echo "\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=$charset\">";
   echo "\n<title>$windowtitle</title>";
   echo "\n<style type=\"text/css\" media=screen>";
   echo "\n<!--";
   echo "\nbody       { background-color: $bodybgcolor; color: $bodyfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\ninput       { background-color: $bodybgcolor; color: $bodyfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\n.button       { background-color: #CCCCCC; color: #000000; font-family: Tahoma, Helvetica, sans-serif; font-size: 8pt; }";
   echo "\n.text       { background-color: #FFFFFF; color: #000000; font-family: Tahoma, Helvetica, sans-serif; font-size: 8pt; }";
   echo "\n.password       { background-color: #FFFFFF; color: #000000; font-family: Tahoma, Helvetica, sans-serif; font-size: 8pt; }";
   echo "\np          { color: $bodyfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\n.info      { color: $infocolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\n.warning   { color: $warningcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\n.error     { color: $errorcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\n.fix       { font-family: Courier; font-size: 10pt; }";
   echo "\nh1         { font-family: Tahoma, Helvetica, sans-serif; font-size: 16pt; }";
   echo "\nh2         { font-family: Tahoma, Helvetica, sans-serif; font-size: 12pt; }";
   echo "\nth         { background-color: $thbgcolor; color: $thfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\ntd         { background-color: $tdbgcolor; color: $tdfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; }";
   echo "\n.tdlt      { background-color: $bodybgcolor; color: $bodyfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; text-align: left; vertical-align: top; }";
   echo "\n.tdrt      { background-color: $bodybgcolor; color: $bodyfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; text-align: right; vertical-align: top; }";
   echo "\n.tdcc      { background-color: $bodybgcolor; color: $bodyfgcolor; font-family: Tahoma, Helvetica, sans-serif; font-size: 9pt; text-align: center; vertical-align: center; }";
   echo "\na:link     { color: $linkcolor; text-decoration: none; }";
   echo "\na:active   { color: $actlinkcolor; text-decoration: underline; }";
   echo "\na:visited  { color: $linkcolor; text-decoration: none; }";
   echo "\na:hover    { color: $actlinkcolor; text-decoration: underline; }";
   echo "\n-->";
   echo "\n</style>";
   echo "\n<script language=\"javascript\">";
   echo "\n<!--";
   echo "\nfunction statusMsg(txt) {";
   echo    "\nif (txt == '') txt = '$defaultstatusmsg';";
   echo    "\nwindow.status = txt;";
   echo    "\nreturn true;";
   echo "\n}";
   echo "\n//-->";
   echo "\n</script>";
   echo "\n</head>";
   echo "\n<body onLoad='return statusMsg(\"\")'>\n";
   echo "<h1>$title</h1>";

   if (isset($msg)) echo $msg; // Displays message after redirection if required
}

// Return quoted string for JavaScript usage
function quoteJS($str) {
   return str_replace("'", "\\&#39;", $str);
}

// Page footer
function pageFooter() {
   echo "<hr><br><br><br><br>";
   echo "\n</body>";
   echo "\n</html>";
}

$hiddeninfo = "";

// Getting variables (TODO : increase security here)
if (!empty($HTTP_POST_VARS)) extract($HTTP_POST_VARS);
if (!empty($HTTP_GET_VARS)) extract($HTTP_GET_VARS);

if (function_exists("ini_set")) {
   // Try to inhibate error reporting setting
   @ini_set("display_errors", 0);

   // Try to activate upload settings, inhibate uploads if failed
   if ($allowupload && (@get_cfg_var("file_uploads") != 1)) {
      if (@ini_set("file_uploads", 1) === true) {
         @ini_set("upload_max_filesize", $uploadmaxsize);
      } else {
         $allowupload = false;
         $hiddeninfo .= "\nUpload feature inhibited";
      }
   }

   // Try to activate URL open setting, inhibate URL uploads if failed
   if ($allowurlupload && (@get_cfg_var("allow_url_fopen") != 1)) {
      if (@ini_set("allow_url_fopen", 1) === false) {
         $allowurlupload = false;
         $hiddeninfo .= "\nURL upload feature inhibited";
      }
   }
} else {
   // Inhibate uploads if upload setting not activated
   if ($allowupload && (@get_cfg_var("file_uploads") != 1)) {
      $allowupload = false;
      $hiddeninfo .= "\nUpload feature inhibited";
   }

   // Inhibate URL uploads if URL open setting not activated
   if ($allowurlupload && (@get_cfg_var("allow_url_fopen") != 1)) {
      $allowurlupload = false;
      $hiddeninfo .= "\nURL upload feature inhibited";
   }
}

// Inhibitate file links with custom base directory
if ($filelinks && (($basedir != @dirname(__FILE__)) && ($basevirtualdir == ""))) {
   $filelinks = false;
   $hiddeninfo .= "\nFile links feature inhibited";
}

// Inhibate delete action if trash can directory is not writeable
if ($allowdelete && !@is_dir($basedir."/".$recyclebin)) {
   $allowdelete = false;
   $hiddeninfo .= "\nDelete action inhibited (no trash can)";
}

// Prevents from seeing this file
$thisfile = strtolower(@basename(__FILE__));

// Turns antislashes into slashes for base directory
$basedir = strtr($basedir, "\\", "/");

// This script URI
$thisscript = $HTTP_SERVER_VARS["PHP_SELF"];

// General HTTP directives
header("Expires: -1");
header("Pragma: no-cache");
header("Cache-Control: max-age=0");
header("Cache-Control: no-cache");
header("Cache-Control: no-store");
if ($act != "download") {
   header("Content-Type: text/html; charset=$charset");
}

// Built-in authentication check
if ($authmethod == "session") {
   session_start();

   if (!session_is_registered("EAUSER")) {
      if (  isset($HTTP_POST_VARS["username"])
         && isset($HTTP_POST_VARS["password"])
         && isset($user[$HTTP_POST_VARS["username"]])
         && ($HTTP_POST_VARS["password"] == $user[$HTTP_POST_VARS["username"]]["password"])) {
         session_register("EAUSER");
         $HTTP_SESSION_VARS["EAUSER"] = $HTTP_POST_VARS["username"];
         header("Location: $thisscript");
         exit;
      } else {
         pageHeader();
         if (isset($HTTP_POST_VARS["username"])) echo getMsg("error", "rlm2");
         echo "<form name=authForm method=post action=$thisscript>";
		 echo "<p align=center>";
		 echo "<br><br><br><br><br><br><br><br><br><br>";
         echo "<table border=0 cellspacing=0 cellpadding=10>";
         echo "<tr><th>".$messages["rlm3"]."</th><td><input type=text class=text name=username value=\"".$HTTP_POST_VARS["username"]."\"></td></tr>";
         echo "<tr><th>".$messages["rlm4"]."</th><td><input type=password calss=text name=password></td></tr>";
         echo "<tr><th>&nbsp;</th><td><center><input type=submit value=\"".$messages["rlm5"]."\"></center></td></tr>";
         echo "</table>";
		 echo "</p>";
         echo "</form>";
         echo "<script language=javascript>document.authForm.username.select();document.authForm.username.focus();</script>";
         pageFooter();
         exit;
      }
   } else {
      if ($act == "logout") {
	 session_unregister("EAUSER");
         header("Location: $thisscript");
         exit;
      } else {
         $username = $HTTP_SESSION_VARS["EAUSER"];
      }
   }
} else if ($authmethod == "cookie") {
   if (!isset($HTTP_COOKIE_VARS["EAUSER"])) {
      if (  isset($HTTP_POST_VARS["username"])
         && isset($HTTP_POST_VARS["password"])
         && isset($user[$HTTP_POST_VARS["username"]])
         && ($HTTP_POST_VARS["password"] == $user[$HTTP_POST_VARS["username"]]["password"])) {
         setcookie("EAUSER", $HTTP_POST_VARS["username"]);  
         header("Location: $thisscript");
         exit;
      } else {
         pageHeader();
         if (isset($HTTP_POST_VARS["username"])) echo getMsg("error", "rlm2");
         echo "<form name=authForm method=post action=$thisscript>";
         echo "<table border=0 cellspacing=0 cellpadding=10>";
         echo "<tr><th>".$messages["rlm3"]."</th><td><input type=text class=text name=username value=\"".$HTTP_POST_VARS["username"]."\"></td></tr>";
         echo "<tr><th>".$messages["rlm4"]."</th><td><input type=password class=text name=password></td></tr>";
         echo "<tr><th>&nbsp;</th><td><center><input type=submit value=\"".$messages["rlm5"]."\"></center></td></tr>";
         echo "</table>";
         echo "</form>";
         echo "<script language=javascript>document.authForm.username.select();document.authForm.username.focus();</script>";
         pageFooter();
         exit;
      }
   } else {
      if ($act == "logout") {
         setcookie("EAUSER", "");  
         header("Location: $thisscript");
         exit;
      } else {
         $username = $HTTP_COOKIE_VARS["EAUSER"];
      }
   }
} else if ($authmethod == "realm") {
   if (  !isset($HTTP_SERVER_VARS["PHP_AUTH_USER"])
      || (!isset($user[$HTTP_SERVER_VARS["PHP_AUTH_USER"]])
      || ($HTTP_SERVER_VARS["PHP_AUTH_PW"] != $user[$HTTP_SERVER_VARS["PHP_AUTH_USER"]]["password"]))) {
      header("WWW-Authenticate: Basic realm=\"$realmname\"");
      header("HTTP/1.0 401 Unauthorized");
      pageHeader();
      echo getMsg("error", "rlm1");
      pageFooter();
      exit;
   } else {
      $username = $HTTP_SERVER_VARS["PHP_AUTH_USER"];
   }
} else if ($authmethod == "server") {
   if (isset($HTTP_SERVER_VARS["PHP_AUTH_USER"])) {
      $username = $HTTP_SERVER_VARS["PHP_AUTH_USER"];
   } else if (isset($HTTP_ENV_VARS["REMOTE_USER"])) {
      $username = $HTTP_ENV_VARS["REMOTE_USER"];
   }
} else {
   $username = "";
}

// Check of user's profile
if ($authmethod != "none") {
   if ($username == "") {
      pageHeader();
      echo getMsg("error", "rlm1");
      pageFooter();
      exit;
   } else if (!isset($user[$username])) {
      if (!$allowunknownusers) {
         pageHeader();
         echo getMsg("error", "rlm2");
         pageFooter();
         exit;
      } else {
         $userprofile = $unknownuserprofile;
      }
   } else {
      $userprofile = $user[$username]["profile"];
   }
} else {
   $userprofile = $noauthprofile;
}

// Setting rights
$allowmove = $profile[$userprofile]["allowmove"];
$allowrename = $profile[$userprofile]["allowrename"];
$allowalias = $profile[$userprofile]["allowalias"];
$allowcopy = $profile[$userprofile]["allowcopy"];
$allowdelete = $profile[$userprofile]["allowdelete"];
$allowremovedir = $profile[$userprofile]["allowremovedir"];
$allowcreatefile = $profile[$userprofile]["allowcreatefile"];
$allowcreatedir = $profile[$userprofile]["allowcreatedir"];
$allowupload = $profile[$userprofile]["allowupload"];
$allowurlupload = $profile[$userprofile]["allowurlupload"];
$allowbrowsetrashcan = $profile[$userprofile]["allowbrowsetrashcan"];
$allowemptytrashcan = $profile[$userprofile]["allowemptytrashcan"];
$allowrestorefromtrashcan = $profile[$userprofile]["allowrestorefromtrashcan"];
$allowdownload = $profile[$userprofile]["allowdownload"];
$allowedit = $profile[$userprofile]["allowedit"];
$allowshow = $profile[$userprofile]["allowshow"];
$allowsearch = $profile[$userprofile]["allowsearch"];
$allowregexpsearch = $profile[$userprofile]["allowregexpsearch"];

// Parameters check
if (!isset($subdir) || $subdir == ".") $subdir = "";
if (  ($subdir != "")
   && (   strstr($subdir, "..")
       || (!$allowbrowsetrashcan && ($subdir == $recyclebin))
       || (!$showimagesdir && ($subdir == $imagesdir)) ) ) {
   $subdir = "";
   $hiddeninfo .= "\nRedirected to base directory";
}
$subdir = extractSubdir($basedir."/".$subdir);
if (!isset($sortby)) $sortby = $defaultsortby;
if (!isset($act)) $act = "";
if (!isset($file)) {
   if (!isset($selfiles) || !is_array($selfiles)) {
      $file = "";
   } else {
      $file = $selfiles[0];
   }
}

// Array for file lists
$files = array();

// Processes actions and redirects to pages
if (($act != "edit") && ($act != "show")) {
   if ($act == "") {
      @clearstatcache();

      if ($d = @opendir($basedir."/".$subdir)) {
         // builds an indexed array for files
         if ($subdir != "") {
            addFileToList("", $basedir, "[".$messages["dir2"]."]", 0, $upperdirimage, $messages["inf6"]);
         }
         if ($subdir != $recyclebin) {
            addFileToList("..", getFilePath(".."), "[".$messages["dir3"]."]", 2, $upperdirimage, $messages["inf7"]);
         }
         if ($allowbrowsetrashcan && ($subdir != $recyclebin) && (@is_dir($basedir."/".$recyclebin))) {
            addFileToList($recyclebin, $basedir."/".$recyclebin, "[".$messages["dir4"]."]", 1, $recyclebinimage, $messages["inf8"]);
         }
         while ($file = @readdir($d)) {
            if (checkFileName($file)) {
               $fp = getFilePath($file);
               $fp_alias = $fp.".".$filealiasext; 

               $alias = "";
               if ($filealiases && @is_readable($fp_alias)) {
                  $fd = @fopen($fp_alias, "r");
                  $alias = trim(@fread($fd, @filesize($fp_alias)))." <i>(".(($subdir == $recyclebin) ? ereg_replace("(.*)\.[0-9]*$", "\\1", $file) : $file).")</i>";
                  @fclose($fd);
               }

               addFileToList($file, $fp, $alias, 9);
            }
         }

         @closedir($d);

         // Sort the array according to indexes
         ksort($files);
      } else {
         pageHeader();
         echo getMsg("error", "dir1", $subdir);
         pageFooter();
         exit;
      }
   } else if ($allowsearch && ($act == "search")) {
      $searchpattern = trim($searchpattern);

      if ($searchpattern != "") {
         if (!isset($regexpsearch)) $regexpsearch = false;

         @clearstatcache();

         addFileToList($subdir, getFilePath("."), "[".$messages["sch5"]."]", 1, $upperdirimage);

         if (searchFiles($subdir, $searchpattern) == 0) {
            redirectWithMsg("warning", "sch3", $searchpattern, "", "&searchpattern=".rawurlencode($searchpattern).(($allowregexpsearch) ? "&regexpsearch=$regexpsearch" : ""));
         }

         ksort($files);
      } else {
         redirectWithMsg("error", "sch6");
      }
   } else if ($allowmove && ($act == "move")) {
      for ($i = 0; $i < count($selfiles); $i++) {
         $file = $selfiles[$i];

         if (isset($file) && ($file != "") && isset($dest)) {
            if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
               redirectWithMsg("warning", "mov1");
            } else if (($dest != "..") && !checkFileName($dest)) {
               redirectWithMsg("warning", "mov2");
            } else {
               $fp = getFilePath($file);
               $fpd = ($dest == "") ? $basedir : getFilePath($dest);
               $fp_alias = $fp.".".$filealiasext;
               $fpd_alias = $fpd."/".@basename($file).".".$filealiasext;

               $destinfo = ($dest == "") ? "main directory" : (($dest == "..") ? "upper directory" : $dest);

               if (@is_dir($fpd)) {
                  if (@rename($fp, $fpd."/".@basename($file))) {
                     if ($filealiases && @is_readable($fp_alias)) @rename($fp_alias, $fpd_alias);
                  } else {
                     redirectWithMsg("error", "mov4", $file, $destinfo);
                  }
               } else {
                  redirectWithMsg("error", "mov5", $dest);
               }
            }
         } else {
            redirectWithMsg("warning", "mov6");
         }
      }
      redirectWithMsg("info", "mov3", $destinfo);
   } else if ($allowdelete && ($act == "delete") && ($subdir != $recyclebin)) {
      for ($i = 0; $i < count($selfiles); $i++) {
         $file = $selfiles[$i];

         if (isset($file) && ($file != "")) {
            if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
               redirectWithMsg("warning", "del1");
            } else {
               $fp = getFilePath($file);

               if (!@is_dir($fp) || @is_link($fp)) {
                  $tr = $basedir."/".$recyclebin;
                  $fpd = $tr."/".@basename($file).".".date("YmdHis");
                  $fpd_info = $fpd.".".$recyclebininfofileext;
                  $fp_alias = $fp.".".$filealiasext;
                  $fpd_alias = $fpd.".".$filealiasext;

                  if (@is_dir($tr) && ($fdi = @fopen($fpd_info, "w")) && @rename($fp, $fpd)) {
                     @fwrite($fdi, $fp);
                     @fclose($fdi);
                     if ($filealiases && @is_readable($fp_alias)) @rename($fp_alias, $fpd_alias);
                  } else {
                     redirectWithMsg("error", "del5", $file);
                  }
               } else {
                  redirectWithMsg("error", "del7", $file);
               }
            }
         } else {
            redirectWithMsg("warning", "del6");
         }
      }
      redirectWithMsg("info", "del4");
   } else if ($allowremovedir && ($act == "rmdir") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "")) {
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "rmd1");
         } else {
            $fp = getFilePath($file);

            if (@is_dir($fp) && !@is_link($fp)) {
               if (@rmdir($fp)) {
                  redirectWithMsg("info", "rmd2", $file);
               } else {
                  redirectWithMsg("error", "rmd3", $file);
               }
            } else {
               redirectWithMsg("error", "rmd5", $file);
            }
         }
      } else {
         redirectWithMsg("warning", "rmd4");
      }
   } else if ($allowrename && ($act == "rename") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "") && isset($renameto) && ($renameto != "")) {
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "ren1");
         } else if (!checkFileName($renameto)) {
            redirectWithMsg("warning", "ren2");
         } else {
            $fp = getFilePath($file);
            $fpto = getFilePath($renameto);
            $fp_alias = $fp.".".$filealiasext;
            $fpto_alias = $fpto.".".$filealiasext;

            if (@rename($fp, $fpto)) {
               if ($filealiases && @is_readable($fp_alias)) @rename($fp_alias, $fpto_alias);
               redirectWithMsg("info", "ren3", $file, $renameto);
            } else {
               redirectWithMsg("error", "ren4", $file, $renameto);
            }
         }
      } else {
         redirectWithMsg("warning", "ren5");
      }
   } else if ($allowcopy && ($act == "copy") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "") && isset($copyto) && ($copyto != "")) {
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "cpy1");
         } else if (!checkFileName($copyto)) {
            redirectWithMsg("warning", "cpy2");
         } else {
            $fp = getFilePath($file);
            $fpto = getFilePath($copyto);

            if (!@is_dir($fp)) {
               if (@copy($fp, $fpto)) {
                  redirectWithMsg("info", "cpy3", $file, $copyto);
               } else {
                  redirectWithMsg("error", "cpy4", $file, $copyto);
               }
            } else {
               redirectWithMsg("error", "cpy5");
            }
         }
      } else {
         redirectWithMsg("warning", "cpy6");
      }
   } else if ($allowalias && $filealiases && ($act == "alias") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "")) {
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "als1");
         } else {
            $fp = getFilePath($file);
            $fp_alias = $fp.".".$filealiasext;

            if (!@is_dir($fp)) {
               if ($aliasto != "") {
                  if ($fda = @fopen($fp_alias, "w")) {
                     @fwrite($fda, $aliasto);
                     @fclose($fda);
                     redirectWithMsg("info", "als2", $file);
                  } else {
                     redirectWithMsg("error", "als3", $file);
                  }
               } else {
                  if (@is_readable($fp_alias)) {
                     @unlink($fp_alias);
                     redirectWithMsg("info", "als4", $file);
                  } else {
                     redirectWithMsg("info", "als5", $file);
                  }
               }
            } else {
               redirectWithMsg("error", "als6");
            }
         }
      } else {
         redirectWithMsg("warning", "als7");
      }
   } else if ($allowcreatedir && ($act == "mkdir") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "")) {
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "mkd1");
         } else {
            $fp = getFilePath($file);

            if (@mkdir($fp, $dirmode)) {
               @chmod($fp, $dirmode); // mkdir sometimes fails to set permissions
               redirectWithMsg("info", "mkd2", $file);
            } else {
               redirectWithMsg("error", "mkd3", $file);
            }
         }
      } else {
         redirectWithMsg("warning", "mkd4");
      }
      redirectWithMsg($msg);
   } else if ($allowcreatefile && ($act == "create") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "")) {
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "cre1");
         } else {
            $fp = getFilePath($file);

            if (@touch($fp)) {
               @chmod($fp, $filemode);
               redirectWithMsg("info", "cre2", $file);
            } else {
               redirectWithMsg("error", "cre3", $file);
            }
         }
      } else {
         redirectWithMsg("warning", "cre4");
      }
   } else if ($allowupload && ($act == "upload") && ($subdir != $recyclebin)) {
      if (isset($HTTP_POST_FILES["file"]) && ($HTTP_POST_FILES["file"]["size"] > 0)) {
         if (!checkFileName($HTTP_POST_FILES["file"]["name"]) || (($subdir == "") && ($HTTP_POST_FILES["file"]["name"] == $recyclebin))) {
            redirectWithMsg("warning", "fup1");
         } else {
            $fp = getFilePath($HTTP_POST_FILES["file"]["name"]);

            if (@copy($HTTP_POST_FILES["file"]["tmp_name"], $fp)) {
               @unlink($HTTP_POST_FILES["file"]["tmp_name"]);
               @chmod($fp, $filemode);
               redirectWithMsg("info", "fup2", $HTTP_POST_FILES["file"]["name"]);
            } else {
               redirectWithMsg("error", "fup3", $HTTP_POST_FILES["file"]["name"]);
            }
         }
      } else {
         redirectWithMsg("warning", "fup4");
      }
   } else if ($allowurlupload && ($act == "urlupload") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "")) {
         $url = $file;
         $file = @basename(ereg_replace("^[a-zA-Z]*\:\/(.*)$", "\\1", $url));
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "uup1");
         } else {
            $fp = getFilePath($file);

            if (($fd = @fopen($url, "r")) && ($fdd = @fopen($fp, "w"))) {
               while (!@feof($fd)) {
                  fwrite($fdd, @fread($fd, 1024));
               }
               @fclose($fd);
               @fclose($fdd);
               redirectWithMsg("info", "uup2", $url, $file);
            } else {
               redirectWithMsg("error", "uup3", $url);
            }
         }
      } else {
         redirectWithMsg("warning", "uup4");
      }
   } else if ($allowemptytrashcan && ($act == "empty") && ($subdir == $recyclebin)) {
      $res = true;
      if ($d = @opendir($basedir."/".$subdir)) {
         while ($file = @readdir($d)) {
            $fp = getFilePath($file);

            if (($file != ".") && ($file != "..")) {
               if (@is_dir($fp) || !@unlink($fp)) {
                  $res = false;
               }
            }
         }
         @closedir($d);

         if ($res) {
            redirectWithMsg("info", "trc1");
         } else {
            redirectWithMsg("warning", "trc2");
         }
      } else {
         redirectWithMsg("error", "trc3");
      }
   } else if ($allowrestorefromtrashcan && ($act == "restore")) {
      for ($i = 0; $i < count($selfiles); $i++) {
         $file = $selfiles[$i];

         if (isset($file) && ($file != "")) {
            if (!checkFileName($file)) {
               redirectWithMsg("warning", "rst1");
            } else if ($subdir != $recyclebin) {
               redirectWithMsg("warning", "rst2");
            } else {
               $f = ereg_replace("(.*)\.[0-9]*$", "\\1", $file);
               $fp = getFilePath($file);
               $fp_info = $fp.".".$recyclebininfofileext;

               $fpd = "";
               if ($fdi = @fopen($fp_info, "r")) {
                  $fpd = trim(@fread($fdi, @filesize($fp_info)));
                  @fclose($fdi);
               }

               $fp_alias = $fp.".".$filealiasext;
               $fpd_alias = $fpd.".".$filealiasext;

               if (@rename($fp, $fpd)) {
                  @unlink($fp_info);
                  if ($filealiases && @is_readable($fp_alias)) @rename($fp_alias, $fpd_alias);
               } else {
                  redirectWithMsg("error", "rst4", $f);
               }
            }
         } else {
            redirectWithMsg("warning", "rst5");
         }
      }
      redirectWithMsg("info", "rst3");
   } else if ($allowedit && ($act == "save") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "")) {
         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "sav1");
         } else {
            $fp = getFilePath($file);

            if ($fd = @fopen($fp, "w")) {
               if (!isset($fileformat)) $fileformat = $defaultfileformat;

               $data = stripslashes($data); // Strips doubled backslashes
               $data = str_replace("\r\n", "\n", $data); // Remove LF => UNIX format
               if ($fileformat == "dos") $data = str_replace("\n", "\r\n", $data); // Add LF => DOS format

               @fwrite($fd, $data);
               @fclose($fd);

               redirectWithMsg("File $file saved (".strtoupper($fileformat)." format)", "info");
            } else {
               $msg = getMsg("error", "sav2", $file);
               $data = stripslashes($data);
               $act = "edit"; // To re-edit file (no redirection)
            }
         }
      } else {
         redirectWithMsg("warning", "sav3");
      }
   } else if ($allowdownload && ($act == "download") && ($subdir != $recyclebin)) {
      if (isset($file) && ($file != "")) {
         $subdir = @dirname($file);

         if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
            redirectWithMsg("warning", "dwn2");
         } else {
            $fp = getFilePath($file);

            if (@is_readable($fp)) {
               @clearstatcache();

               header("Content-Type: application/force-download");
               header("Content-Transfer-Encoding: binary");
               header("Content-Length: ".@filesize($fp));
               header("Content-Disposition: attachment; filename=\"".@basename($file)."\"");

               @readfile($fp);

               exit;
            } else {
               redirectWithMsg("error", "dwn3", $file);
            }
         }
      } else {
         redirectWithMsg("warning", "dwn4");
      }
   } else {
      redirectWithMsg("error", "act1");
   }
}

// Common part of the page
pageHeader();

echo "<p><table border=0 cellspacing=2 cellpadding=2>";
if ($allowsearch) echo "<form action=$thisscript method=get name=searchForm>";
echo "<tr><td width=".(($showunixattrs) ? 310 : 360)."><b>";
if ($useimages) echo "<img src=\"$imagesdir/$opendirimage\" align=center> ";

if ($act == "search") {
   echo getMsg("", "sch4", $searchpattern)." (";
}
if ($subdir == "") {
   echo $messages["dir2"];
} else if ($subdir == $recyclebin) {
   echo $messages["dir4"];
} else {
   echo $messages["dir5"]." : ".htmlspecialchars($subdir);
}
if ($act == "search") echo ")";

echo "</b><br>".date($dateformat);
if (($authmethod == "session") || ($authmethod == "cookie")) {
   echo " (<a href=$thisscript?act=logout>".$messages["rlm6"]."</a>)";
}
echo "</td>";

if ($allowsearch && ($subdir != $recyclebin) && (($act == "") || ($act == "search"))) {
   echo "<td width=20 class=tdlt>&nbsp;</td>";
   echo "<td class=tdlt>";
   echo "<input name=act type=hidden value=search>";
   echo "<input name=subdir type=hidden value=\"$subdir\">";
   echo "<input name=sortby type=hidden value=$sortby>";
   echo "<input name=searchpattern type=text class=text size=15 value=\"$searchpattern\"> ";
   echo "<input type=button class=button value=\"".$messages["sch2"]."\" onClick='submitActForm(document.searchForm, \"searchpattern\", \"".quoteJS($messages["sch6"])."\")'>";
   if ($allowregexpsearch) {
      echo "<br><input type=checkbox value=true name=regexpsearch".(($regexpsearch) ? " checked" : "")."> ".$messages["sch7"];
   }
   echo "</td>";
}

echo"</tr>";
if ($allowsearch) echo "</form>";
echo "</table>";

// Edit or show page
if (($allowedit && ($act == "edit")) || ($allowshow && ($act == "show")) && ($subdir != $recyclebin)) {
   if (isset($file) && ($file != "")) {
      if (!checkFileName($file) || (($subdir == "") && ($file == $recyclebin))) {
         echo getMsg("warning", ($act == "edit") ? "edt1" : "edt2");
      } else if (!checkExtension($file)) {
         echo getMsg("warning", ($act == "edit") ? "edt3" : "edt4");
      } else {
         if (!isset($data)) {
            $fp = getFilePath($file);

            if ($fd = @fopen($fp, "r")) {
               $data = @fread($fd, @filesize($fp));
               @fclose($fd);
            } else {
               echo getMsg("error", "edt5");
            }
         }

         if ($act == "edit") {
            echo "<p><b>".$messages["edt8"]." : </b>".htmlspecialchars($file);
            
            echo "\n<script language=\"javascript\">";
            echo "\n<!--";
            echo "\nfunction cancelEdit() {";
            echo    "\nf = document.editForm;";
            echo    "\nf.act.value = '';";
            echo    "\nf.file.value = '';";
            echo    "\nf.data.value = '';";
            echo    "\nf.method = 'get';";
            echo    "\nf.submit();";
            echo "\n}";
            echo "\n//-->";
            echo "\n</script>\n";

            echo "<p><table border=0 cellspacing=0 cellpadding=10>";
            echo "<form action=$thisscript method=post name=editForm>";
            echo "<input name=act type=hidden value=save>";
            echo "<input name=subdir type=hidden value=\"$subdir\">";
            echo "<input name=sortby type=hidden value=$sortby>";
            echo "<input name=file type=hidden value=\"$file\">";
            echo "<tr>";
            echo "<td colspan=3>";
            echo "<textarea name=data cols=$editcols rows=$editrows>";
            echo htmlspecialchars($data);
            echo "</textarea>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td align=left>";
            echo "<input type=radio name=fileformat value=dos".(($defaultfileformat == "dos") ? " checked" : "").">".$messages["sav6"];
            echo "<br><input type=radio name=fileformat value=unix".(($defaultfileformat == "unix") ? " checked" : "").">".$messages["sav7"];
            echo "</td>";
            echo "<td align=center>";
            echo "<input type=submit value=\"".$messages["sav4"]."\">";
            echo "</td>";
            echo "<td align=right>";
            echo "<input type=button class=button value=\"".$messages["sav5"]."\" onClick='cancelEdit()'>";
            echo "</td>";
            echo "</tr>";
            echo "</form>";
            echo "</table>";
         } else {
            echo "<p><b>".$messages["edt9"]." : </b>".htmlspecialchars($file);
            echo "<p><table border=0 cellspacing=0 cellpadding=10>";
            echo "<tr><td width=700><pre>".htmlspecialchars($data)."</pre>&nbsp;</td></tr>";
            echo "</table>";
            echo "<p><a href=$thisscript?subdir=".rawurlencode($subdir)."&sortby=$sortby onMouseOver='return statusMsg(\"".quoteJS($messages["edt12"])."\");' onMouseOut='return statusMsg(\"\");'>".$messages["edt12"]."</a>";
         }
      }
   } else {
      echo getMsg("warning", ($act == "edit") ? "edt6" : "edt7");
   }
// File list page
} else {
   echo "\n<script language=javascript>";
   echo "\n<!--";
   echo "\nfunction submitListForm(action) {";
   echo    "\nf = document.listForm;";
   echo    "\nfilechecked = 0;";

   if ($act == "search") {
      echo "\nsubdir = '';";
      echo "\nfilesubdir = new Array();";
      reset($files);
      $i = 0;
      while (list($key, $file) = each($files)) {
         if (!@is_dir($file["path"])) echo "\nfilesubdir[".$i++."] = \"".extractSubdir(@dirname($file["path"]))."\";";
      }
   } else {
      echo "\ndirchecked = false;";
      echo "\nisdir = new Array();";
      reset($files);
      $i = 0;
      while (list($key, $file) = each($files)) {
         if ($file["level"] == 9) echo "\nisdir[".$i++."] = ".(($file["dir"]) ? "true" : "false");
      }
   }

   echo "\nif (f.elements['selfiles[]']) {";
   echo    "\nif (f.elements['selfiles[]'].length > 1) {";
   echo       "\nfor (i = 0; i < f.elements['selfiles[]'].length; i++) {";
   echo          "\nif (f.elements['selfiles[]'][i].checked) {";
   echo             "\nfilechecked++;";

   if ($act == "search") {
      echo "\nsubdir = filesubdir[i];";
   } else {
      echo "\nif (isdir[i]) dirchecked = true;";
   }

   echo          "\n}";
   echo       "\n}";
   echo    "\n} else {";
   echo       "\nif (f.elements['selfiles[]'].checked) filechecked = 1;";

   if ($act == "search") {
      echo "\nsubdir = filesubdir[0];";
   } else {
      echo "\nif (isdir[0]) dirchecked = true;";
   }

   echo   "\n}";
   echo "\n}";

   if ($act != "search") {
      echo "\ndestchecked = false;";
      echo "\nif (f.dest) {";
      echo    "\nif (f.dest.length > 1) {";
      echo       "\nfor (i = 0; i < f.dest.length; i++) {";
      echo          "\nif (f.dest[i].checked) {";
      echo             "\ndestchecked = true;";
      echo             "\nbreak;";
      echo          "\n}";
      echo       "\n}";
      echo    "\n} else {";
      echo       "\ndestchecked = f.dest.checked;";
      echo    "\n}";
      echo "\n}";
      echo "\nif ((action == 'empty') && confirm(\"".$messages["act2"]." ?\")) {";
      echo    "\nf.act.value = action;";
      echo    "\nf.submit();";
      echo "\n} else if ((action == 'move') && ((filechecked == 0) || !destchecked)) {";
      echo    "\nalert(\"".quoteJS($messages["act3"])."\");";
      echo "\n} else if (filechecked == 0) {";
      echo    "\nalert(\"".quoteJS($messages["act4"])."\");";
      echo "\n} else if ((action != 'delete') && (action != 'move') && (action != 'restore') && (filechecked > 1)) {";
      echo    "\nalert(\"".quoteJS($messages["act7"])."\");";
      echo "\n} else if ((action != 'move') && (action != 'rename') && (action != 'rmdir') && dirchecked) {";
      echo    "\nalert(\"".quoteJS($messages["act8"])."\");";
      echo "\n} else if ((action == 'rmdir') && !dirchecked) {";
      echo    "\nalert(\"".quoteJS($messages["act9"])."\");";
      echo "\n} else if ((action == 'rename') && (f.renameto.value == '')) {";
      echo    "\nalert(\"".quoteJS($messages["act5"])."\");";
      echo "\n} else if ((action == 'copy') && (f.copyto.value == '')) {";
      echo    "\nalert(\"".quoteJS($messages["act6"])."\");";
      echo "\n} else if (((action == 'delete') || (action == 'rmdir')) && confirm(\"".quoteJS($messages["act2"])." ?\")) {";
      echo    "\nf.act.value = action;";
      echo    "\nf.submit();";
      echo "\n} else if ((action != 'delete') && (action != 'rmdir')) {";
      echo    "\nf.act.value = action;";
      echo    "\nf.submit();";
      echo "\n}";
   } else {
      echo "\nif (filechecked == 0) {";
      echo    "\nalert(\"".quoteJS($messages["act4"])."\");";
      echo "\n} else if (filechecked > 1) {";
      echo    "\nalert(\"".quoteJS($messages["act7"])."\");";
      echo "\n} else {";
      echo    "\nf.subdir.value = subdir;";
      echo    "\nf.act.value = '';";
      echo    "\nf.submit();";
      echo "\n}";
   }
   echo "\n}";

   echo "\nfunction submitActForm(f, n, m) {";
   echo    "\nif (f.elements[n].value == f.elements[n].defaultValue) {";
   echo       "\nalert(m);";
   echo    "\n} else {";
   echo       "\nf.submit();";
   echo    "\n}";
   echo "\n}";

   if (($act != "search") && ($allowmove || $allowdelete)) {
      echo "\nfunction selectAll() {";
      echo    "\nf = document.listForm;";
      echo    "\nc = f.selectall.checked;";
      echo    "\nif (f.elements['selfiles[]']) {";
      echo       "\nif (f.elements['selfiles[]'].length > 1) {";
      echo          "\nfor (i = 0; i < f.elements['selfiles[]'].length; i++) f.elements['selfiles[]'][i].checked = c;";
      echo       "\n} else {";
      echo          "\nf.elements['selfiles[]'].checked = c;";
      echo       "\n}";
      echo    "\n}";
      echo "\n}";
   }

   echo "\n//-->";
   echo "\n</script>\n";

   if (!empty($files)) {
      echo "<p><table border=0 cellspacing=2 cellpadding=2>";
      echo "<form action=$thisscript method=post name=listForm>";
      echo "<input name=act type=hidden value=''>";
      echo "<input name=subdir type=hidden value=\"$subdir\">";
      echo "<input name=sortby type=hidden value=$sortby>";
      echo "<tr>";
      echo "<td width=25 height=0 class=tdcc></td>";
      echo "<td width=25 height=0 class=tdcc></td>";
      echo "<td width=".(($showunixattrs) ? 250 : 300)." height=0 class=tdcc></td>";
      echo "<td width=100 height=0 class=tdcc></td>";
      echo "<td width=130 height=0 class=tdcc></td>";

      if ($showunixattrs) {
         echo "<td width=100 height=0 class=tdcc></td>";
         echo "<td width=75 height=0 class=tdcc></td>";
         echo "<td width=75 height=0 class=tdcc></td>";

         $nbcols = 9;
      } else {
         echo "<td width=50 height=0 class=tdcc></td>";

         $nbcols = 7;
      }

      echo "<td width=50 height=0 class=tdcc></td>";
      echo "</tr>";

      if (($readmefile != "") && @is_readable(getFilePath($readmefile)) && ($act != "search")) {
         echo "<tr><td colspan=$nbcols>";
         include(getFilePath($readmefile));
         echo "</td></tr>";
      }

      echo "<tr>";
      echo "<th>".$messages["tab1"]."</th>";
      echo "<th>".$messages["tab2"]."</th>";
      echo "<th>";
      echo "<a href=$thisscript?subdir=".rawurlencode($subdir)."&sortby=name".(($act == "search") ? "&act=search&searchpattern=".rawurlencode($searchpattern) : "")." onMouseOver='return statusMsg(\"".quoteJS($messages["inf1"])."\");' onMouseOut='return statusMsg(\"\");'>".$messages["tab3"]."</a>";
      echo "</th>";
      echo "<th>";
      echo "<a href=$thisscript?subdir=".rawurlencode($subdir)."&sortby=size".(($act == "search") ? "&act=search&searchpattern=".rawurlencode($searchpattern) : "")." onMouseOver='return statusMsg(\"".quoteJS($messages["inf2"])."\");' onMouseOut='return statusMsg(\"\");'>".$messages["tab4"]."</a>";
      echo "</th>";
      echo "<th>";
      echo "<a href=$thisscript?subdir=".rawurlencode($subdir)."&sortby=date".(($act == "search") ? "&act=search&searchpattern=".rawurlencode($searchpattern) : "")." onMouseOver='return statusMsg(\"".quoteJS($messages["inf3"])."\");' onMouseOut='return statusMsg(\"\");'>".$messages["tab5"]."</a>";
      echo "</th>";

      if ($showunixattrs) {
         echo "<th>".$messages["tab6"]."</th>";
         echo "<th>".$messages["tab7"]."</th>";
         echo "<th>".$messages["tab8"]."</th>";
      } else {
         echo "<th>".$messages["tab9"]."</th>";
      }
      echo "<th>".$messages["tab10"]."</th>";
      echo "</tr>";

      // Files and directories
      $total = 0;
      $nbfiles = 0;
      $nbdirs = 0;
      reset($files);
      while (list($key, $file) = each($files)) {
         // Directory section
         if ($file["dir"]) {
            if (($subdir != "") || ($file["name"] != "..")) {
               echo "<tr>";
               if (($file["level"] == 9) && ($allowmove || $allowrename || $allowdelete)) {
                  echo "<td><input type=checkbox name=\"selfiles[]\" value='".$file["name"]."'></td>";
               } else {
                  echo "<td>&nbsp;</td>";
               }
               if (($file["level"] != 1) && $allowmove && ($subdir != $recyclebin)) {
                  echo "<td><input type=radio name=dest value='".$file["name"]."'></td>";
               } else {
                  echo "<td>&nbsp;</td>";
               }
               echo "<td><p align=left>";
               if ($file["link"]) {
                  echo "<i><b>".htmlspecialchars($file["name"])."</b></i>";
               } else {
                  echo "<a href=$thisscript?subdir=".rawurlencode(extractSubdir($file["path"]))."&sortby=$sortby onMouseOver='return statusMsg(\"".quoteJS($file["statusmsg"])."\");' onMouseOut='return statusMsg(\"\");'>";
                  echo "<b>".$file["alias"]."</b>";
                  echo "</a>";
               }
               echo "</p></td>";
               echo "<td>&nbsp;</td>";
               echo "<td align=center>".$file["date"]."</td>";
               if ($showunixattrs) {
                  echo "<td align=center><span class=fix>".$file["perms"]."</span></td>";
                  echo "<td align=center>".$file["owner"]."</td>";
                  echo "<td align=center>".$file["group"]."</td>";
               } else {
                  echo "<td align=center>".(($file["readonly"]) ? $messages["tab14"] : "&nbsp;")."</td>";
               }
               echo "<td>&nbsp;</td>";
               echo "</tr>";

               if ($file["level"] == 9) $nbdirs++;
            }
         // File section
         } else {
            echo "<tr>";
            if ($allowmove || $allowrename || $allowcopy || $allowdelete || ($subdir == $recyclebin) || ($act == "search")) {
               echo "<td><input type=checkbox name=\"selfiles[]\" value='".$file["name"]."'>&nbsp;</td>";
            } else {
               echo "<td>&nbsp;</td>";
            }
            echo "<td>&nbsp;</td>";
            echo "<td align=left>".(($file["link"]) ? "<i>" : "");
            if ($filelinks) {
               if ($basevirtualdir == "") {
                  echo "<a href=".str_replace("%2F", "/", rawurlencode(extractSubdir($file["path"])));
               } else {
                  echo "<a href=".$basevirtualdir."/".rawurlencode($file["name"]);
               }
               echo " onMouseOver='return statusMsg(\"".quoteJS($file["statusmsg"])."\");' onMouseOut='return statusMsg(\"\");'>";
               echo $file["alias"];
               echo "</a>";
            } else {
               echo htmlspecialchars($file["name"]);
            }
            echo (($file["link"]) ? "</i>" : "")."</td>";
            echo "<td align=left>".$file["size"]."</td>";
            echo "<td align=center>".$file["date"]."</td>";
            if ($showunixattrs) {
               echo "<td align=center><span class=fix>".$file["perms"]."</span></td>";
               echo "<td align=center>".$file["owner"]."</td>";
               echo "<td align=center>".$file["group"]."</td>";
            } else {
               echo "<td align=center>".(($file["readonly"]) ? $messages["tab14"] : "&nbsp;")."</td>";
            }
            echo "<td align=center>&nbsp;";
            if (($act != "search") && ($allowedit || $allowshow) && checkExtension($file["name"]) && ($subdir != $recyclebin)) {
               if (!$file["readonly"] && $allowedit) {
                  echo "<a href=$thisscript?act=edit&subdir=".rawurlencode($subdir)."&sortby=$sortby&file=".rawurlencode($file["name"])." onMouseOver='return statusMsg(\"".quoteJS($messages["edt8"])."\");' onMouseOut='return statusMsg(\"\");'>".(($useimages) ? "<img src=\"$imagesdir/$editimage\" border=0>" : $messages["edt10"])."</a> ";
               }
               echo "<a href=$thisscript?act=show&subdir=".rawurlencode($subdir)."&sortby=$sortby&file=".rawurlencode($file["name"])." onMouseOver='return statusMsg(\"".quoteJS($messages["edt9"])."\");' onMouseOut='return statusMsg(\"\");'>".(($useimages) ? "<img src=\"$imagesdir/$viewimage\" border=0>" : $messages["edt11"])."</a> ";
            } 
            if (($allowdownload) && ($subdir != $recyclebin)) {
               echo "<a href=$thisscript?act=download&subdir=".rawurlencode($subdir)."&sortby=$sortby&file=".str_replace("%2F", "/", rawurlencode(extractSubdir($file["path"])))." onMouseOver='return statusMsg(\"".quoteJS($messages["dwn5"])."\");' onMouseOut='return statusMsg(\"\");'>".(($useimages) ? "<img src=\"$imagesdir/$downloadimage\" border=0>" : $messages["dwn1"])."</a> ";
            }
            echo "</td>";
            echo "</tr>";
            
            $total += $file["size"];
            $nbfiles++;
         }
      }
      if (($act != "search") && ($nbfiles > 0) && ($allowmove || $allowdelete)) {
         echo "<th align=left><input type=checkbox name=selectall onClick=\"selectAll()\"></th>";
         $n = $nbcols - 1;
      } else {
         $n = $nbcols;
      }
      echo "<th colspan=$n>$nbdirs ".$messages["tab11"]." و  $nbfiles ".$messages["tab12"]." (".round($total/1024)." ".$messages["tab13"].")</th>";
      echo "</tr>";
      echo "<tr><td class=tdrt colspan=$nbcols>&nbsp;</td></tr>";

      // Action forms
      if ($allowsearch && ($act == "search")) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["sch8"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=button class=button value=\"".$messages["sch9"]."\" onClick='submitListForm(\"goto\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (  ($act != "search")
         && $allowmove 
         && ($subdir != $recyclebin)
         && (  (($subdir != "") && (($nbfiles > 0) || ($nbdirs > 0)))
            || (($subdir == "") && ($nbfiles > 0) && ($nbdirs > 0)) ) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["mov9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=button class=button value=\"".$messages["mov0"]."\" onClick='submitListForm(\"move\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (   ($act != "search")
          && $allowdelete
          && ($subdir != $recyclebin) 
          && ($nbfiles > 0) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["del9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=button class=button value=\"".$messages["del0"]."\" onClick='submitListForm(\"delete\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (   ($act != "search")
          && $allowremovedir
          && ($subdir != $recyclebin) 
          && ($nbdirs > 0) 
          && @is_dir($basedir."/".$recyclebin) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["rmd9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=button class=button value=\"".$messages["rmd0"]."\" onClick='submitListForm(\"rmdir\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (   ($act != "search")
          && $allowrename
          && ($subdir != $recyclebin)
          && (($nbfiles > 0) || ($nbdirs > 0)) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["ren9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=text class=text name=renameto size=15> ";
         echo "<input type=button class=button value=\"".$messages["ren0"]."\" onClick='submitListForm(\"rename\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (   ($act != "search")
          && $allowcopy
          && ($subdir != $recyclebin)
          && ($nbfiles > 0) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["cpy9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=text class=text name=copyto size=15> ";
         echo "<input type=button class=button value=\"".$messages["cpy0"]."\" onClick='submitListForm(\"copy\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (   ($act != "search")
          && $allowalias
          && ($subdir != $recyclebin)
          && ($nbfiles > 0) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["als9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=text class=text name=aliasto size=15> ";
         echo "<input type=button class=button value=\"".$messages["als0"]."\" onClick='submitListForm(\"alias\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (   ($act != "search")
          && $allowrestorefromtrashcan
          && ($subdir == $recyclebin)
          && ($nbfiles > 0) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["rst9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=button class=button value=\"".$messages["rst0"]."\" onClick='submitListForm(\"restore\")'>";
         echo "</td>";
         echo "</tr>";
      }
      if (   ($act != "search")
          && $allowemptytrashcan
          && ($subdir == $recyclebin)
          && ($nbfiles > 0) ) {
         echo "<tr>";
         echo "<td class=tdrt colspan=3>";
         echo $messages["trc9"]." :&nbsp;";
         echo "</td>";
         echo "<td class=tdlt colspan=".($nbcols - 3).">";
         echo "<input type=button class=button value=\"".$messages["trc0"]."\" onClick='submitListForm(\"empty\")'>";
         echo "</td>";
         echo "</tr>";
      }
      echo "</form>";
      if ($subdir != $recyclebin) {
         echo "<tr><td class=tdrt colspan=$nbcols>&nbsp;</td></tr>";

         if (   ($act != "search")
             && $allowcreatedir ) {
            echo "<form action=$thisscript method=post name=createDirForm>";
            echo "<input name=act type=hidden value=mkdir>";
            echo "<input name=subdir type=hidden value=\"$subdir\">";
            echo "<input name=sortby type=hidden value=$sortby>";
            echo "<tr>";
            echo "<td class=tdrt colspan=3>";
            echo $messages["mkd9"]." :&nbsp;";
            echo "</td>";
            echo "<td class=tdlt colspan=".($nbcols - 3).">";
            echo "<input name=file type=text class=text size=15> ";
            echo "<input type=button class=button value=\"".$messages["mkd0"]."\" onClick='submitActForm(document.createDirForm, \"file\", \"".quoteJS($messages["mkd4"])."\")'>";
            echo "</td>";
            echo "</tr>";
            echo "</form>";
         }
         if (   ($act != "search")
             && $allowcreatefile ) {
            echo "<form action=$thisscript method=post name=createFileForm>";
            echo "<input name=act type=hidden value=create>";
            echo "<input name=subdir type=hidden value=\"$subdir\">";
            echo "<input name=sortby type=hidden value=$sortby>";
            echo "<tr>";
            echo "<td class=tdrt colspan=3>";
            echo $messages["cre9"]." :&nbsp;";
            echo "</td>";
            echo "<td class=tdlt colspan=".($nbcols - 3).">";
            echo "<input name=file type=text class=text size=15> ";
            echo "<input type=button class=button value=\"".$messages["cre0"]."\" onClick='submitActForm(document.createFileForm, \"file\", \"".quoteJS($messages["cre4"])."\")'>";
            echo "</td>";
            echo "</tr>";
            echo "</form>";
         }
         if (   ($act != "search")
             && $allowupload ) {
            echo "<form action=$thisscript method=post enctype=multipart/form-data name=uploadFileForm>";
            echo "<input name=act type=hidden value=upload>";
            echo "<input name=subdir type=hidden value=\"$subdir\">";
            echo "<input name=sortby type=hidden value=$sortby>";
            echo "<input name=max_file_size type=hidden value=$uploadmaxsize>";
            echo "<tr>";
            echo "<td class=tdrt colspan=3>";
            echo $messages["fup9"]." :&nbsp;";
            echo "</td>";
            echo "<td class=tdlt colspan=".($nbcols - 3).">";
            echo "<input name=file type=file size=15> ";
            echo "<input type=button class=button value=\"".$messages["fup0"]."\" onClick='submitActForm(document.uploadFileForm, \"file\", \"".quoteJS($messages["fup4"])."\")'>";
            echo "</td>";
            echo "</tr>";
            echo "</form>";
         }
         if (   ($act != "search")
             && $allowurlupload) {
            echo "<form action=$thisscript method=post name=uploadUrlForm>";
            echo "<input name=act type=hidden value=urlupload>";
            echo "<input name=subdir type=hidden value=\"$subdir\">";
            echo "<input name=sortby type=hidden value=$sortby>";
            echo "<tr>";
            echo "<td class=tdrt colspan=3>";
            echo $messages["uup9"]." :&nbsp;";
            echo "</td>";
            echo "<td class=tdlt colspan=".($nbcols - 3).">";
            echo "<input name=file type=text class=text size=15 value='http://'> ";
            echo "<input type=button class=button value=\"".$messages["uup0"]."\" onClick='submitActForm(document.uploadUrlForm, \"file\", \"".quoteJS($messages["uup4"])."\")'>";
            echo "</td>";
            echo "</tr>";
            echo "</form>";
         }
      }

      echo "</table>";
   }
}

pageFooter();
?>

<?php
/**
 * VFM - veno file manager: include/header.php
 * site header
 *
 * PHP version >= 5.3
 *
 * @category  PHP
 * @package   VenoFileManager
 * @author    Nicola Franchini <support@veno.it>
 * @copyright 2013-2015 Nicola Franchini
 * @license   Standard License http://codecanyon.net/licenses/standard
 * @link      http://filemanager.veno.it/
 */
$parent = basename($_SERVER["SCRIPT_FILENAME"]);
$islogin = ($parent === "login.php" ? true : false);

$logoAlignment = $setUp->getConfig("align_logo");
switch ($logoAlignment) {
case "left":
    $headclass = "head text-left";
    $logoclass = "pull-left";
    break;
case "center":
    $headclass = "head text-center";
    $logoclass = "";
    break;
case "right":
    $headclass = "head text-righ";
    $logoclass = "pull-right";
    break;
default:
    $headclass = "head";
    $logoclass = "pull-left";
} ?>

            <header class="<?php echo $headclass; ?>">
                    <div class="container">
            <?php
            /**
            * ************************************************
            * ******************* Top Banner *****************
            * ************************************************
            */
            if ($setUp->getConfig("show_head") == true ) { 

    if ($islogin == true) { 
        $logopath = "images/";
    } else {
        $logopath = "vfm-admin/images/";
    }
                ?>
                <div class="vfm-biglogo">
                <a href="?dir="><img alt="<?php print $setUp->getConfig('appname'); ?>" 
                    class="<?php echo $logoclass; ?>" 
                    src="<?php print $logopath.$setUp->getConfig('logo'); ?>">
                </a>
                </div>
            <?php
            } 
            /**
            * ************************************************
            * ****************** Description *****************
            * ************************************************
            */
 
            
            if (strlen($setUp->getConfig("description")) > 0 
                && $gateKeeper->isAccessAllowed() 
                && !$getcloud 
                && $islogin == false
            ) { 
                $mydesc = nl2br($setUp->getConfig("description"));
                print "<div class=\"description\"><p class=\"lead\">".$mydesc."</p></div>"; 
            }
            ?>
                </div> <!-- .vfm-wrapper -->
            </header>
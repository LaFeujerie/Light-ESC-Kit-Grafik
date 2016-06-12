<?php
/**
 * VFM - veno file manager thumb
 *
 * PHP version >= 5.3
 *
 * @category  PHP
 * @package   VenoFileManager
 * @author    Nicola Franchini <info@veno.it>
 * @copyright 2013-2015 Nicola Franchini
 * @license   Standard License http://codecanyon.net/licenses/standard
 * @link      http://filemanager.veno.it/
 */
require_once 'vfm-admin/config.php';
require_once 'vfm-admin/class.php'; 
$imageServer = new ImageServer();
$imageServer->showImage();
?>
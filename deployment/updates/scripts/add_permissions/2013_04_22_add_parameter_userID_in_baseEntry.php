<?php
/**
 * @package deployment
 * @subpackage gemini.roles_and_permissions
 *
 * Adds userId parameter permissions
 *
 * No need to re-run after server code deploy
 */

$script = realpath(dirname(__FILE__) . '/../../../../') . '/scripts/utils/permissions/addPermissionsAndItems.php';
$config = realpath(dirname(__FILE__) . '/../../../') . '/permissions/object.KalturaBaseEntry.ini';
passthru("php $script $config");
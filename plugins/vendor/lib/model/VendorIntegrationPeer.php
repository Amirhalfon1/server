<?php


/**
 * Skeleton subclass for performing query and update operations on the 'vendor_integration' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package plugins.vendor
 * @subpackage model
 */
class VendorIntegrationPeer extends BaseVendorIntegrationPeer {


	/**
	 * @param $accountID
	 * @param $vendorType
	 * @param $partnerId
	 * @return VendorIntegration
	 * @throws PropelException
	 */
	public static function retrieveSingleVendorPerPartner($accountID, $vendorType, $partnerId = null)
	{
		$c = new Criteria();
		$c->add(VendorIntegrationPeer::ACCOUNT_ID, $accountID);
		$c->add(VendorIntegrationPeer::VENDOR_TYPE, $vendorType);
		if(!is_null($partnerId))
			$c->add(VendorIntegrationPeer::PARTNER_ID , $partnerId);
		return self::doSelectOne($c);
	}

} // VendorIntegrationPeer
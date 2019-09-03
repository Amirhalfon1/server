<?php


/**
 * Skeleton subclass for performing query and update operations on the 'sso' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package Core
 * @subpackage model
 */
class SsoPeer extends BaseSsoPeer
{
	public static function setDefaultCriteriaFilter ()
	{
		if ( self::$s_criteria_filter == null )
			self::$s_criteria_filter = new criteriaFilter ();

		$c = KalturaCriteria::create(SsoPeer::OM_CLASS);
		$c->addAnd ( SsoPeer::STATUS, SsoStatus::DELETED, Criteria::NOT_EQUAL);

		self::$s_criteria_filter->setFilter($c);
	}

	/**
	 * @param $applicationType
	 * @param $partnerId
	 * @param $domain
	 * @param $status
	 * @return Sso
	 * @throws PropelException
	 */
	public static function getSso($applicationType, $partnerId, $domain, $status = null)
	{
		$c = new Criteria();
		$c->add(SsoPeer::APPLICATION_TYPE, $applicationType);
		$c->add(SsoPeer::DOMAIN, $domain);
		$c->add(SsoPeer::PARTNER_ID, $partnerId);
		if ($status)
		{
			$c->add( SsoPeer::STATUS,$status);
		}
		$result = SsoPeer::doSelectOne($c);
		return $result;
	}

} // SsoPeer

<?php
/**
 * @package plugins.avnDistribution
 * @subpackage lib
 */
class AvnDistributionProviderType implements IKalturaPluginEnum, DistributionProviderType
{
	const AVN = 'AVN';
	
	/**
	 * @return SyndicationDistributionProviderType
	 */
	public static function get()
	{
		if(!self::$instance)
			self::$instance = new AvnDistributionProviderType();
			
		return self::$instance;
	}
		
	public static function getAdditionalValues()
	{
		return array(
			'AVN' => self::AVN,
		);
	}
	
	public function getPluginName()
	{
		return AvnDistributionPlugin::getPluginName();
	}	
}

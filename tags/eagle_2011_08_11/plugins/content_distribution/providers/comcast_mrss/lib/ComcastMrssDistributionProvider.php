<?php
/**
 * @package plugins.comcastMrssDistribution
 * @subpackage lib
 */
class ComcastMrssDistributionProvider implements IDistributionProvider
{
	/**
	 * @var ComcastMrssDistributionProvider
	 */
	protected static $instance;
	
	protected function __construct()
	{
		
	}
	
	/**
	 * @return ComcastMrssDistributionProvider
	 */
	public static function get()
	{
		if(!self::$instance)
			self::$instance = new ComcastMrssDistributionProvider();
			
		return self::$instance;
	}
	
	/* (non-PHPdoc)
	 * @see IDistributionProvider::getType()
	 */
	public function getType()
	{
		return ComcastMrssDistributionPlugin::getDistributionProviderTypeCoreValue(ComcastMrssDistributionProviderType::COMCAST_MRSS);
	}
	
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Comcast MRSS';
	}
	
/* (non-PHPdoc)
	 * @see IDistributionProvider::isDeleteEnabled()
	 */
	public function isDeleteEnabled()
	{
		return true;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::isUpdateEnabled()
	 */
	public function isUpdateEnabled()
	{
		return true;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::isMediaUpdateEnabled()
	 */
	public function isMediaUpdateEnabled()
	{
		return true;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::isReportsEnabled()
	 */
	public function isReportsEnabled()
	{
		return false;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::isScheduleUpdateEnabled()
	 */
	public function isScheduleUpdateEnabled()
	{
		return true;
	}
	
	/* (non-PHPdoc)
	 * @see IDistributionProvider::isAvailabilityUpdateEnabled()
	 */
	public function isAvailabilityUpdateEnabled()
	{
		return false;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::useDeleteInsteadOfUpdate()
	 */
	public function useDeleteInsteadOfUpdate()
	{
		return false;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::getJobIntervalBeforeSunrise()
	 */
	public function getJobIntervalBeforeSunrise()
	{
		return 0;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::getJobIntervalBeforeSunset()
	 */
	public function getJobIntervalBeforeSunset()
	{
		return 0;
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::getUpdateRequiredEntryFields()
	 */
	public function getUpdateRequiredEntryFields($distributionProfileId = null)
	{
		return array();
	}

	/* (non-PHPdoc)
	 * @see IDistributionProvider::getUpdateRequiredMetadataXPaths()
	 */
	public function getUpdateRequiredMetadataXPaths($distributionProfileId = null)
	{
		return array();
	}
}
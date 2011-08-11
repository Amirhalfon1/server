<?php
/**
 * @package plugins.adCuePoint
 * @subpackage api.objects
 */
class KalturaAdCuePoint extends KalturaCuePoint
{
	/**
	 * @var KalturaAdProtocolType
	 * @filter eq,in
	 * @insertonly
	 * @requiresPermission insert
	 */
	public $protocolType;
	
	/**
	 * @var string
	 * @requiresPermission insert,update
	 */
	public $sourceUrl;
	
	/**
	 * @var KalturaAdType 
	 * @requiresPermission insert,update
	 */
	public $adType;
	
	/**
	 * @var string
	 * @filter like,mlikeor,mlikeand
	 * @requiresPermission insert,update
	 */
	public $title;
	
	/**
	 * @var int 
	 * @filter gte,lte,order
	 * @requiresPermission insert,update
	 */
	public $endTime;
	
	/**
	 * Duration in milliseconds
	 * @var int 
	 * @filter gte,lte,order
	 * @readonly
	 */
	public $duration;

	public function __construct()
	{
		$this->cuePointType = AdCuePointPlugin::getApiValue(AdCuePointType::AD);
	}
	
	private static $map_between_objects = array
	(
		"protocolType" => "subType",
		"sourceUrl",
		"adType",
		"title" => "name",
		"endTime",
		"duration",
	);
	
	/* (non-PHPdoc)
	 * @see KalturaCuePoint::getMapBetweenObjects()
	 */
	public function getMapBetweenObjects()
	{
		return array_merge(parent::getMapBetweenObjects(), self::$map_between_objects);
	}
	
	/* (non-PHPdoc)
	 * @see KalturaObject::toInsertableObject()
	 */
	public function toInsertableObject($object_to_fill = null, $props_to_skip = array())
	{
		if(is_null($object_to_fill))
			$object_to_fill = new AdCuePoint();
			
		return parent::toInsertableObject($object_to_fill, $props_to_skip);
	}
	
	/* (non-PHPdoc)
	 * @see KalturaCuePoint::validateForInsert()
	 */
	public function validateForInsert($propertiesToSkip = array())
	{
		parent::validateForInsert($propertiesToSkip);
			
		if(!is_null($this->endTime))
			$this->validateEndTime();
	}
	
	/* (non-PHPdoc)
	 * @see KalturaCuePoint::validateForUpdate()
	 */
	public function validateForUpdate($sourceObject, $propertiesToSkip = array())
	{
		if(!is_null($this->endTime))
			$this->validateEndTime($sourceObject->getId());
			
		return parent::validateForUpdate($sourceObject, $propertiesToSkip);
	}
}

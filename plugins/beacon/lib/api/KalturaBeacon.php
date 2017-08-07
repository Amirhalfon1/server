<?php

/**
 * @package plugins.beacon
 * @subpackage api.objects
 */
class KalturaBeacon extends KalturaObject implements IFilterable
{
	/**
	 * Beacon creation date as Unix timestamp (In seconds)
	 *
	 * @var time
	 * @readonly
	 * @filter gte,lte,order
	 */
	public $createdAt;
	
	/**
	 * Beacon update date as Unix timestamp (In seconds)
	 *
	 * @var time
	 * @readonly
	 * @filter gte,lte,order
	 */
	public $updatedAt;
	
	/**
	 * The object which this beacon belongs to
	 * 
	 * @var KalturaBeaconObjectTypes
	 * @filter eq
	 */
	public $relatedObjectType;
	
	/**
	 * @var string
	 * @filter eq
	 */
	public $eventType;
	
	/**
	 * @var string
	 * @filter eq
	 */
	public $objectId;
	
	/**
	 * @var string
	 */
	public $privateData;
	
	private static $map_between_objects = array
	(
		'createdAt',
		'updatedAt',
		'relatedObjectType',
		'eventType',
		'objectId',
		'privateData',
	);

	public function validateForInsert($propertiesToSkip = array())
	{
		$this->validatePropertyNotNull("eventType");
		$this->validatePropertyNotNull("objectId");
		$this->validatePropertyNotNull("relatedObjectType");
		return parent::validateForInsert($propertiesToSkip);
	}
	
	public function getMapBetweenObjects()
	{
		return array_merge(parent::getMapBetweenObjects(), self::$map_between_objects);
	}
	
	public function getExtraFilters()
	{
		return array();
	}
	
	public function getFilterDocs()
	{
		return array();
	}
	
	/* (non-PHPdoc)
	 * @see KalturaObject::toInsertableObject()
	 */
	public function toInsertableObject($object_to_fill = null, $props_to_skip = array())
	{
		if(is_null($object_to_fill))
			$object_to_fill = new kBeacon();
		
		return parent::toInsertableObject($object_to_fill, $props_to_skip);
	}
}
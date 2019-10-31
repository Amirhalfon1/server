<?php
/**
 * @package api
 * @relatedService UserEntryService
 * @subpackage filters.base
 * @abstract
 */
abstract class KalturaQuizUserEntryBaseFilter extends KalturaUserEntryFilter
{
	static private $map_between_objects = array
	(
		"versionEqual" => "_eq_version",
	);

	static private $order_by_map = array
	(
		"+version" => "+version",
		"-version" => "-version",
	);

	public function getMapBetweenObjects()
	{
		return array_merge(parent::getMapBetweenObjects(), self::$map_between_objects);
	}

	public function getOrderByMap()
	{
		return array_merge(parent::getOrderByMap(), self::$order_by_map);
	}

	/**
	 * @var int
	 */
	public $versionEqual;
}

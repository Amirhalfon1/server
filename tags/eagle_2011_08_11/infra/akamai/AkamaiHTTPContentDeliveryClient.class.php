<?php
/**
 * @package External
 * @subpackage Akamai
 */
class AkamaiHTTPContentDeliveryClient extends AkamaiClient
{
	const WSDL_URL = 'https://control.akamai.com/nmrws/services/HttpContentDeliveryReportService?wsdl';
	
	function __construct($username, $password)
	{
		parent::__construct(self::WSDL_URL, $username, $password);
	}
	
	
	public function getCPCodes()
	{
		$params = array();
		

		$result = $this->call("getCPCodes", $params);
		$this->logError();
		return $result;
	}
	
	public function getUniqueVisitorForCPCode($cpcode, $date, $columns)
	{
		$params = array();
		
		$params["cpcode"] = $this->parseParam($cpcode, 'xsd:int');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUniqueVisitorForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getUniqueVisitorForReportGroup($repgrp, $date, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUniqueVisitorForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getTopVisitorForCPCode($cpcode, $date, $columns)
	{
		$params = array();
		
		$params["cpcode"] = $this->parseParam($cpcode, 'xsd:int');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTopVisitorForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getTopVisitorForReportGroup($repgrp, $date, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTopVisitorForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getUserLocationByCountryForCPCode($cpcodes, $startDate, $endDate, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUserLocationByCountryForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getUserLocationByCountryForReportGroup($repgrp, $startDate, $endDate, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUserLocationByCountryForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getUserLocationByUSStateForCPCode($cpcodes, $startDate, $endDate, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUserLocationByUSStateForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getUserLocationByUSStateForReportGroup($repgrp, $startDate, $endDate, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUserLocationByUSStateForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getUserLocationByCAProvinceForCPCode($cpcodes, $startDate, $endDate, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUserLocationByCAProvinceForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getUserLocationByCAProvinceForReportGroup($repgrp, $startDate, $endDate, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getUserLocationByCAProvinceForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getURLForReportGroup($repgrp, $startDate, $endDate, $columns, $sortColumn, $filter)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');
		$params["sortColumn"] = $this->parseParam($sortColumn, 'xsd:string');
		$params["filter"] = $this->parseParam($filter, 'akaaimsdt:UrlReportFilter');

		$result = $this->call("getURLForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getURLForCPCode($cpcodes, $startDate, $endDate, $columns, $sortColumn, $filter)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');
		$params["sortColumn"] = $this->parseParam($sortColumn, 'xsd:string');
		$params["filter"] = $this->parseParam($filter, 'akaaimsdt:UrlReportFilter');

		$result = $this->call("getURLForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getURLDailyAggregationForCPCode($cpcodes, $startDate, $endDate, $aggregateColumn, $filter)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["aggregateColumn"] = $this->parseParam($aggregateColumn, 'xsd:string');
		$params["filter"] = $this->parseParam($filter, 'akaaimsdt:UrlReportFilter');

		$result = $this->call("getURLDailyAggregationForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getURLDailyAggregationForReportGroup($repgrp, $startDate, $endDate, $aggregateColumn, $filter)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["aggregateColumn"] = $this->parseParam($aggregateColumn, 'xsd:string');
		$params["filter"] = $this->parseParam($filter, 'akaaimsdt:UrlReportFilter');

		$result = $this->call("getURLDailyAggregationForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryForCPCode($cpcodes, $start, $end, $timeZone, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryForCPCodeV2($cpcodes, $start, $end, $timeZone, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryForCPCodeV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryForCPCodeV3($cpcodes, $start, $end, $timeZone, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryForCPCodeV3", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryGranularityForCPCode($cpcodes, $start, $end, $gran, $timeZone, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["gran"] = $this->parseParam($gran, 'xsd:string');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryGranularityForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryGranularityForCPCodeV2($cpcodes, $start, $end, $gran, $timeZone, $columns)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["gran"] = $this->parseParam($gran, 'xsd:string');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryGranularityForCPCodeV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryForReportGroup($repgrp, $start, $end, $timeZone, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryForReportGroupV2($repgrp, $start, $end, $timeZone, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryForReportGroupV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryForReportGroupV3($repgrp, $start, $end, $timeZone, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryForReportGroupV3", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryGranularityForReportGroup($repgrp, $start, $end, $gran, $timeZone, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["gran"] = $this->parseParam($gran, 'xsd:string');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryGranularityForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getTrafficSummaryGranularityForReportGroupV2($repgrp, $start, $end, $gran, $timeZone, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["start"] = $this->parseParam($start, 'xsd:dateTime');
		$params["end"] = $this->parseParam($end, 'xsd:dateTime');
		$params["gran"] = $this->parseParam($gran, 'xsd:string');
		$params["timeZone"] = $this->parseParam($timeZone, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getTrafficSummaryGranularityForReportGroupV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByOSForCPCode($cpcode, $date, $columns)
	{
		$params = array();
		
		$params["cpcode"] = $this->parseParam($cpcode, 'xsd:int');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByOSForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByOSForReportGroup($repgrp, $date, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByOSForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorBySoftwareForCPCode($cpcode, $date, $columns)
	{
		$params = array();
		
		$params["cpcode"] = $this->parseParam($cpcode, 'xsd:int');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorBySoftwareForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorBySoftwareForReportGroup($repgrp, $date, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorBySoftwareForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByCountryForCPCodeV2($cpcode, $date, $columns)
	{
		$params = array();
		
		$params["cpcode"] = $this->parseParam($cpcode, 'xsd:int');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByCountryForCPCodeV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByCountryForReportGroupV2($repgrp, $date, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByCountryForReportGroupV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByUSStateForCPCodeV2($cpcode, $date, $columns)
	{
		$params = array();
		
		$params["cpcode"] = $this->parseParam($cpcode, 'xsd:int');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByUSStateForCPCodeV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByUSStateForReportGroupV2($repgrp, $date, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByUSStateForReportGroupV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByCAProvinceForCPCodeV2($cpcode, $date, $columns)
	{
		$params = array();
		
		$params["cpcode"] = $this->parseParam($cpcode, 'xsd:int');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByCAProvinceForCPCodeV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getVisitorByCAProvinceForReportGroupV2($repgrp, $date, $columns)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["date"] = $this->parseParam($date, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');

		$result = $this->call("getVisitorByCAProvinceForReportGroupV2", $params);
		$this->logError();
		return $result;
	}
	
	public function getNumURLForCPCode($cpcodes, $startDate, $endDate, $columns, $sortColumn, $filter, $numRows)
	{
		$params = array();
		
		$params["cpcodes"] = $this->parseParam($cpcodes, 'akasiteDeldt:ArrayOfInt');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');
		$params["sortColumn"] = $this->parseParam($sortColumn, 'xsd:string');
		$params["filter"] = $this->parseParam($filter, 'akaaimsdt:UrlReportFilter');
		$params["numRows"] = $this->parseParam($numRows, 'xsd:int');

		$result = $this->call("getNumURLForCPCode", $params);
		$this->logError();
		return $result;
	}
	
	public function getNumURLForReportGroup($repgrp, $startDate, $endDate, $columns, $sortColumn, $filter, $numRows)
	{
		$params = array();
		
		$params["repgrp"] = $this->parseParam($repgrp, 'xsd:string');
		$params["startDate"] = $this->parseParam($startDate, 'xsd:string');
		$params["endDate"] = $this->parseParam($endDate, 'xsd:string');
		$params["columns"] = $this->parseParam($columns, 'akasiteDeldt:ArrayOfString');
		$params["sortColumn"] = $this->parseParam($sortColumn, 'xsd:string');
		$params["filter"] = $this->parseParam($filter, 'akaaimsdt:UrlReportFilter');
		$params["numRows"] = $this->parseParam($numRows, 'xsd:int');

		$result = $this->call("getNumURLForReportGroup", $params);
		$this->logError();
		return $result;
	}
	
}		
	

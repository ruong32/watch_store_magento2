<?php
namespace Phuctd99\ThoiTiet\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

	
	function getCurrentData($region, $coutry_name, $access_key) {
		$location = $region . "," . $coutry_name . "&units=metric";
		$array_json = "http://api.openweathermap.org/data/2.5/weather?q=" . $location . $access_key;
		$json = file_get_contents($array_json);
		$obj = json_decode($json);
		return $obj;
	}
	
	function getForcast($city_id, $access_key) {
		$array_json = "http://api.openweathermap.org/data/2.5/forecast?id=" . $city_id . "&units=metric" . $access_key;
		$json = file_get_contents($array_json);
		$obj = json_decode($json);
		return $obj;
	}
        
}
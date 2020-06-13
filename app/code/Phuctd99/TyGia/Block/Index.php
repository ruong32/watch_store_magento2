<?php
namespace Phuctd99\TyGia\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

    public function getTyGia(){
 		$array_xml = "https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx";
		$arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );
        $xml = file_get_contents($array_xml, false, stream_context_create($arrContextOptions));
        $obj = simplexml_load_string($xml);
        return $obj;
    }
}
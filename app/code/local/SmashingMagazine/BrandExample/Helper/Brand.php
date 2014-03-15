<?php
class SmashingMagazine_BrandExample_Helper_Brand extends Mage_Core_Helper_Abstract
{
    public function getBrandUrl(SmashingMagazine_BrandDirectory_Model_Brand $brand)
    {
        if (!$brand instanceof SmashingMagazine_BrandDirectory_Model_Brand) {
            return '#';
        }
        
        return $this->_getUrl(
            'smashingmagazine_brandexample/index/view', 
            array(
                'url' => $brand->getUrlKey(),
            )
        );
    }
}
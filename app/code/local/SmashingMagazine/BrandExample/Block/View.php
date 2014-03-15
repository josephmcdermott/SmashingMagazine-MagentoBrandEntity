<?php
class SmashingMagazine_BrandExample_Block_View extends Mage_Core_Block_Template
{
    public function getCurrentBrand()
    {
        return Mage::registry('current_brand');
    }
    
    public function getProductCollection()
    {
        $brand = $this->getCurrentBrand();
        if (!$brand) {
            return array();
        }
        
        return Mage::getModel('catalog/product')->getCollection()
            ->addAttributeToSelect('name')
            ->addAttributeToFilter('brand_id', $brand->getId())
            ->setOrder('name', 'ASC');
    }
}
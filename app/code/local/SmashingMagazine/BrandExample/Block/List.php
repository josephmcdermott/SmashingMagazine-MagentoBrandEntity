<?php
class SmashingMagazine_BrandExample_Block_List extends Mage_Core_Block_Template
{
    public function getBrandCollection()
    {
        return Mage::getModel('smashingmagazine_branddirectory/brand')->getCollection()
            ->addFieldToFilter('visibility', SmashingMagazine_BrandDirectory_Model_Brand::VISIBILITY_DIRECTORY)
            ->setOrder('name', 'ASC');
    }
}
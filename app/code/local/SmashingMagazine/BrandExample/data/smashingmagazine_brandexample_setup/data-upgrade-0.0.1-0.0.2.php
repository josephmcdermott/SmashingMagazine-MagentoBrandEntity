<?php
// fetch all brands for associating to products
$brandIds = Mage::getModel('smashingmagazine_branddirectory/brand')->getCollection()
    ->getAllIds();

// fetch the default product attribute set id
$eavEntityType = Mage::getModel('eav/entity_type')->load('catalog_product', 'entity_type_code');
$productApi = Mage::getModel('catalog/product_api');
$attributeSet = Mage::getModel('eav/entity_attribute_set')->getCollection()
    ->addFieldToFilter('attribute_set_name', 'Default')
    ->addFieldToFilter('entity_type_id', $eavEntityType->getId())
    ->getFirstItem();

// fetch all website ids
$websiteIds = array_keys(Mage::app()->getWebsites());

// create 5 dummy products with random brands associated
for ($i = 1; $i <= 5; $i++) {
    $productApi->create(
        Mage_Catalog_Model_Product_Type::TYPE_SIMPLE,
        $attributeSet->getId(),
        "brand-product-{$i}",
        array(
            'name' => "Brand Product {$i}",
            'url_key' => "brand-product-{$i}",
            'description' => "Brand Product {$i}",
            'short_description' => "Brand Product {$i}",
            'weight' => '1',
            'status' => '1',
            'visibility' => '4',
            'price' => '100',
            'stock_data' => array(
                'qty' => '99999',
                'is_in_stock' => '1',
            ),
            'website_ids' => $websiteIds,
            'brand_id' => array_rand($brandIds),
        )
    );
}
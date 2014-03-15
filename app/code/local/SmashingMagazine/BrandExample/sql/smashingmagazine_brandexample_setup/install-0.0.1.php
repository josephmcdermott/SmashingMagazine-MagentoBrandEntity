<?php
// add a new product attribute to associate a brand to each product
$this->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'brand_id', array(
    'group'         => 'General',
    'label'         => 'Brand',
    'input'         => 'select',
    'source'        => 'smashingmagazine_brandexample/source_brand',
));
<?php
$brand = Mage::getModel('smashingmagazine_branddirectory/brand');

// create 5 visible brands
for ($i = 1; $i <= 5; $i++) {
    $brand->setData(array(
            'name'        => "Brand Name {$i}",
            'url_key'     => "brand-url-{$i}",
            'description' => "<p>Brand Description {$i}</p>",
            'visibility'  => SmashingMagazine_BrandDirectory_Model_Brand::VISIBILITY_DIRECTORY,
        ))
        ->save();
}

// create 5 invisible brands
for ($i = 6; $i <= 10; $i++) {
    $brand->setData(array(
            'name'        => "Brand Name {$i}",
            'url_key'     => "brand-url-{$i}",
            'description' => "<p>Brand Description {$i}</p>",
            'visibility'  => SmashingMagazine_BrandDirectory_Model_Brand::VISIBILITY_HIDDEN,
        ))
        ->save();
}
<?php
class SmashingMagazine_BrandDirectory_Block_Adminhtml_Brand
    extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct()
    {
        parent::_construct();
        
        /**
         * The $_blockGroup property tells Magento which alias to use to
         * locate the blocks to be displayed within this grid container.
         * In our example this corresponds to BrandDirectory/Block/Adminhtml.
         */
        $this->_blockGroup = 'smashingmagazine_branddirectory_adminhtml';
        
        /**
         * $_controller is a bit of a confusing name for this property. This 
         * value in fact refers to the folder containing our Grid.php and 
         * Edit.php. In our example, BrandDirectory/Block/Adminhtml/Brand, 
         * so we use 'brand'.
         */
        $this->_controller = 'brand';
        
        /**
         * The title of the page in the admin panel.
         */
        $this->_headerText = Mage::helper('smashingmagazine_branddirectory')
            ->__('Brand Directory');
    }
    
    public function getCreateUrl()
    {
        /**
         * When the Add button is clicked, this is where the user should
         * be redirected to. In our example, the method editAction of 
         * BrandController.php in BrandDirectory module.
         */
        return $this->getUrl(
            'smashingmagazine_branddirectory_admin/brand/edit'
        );
    }
}
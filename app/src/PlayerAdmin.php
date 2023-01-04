<?php

use SilverStripe\Forms\GridField\GridFieldFilterHeader;
use SilverStripe\Forms\GridField\GridFieldConfig;
use SilverStripe\Admin\ModelAdmin;

class MyAdmin extends ModelAdmin 
{

    private static $managed_models = ['Player'];

    private static $url_segment = 'playeradmin';

    private static $menu_title = 'Player Management';
    private static $menu_icon_class = 'font-icon-block-content';
    
    public function getEditForm($id = null, $fields = null){
        $form = parent::getEditForm($id, $fields);

        // $gridFieldName is generated from the ModelClass, eg if the Class 'Product'
        // is managed by this ModelAdmin, the GridField for it will also be named 'Product'
        $gridFieldName = $this->sanitiseClassName($this->modelClass);
        $gridField = $form->Fields()->fieldByName($gridFieldName);

        // modify the list view.
        $gridField->getConfig()->addComponent(GridFieldFilterHeader::create());

        return $form;
    }
}
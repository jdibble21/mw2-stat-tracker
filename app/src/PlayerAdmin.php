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
    private static $menu_priority = 3;
    
    public function getEditForm($id = null, $fields = null){
        $form = parent::getEditForm($id, $fields);
        $class = $this->modelClass;

        $listField = $form->Fields()->fieldByName($class);

        
        return $form;
    }
}
<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\FieldType\DBInt;
use SilverStripe\ORM\FieldType\DBVarchar;
use SilverStripe\Security\Permission;
use SilverStripe\Security\Security;

class WeeklyPlayerStats extends DataObject {
    private static $db = [
        'PlayerId' => DBInt::class,
        'WeekDate' => DB::class,
        
    ];
}
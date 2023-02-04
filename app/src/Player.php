<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\FieldType\DBInt;
use SilverStripe\ORM\FieldType\DBVarchar;
use SilverStripe\Security\Permission;
use SilverStripe\Security\Security;

class Player extends DataObject {
    private static $db = [
        'Email' => DBVarchar::class,
        'Gamertag' => DBVarchar::class,
        'Platform' => 'Enum(array("Xbox", "PC", "Playstation"))',
        'FirstName' => DBVarchar::class,
        'LastName' => DBVarchar::class,
    ];
}
<?php namespace Talgat\Shop\Models;

use Model;

/**
 * Model
 */
class Categories extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'talgat_shop_categories';
     public $belongsToMany = ['items'=>[
        'talgat\shop\models\Shops', 
        'table' => 'talgat_shop_shop_categories', 
        'order' => 'name'
        ]
        
        ];
}
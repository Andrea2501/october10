<?php namespace Ndrbrn\Product\Models;

use Model;

/**
 * Model
 */
class Variation extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ndrbrn_product_variations';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

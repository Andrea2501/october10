<?php namespace Ndrbrn\Order\Models;

use Model;

/**
 * Model
 */
class Row extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ndrbrn_order_row';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

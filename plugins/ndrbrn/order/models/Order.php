<?php namespace Ndrbrn\Order\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ndrbrn_order_order';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

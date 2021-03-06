<?php namespace DominicMercier\Nikeid\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var array Relations
     */
    public $hasMany = [
        'layers' => ['DominicMercier\Nikeid\Models\Layer'],
        'views' => ['DominicMercier\Nikeid\Models\View']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominicmercier_nikeid_products';
}
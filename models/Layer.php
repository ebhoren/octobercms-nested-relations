<?php namespace DominicMercier\Nikeid\Models;

use Model;

/**
 * Model
 */
class Layer extends Model
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
    public $belongsToMany = [
        'colors' => [
            'DominicMercier\Nikeid\Models\Color',
            'table' => 'dominicmercier_nikeid_layers_colors'
        ]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominicmercier_nikeid_layers';
}
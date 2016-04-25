<?php namespace DominicMercier\Nikeid\Models;

use Model;

/**
 * Model
 */
class View extends Model
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
        'viewLayers' => ['DominicMercier\Nikeid\Models\ViewLayer'],
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominicmercier_nikeid_views';
}
<?php namespace DominicMercier\Nikeid\Models;

use Model;

/**
 * Model
 */
class Color extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dominicmercier_nikeid_colors';
}
<?php namespace Watchlearn\Movies\Models;

use Model;

/**
 * Model
 */
class Detail extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_movies_details';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // Relations

    // public $attachOne=[
    //     'image'=>'System\Modles\File'
    // ];
}

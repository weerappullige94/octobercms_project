<?php namespace Ceyleon\BookClub\Models;

use Model;

/**
 * Model
 */
class Publisher extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ceyleon_bookclub_publishers';
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

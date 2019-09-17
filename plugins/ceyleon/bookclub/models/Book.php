<?php namespace Ceyleon\BookClub\Models;

use Model;

/**
 * Model
 */
class Book extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ceyleon_bookclub_books';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'publisher' => [Publisher::class],
        'category' => [Category::class]
    ];
}

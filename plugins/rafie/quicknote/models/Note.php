<?php namespace RAFIE\Quicknote\Models;

use Model;


/**
 * Note Model
 */
class Note extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'rafie_quicknote_notes';

    protected $guarded = ['*'];

    protected $rules = [
        'title'         => 'required|min:4'
    ];

    public $belongsTo = [ 'user' => [ 'Backend\Models\User' ] ];

//    public $table = 'rafie_quicknote_notes';
//
//
//    protected $guarded = ['*'];
//
//
//    protected $fillable = [];
//
//
//    public $hasOne = [];
//    public $hasMany = [];
//    public $belongsTo = [];
//    public $belongsToMany = [];
//    public $morphTo = [];
//    public $morphOne = [];
//    public $morphMany = [];
//    public $attachOne = [];
//    public $attachMany = [];
}

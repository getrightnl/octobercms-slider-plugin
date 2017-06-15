<?php namespace GetRight\Slider\Models;

use Model;

/**
 * Slide Model
 */
class Slide extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'getright_slider_slides';

    /**
     * @var array $rules
     */
    public $rules = [
        'name' => 'required|string|size:75',
        'upper_title' => 'string|size:75',
        'middle_title' => 'string|size:75',
        'lower_title' => 'string|size:75',
        'link_one' => 'string',
        'link_two' => 'string',
        'link_one_text' => 'string|size:55',
        'link_two_text' => 'string|size:55'
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'upper_title',
        'middle_title',
        'lower_title',
        'link_one',
        'link_two',
        'link_one_text',
        'link_two_text'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    public $attachMany = [];
}

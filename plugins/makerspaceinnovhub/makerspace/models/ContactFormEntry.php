<?php namespace Makerspaceinnovhub\Makerspace\Models;

use Model;

/**
 * ContactFormEntry Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class ContactFormEntry extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */


    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'subject',
        'message'
    ];
    public $table = 'makerspaceinnovhub_form_entries';

    /**
     * @var array rules for validation
     */
    public $rules = [];
 
    
}

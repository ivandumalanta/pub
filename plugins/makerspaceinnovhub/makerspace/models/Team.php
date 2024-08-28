<?php namespace MakerspaceInnovhub\Makerspace\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'makerspaceinnovhub_makerspace_team_members';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}

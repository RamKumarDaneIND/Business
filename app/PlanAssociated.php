<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanAssociated extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plan_associateds';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'plan_associateds_id';

    /**
     * Indicates if the BusinesPlan model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plan_id', 'business_id', 
    ];
}

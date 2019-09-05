<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
*   The BusinesPlan model Will handle All plans for Business listing.
*/
class BusinesPlan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'busines_plans';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'busines_plans_id';

    /**
     * Indicates if the BusinesPlan model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}

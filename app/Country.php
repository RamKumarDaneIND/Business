<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'countries_id';

    /**
     * Indicates if the BusinesPlan model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}

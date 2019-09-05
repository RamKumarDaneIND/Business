<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

/**
*   The Business model Will handle a Business listing Entry.
*/
class Business extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'businesses';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'business_id';

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
        'business_name', 'user_id', 'business_category', 'about_business', 'banner_image', 'payment_modes',
    ];
}

<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 *
 * @package App
 * @property string $team
 * @property string $name
 * @property string $surname
 * @property string $expire_date
*/
class Client extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'surname', 'expire_date', 'mtype_id','phone','address','mailing_address'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    
    /* public function setTeamIdAttribute($input)
    {
        $this->attributes['team_id'] = $input ? $input : null;
    }*/
    public function setMtypeIdAttribute($input)
    {
        $this->attributes['mtype_id'] = $input ? $input : null;
    }

    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setExpireDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['expire_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['expire_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getExpireDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    

    public function mtype()
    {
        return $this->belongsTo(Mtype::class, 'mtype_id')->withTrashed();
    }

    public function checkExpireDate($input)
    {
        if(strtotime($input) < strtotime('+30 days')) {
            return true;
        }else
            return false;
        
    }
    
}


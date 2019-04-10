<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Member Type as Mtype
 *
 * @package App
 * @property string $name
*/
class Mtype extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    

}

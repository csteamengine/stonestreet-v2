<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Job extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'imageid', 'description', 'company', 'titledescription', 'companydescription', 'short', 'iscurrent', 'isactive', 'fromdate', 'todate', 'companyphone', 'companyaddress'
    ];

    public function images(){
        return $this->belongsToMany('App\Image', 'jobimages', 'jobid', 'imageid');
    }

    public function image(){
        return $this->hasOne('App\Image', 'id', 'imageid');
    }
}

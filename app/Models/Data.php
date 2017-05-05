<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //
    protected $table = 'data';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'id',
        'title',
        'date',
        'desc',
        'imgLink',
        'resourceLink',
        'behaviorLink',
        'mapLink',
    ];
}

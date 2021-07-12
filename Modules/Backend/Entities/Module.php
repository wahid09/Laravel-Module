<?php

namespace Modules\Backend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory, SoftDeletes;

    //protected $fillable = [];
    protected $guarded = ['id'];
    
    protected static function newFactory()
    {
        return \Modules\Backend\Database\factories\ModuleFactory::new();
    }
}

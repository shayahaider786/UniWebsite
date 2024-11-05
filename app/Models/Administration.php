<?php

namespace App\Models;
use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'image',
    ];   
    
    

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($administration) {
            $administration->slug = Str::slug($administration->name);
        });
        
        static::updating(function ($administration) {
            $administration->slug = Str::slug($administration->name);
        });
    }
}

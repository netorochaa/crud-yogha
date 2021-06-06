<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name'];

    public const VALIDATION_RULES = [
        'name' => 'required|max:255'  
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}

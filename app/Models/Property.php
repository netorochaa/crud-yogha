<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'city', 'occupant', 'bedroom', 'restroom', 'internet', 'pool', 'type_id'];

    public const VALIDATION_RULES = [
        'name'      => 'required|max:50',
        'city'      => 'required|max:50',
        'type_id'   => 'required',
        'occupant'  => 'required|numeric|min:1|max:99',
        'bedroom'   => 'required|numeric|min:1|max:99',
        'restroom'  => 'required|numeric|min:1|max:99'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

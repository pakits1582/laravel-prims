<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'head_id'];

    public function uppercaseAttribute(string $attributeName): Attribute
    {
        return new Attribute(
            get: fn ($value, $attributes) => strtoupper($attributes[$attributeName]),
            set: fn ($value) => strtoupper($value)
        );
    }

    public function code(): Attribute
    {
        return $this->uppercaseAttribute('code');
    }

    public function name(): Attribute
    {
        return $this->uppercaseAttribute('name');
    }
}

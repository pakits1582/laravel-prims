<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'head_id'];

    protected function code(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value ? strtoupper($value) : $value,
            set: fn ($value) => strtoupper($value)
        );
    }

    protected function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value ? strtoupper($value) : $value,
            set: fn ($value) => strtoupper($value)
        );
    }

    public function headinfo()
    {
        return $this->hasOne(Employee::class, 'id', 'head_id');
    }

    public function headname(): Attribute
    {
        return new Attribute(
            get: fn ($value, $attributes) => (is_null($this->headinfo)) ? '' : strtoupper($this->headinfo->last_name.', '.$this->headinfo->first_name.' '.$this->headinfo->name_suffix.' '.$this->headinfo->middle_name),
        );
    }
}

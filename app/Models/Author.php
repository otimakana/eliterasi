<?php

namespace App\Models;

use App\Models\Literasi;
use App\Models\KaryaLiterasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'tugas',
        'avatar',
        'slug',
    ];

        public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

        public function literasi(): HasMany
    {
        return $this -> hasMany(Literasi::class);
    }

        public function karyaliterasi(): HasMany
    {
        return $this -> hasMany(KaryaLiterasi::class);
    }
}

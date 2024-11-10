<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KaryaLiterasi extends Model
{
    use HasFactory, SoftDeletes;

        use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'nama_siswa',
        'kelas',
        'slug',
        'thumbnail',
        'content',
        'category_id',
        'author_id',
        'tanggal',
    ];

        public function getTanggalAttribute($value){
        $this->attributes['tanggal'] = $value;
        return Carbon::parse($value)->format('d F Y');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function category(): BelongsTo
    {
        return $this -> belongsTo(Category::class, 'category_id');
    }

        public function author(): BelongsTo
    {
        return $this -> belongsTo(Author::class, 'author_id');
    }
}
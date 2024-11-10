<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Literasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'judul',
        'thumbnail',
        'content',
        'tautan_siswa',
        'tautan_guru',
        'category_id',
        'author_id',
        'start_datetime',
        'end_datetime',
        'is_active',
        'slug',
    ];

    protected $casts = [
        'start_datetime' => 'datetime:Y-m-d H:i:s',
        'end_datetime' => 'datetime:Y-m-d H:i:s',
    ];

    // public function startNow()
    // {
    //     $start_datetime = Carbon::parse($this->start_datetime);
    //     $end_datetime = Carbon::parse($this->end_datetime);
    //     $thisTime = Carbon::parse(now());

    //     return $thisTime->between($start_datetime, $end_datetime);
    // }

    public function getIsActiveAttribute()
    {
        $start_timestamp = strtotime($this->start_date);
        $end_timestamp = strtotime($this->end_date);
        $today_timestamp = strtotime(date('d-m-Y'));

        return $today_timestamp >= $start_timestamp && $today_timestamp <= $end_timestamp;
    }

    public function setJudulAttribute($value) {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function getTanggalAttribute($value){
        $this->attributes['start_datetime'] = $value;
        return Carbon::parse($value)->format('d F Y');
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
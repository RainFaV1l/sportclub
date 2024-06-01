<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use MoonShine\Tests\Fixtures\Models\Category;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'phone',
        'city',
        'address',
        'photo',
        'section_category_id',
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SectionCategory::class, 'section_category_id');
    }

    public function image()
    {
        return asset(Storage::url($this->photo));
    }
}

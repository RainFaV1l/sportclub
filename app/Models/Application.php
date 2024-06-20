<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'full_name',
        'email',
        'birthday',
        'schedule',
        'section_id',
        'schedule_id',
        'user_id',
        'status',
        'is_child',
    ];

    public function section(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function schedule(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }
}

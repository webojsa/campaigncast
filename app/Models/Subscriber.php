<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'push_token',
        'name',
        'country',
        'status'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function country():BelongsTo{
        return $this->belongsTo(Country::class);
    }
}

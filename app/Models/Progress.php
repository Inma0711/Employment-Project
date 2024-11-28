<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentary',
        'offer_id',
    ];

    public function offer(): BelongsTo {
        return $this->belongsTo(Offer::class, 'offer_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'company',
        'offerStatus',
    ];

    public function progresses(): HasMany {
        return $this->hasMany(Progress::class, 'offer_id');
    }
}

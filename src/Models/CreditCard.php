<?php

namespace Iyzico\IyzipayLaravel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CreditCard extends Model
{

    protected $fillable = [
        'alias', 'number', 'token', 'bank'
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(config('iyzipay.billableModel'), 'billable_id');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}

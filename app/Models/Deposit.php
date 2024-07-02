<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'deposit_date',
        'amount',
        'note',
        'account_id',
        'deposit_category_id',
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function depositCategory(): BelongsTo
    {
        return $this->belongsTo(DepositCategory::class);
    }
}

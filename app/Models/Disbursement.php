<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'user_id',
        'amount',
        'description',
        'proof',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
        ];
    }

    // =========================================================================
    // RELASI ELOQUENT
    // =========================================================================

    /**
     * Pencairan milik sebuah campaign.
     */
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * Pencairan dilakukan oleh seorang user (Campaigner).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

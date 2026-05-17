<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'goal_amount',
        'image',
        'status',
        'deadline',
    ];

    protected function casts(): array
    {
        return [
            'goal_amount' => 'decimal:2',
            'deadline' => 'date',
        ];
    }

    // =========================================================================
    // RELASI ELOQUENT
    // =========================================================================

    /**
     * Campaign dimiliki oleh seorang User (Campaigner).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Campaign memiliki banyak donasi (uang masuk).
     */
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    /**
     * Campaign memiliki banyak pencairan (uang keluar).
     */
    public function disbursements()
    {
        return $this->hasMany(Disbursement::class);
    }
}

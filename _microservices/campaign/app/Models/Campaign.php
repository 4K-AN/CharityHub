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

    // NOTE: Relasi user(), donations(), disbursements() DIHAPUS
    // karena tabel tersebut ada di service lain
}

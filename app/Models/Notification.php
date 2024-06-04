<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'type',
        'message',
        'notified_at',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}

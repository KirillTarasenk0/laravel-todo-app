<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Observers\TodoObserver;

#[ObservedBy(TodoObserver::class)]
class Task extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'due_date',
        'priority',
        'status',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
}

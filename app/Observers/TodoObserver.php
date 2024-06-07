<?php

namespace App\Observers;

use App\Models\Task;
use Illuminate\Contracts\Events\ShouldHandleEventsAfterCommit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TodoCreatedMail;

class TodoObserver implements ShouldHandleEventsAfterCommit
{
    public function created(Task $task): void
    {
        Mail::to(Auth::user()->email)->queue(new TodoCreatedMail());
    }
    public function updated(Task $task): void
    {

    }
    public function deleted(Task $task): void
    {

    }

    public function restored(Task $task): void
    {

    }
    public function forceDeleted(Task $task): void
    {

    }
}

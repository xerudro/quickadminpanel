<?php

namespace App\Observers;

use App\Models\TimeEntry;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class TimeEntryActionObserver
{
    public function created(TimeEntry $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'TimeEntry'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(TimeEntry $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'TimeEntry'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(TimeEntry $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'TimeEntry'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}

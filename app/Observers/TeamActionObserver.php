<?php

namespace App\Observers;

use App\Models\Team;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class TeamActionObserver
{
    public function created(Team $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Team'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(Team $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'Team'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(Team $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'Team'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}

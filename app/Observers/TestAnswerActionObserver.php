<?php

namespace App\Observers;

use App\Models\TestAnswer;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class TestAnswerActionObserver
{
    public function created(TestAnswer $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'TestAnswer'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(TestAnswer $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'TestAnswer'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(TestAnswer $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'TestAnswer'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}

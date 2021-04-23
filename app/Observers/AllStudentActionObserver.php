<?php

namespace App\Observers;

use App\Models\AllStudent;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class AllStudentActionObserver
{
    public function created(AllStudent $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'AllStudent'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(AllStudent $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'AllStudent'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(AllStudent $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'AllStudent'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}

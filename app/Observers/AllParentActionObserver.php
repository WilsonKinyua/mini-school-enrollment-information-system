<?php

namespace App\Observers;

use App\Models\AllParent;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class AllParentActionObserver
{
    public function created(AllParent $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'AllParent'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(AllParent $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'AllParent'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(AllParent $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'AllParent'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}

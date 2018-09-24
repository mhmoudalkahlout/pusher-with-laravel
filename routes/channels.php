<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// //all users can listen to broadcast
// Broadcast::channel('tasks', function () {
//     return true;
// });

//broadcast to one user
Broadcast::channel('tasks.{userId}', function ($user, $userId) {
    return $user->id == $userId;
});
<?php

/*
 * This file is part of https://github.com/packagebox/packagebox
 *
 *  (c) Scott Wilcox <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 */

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

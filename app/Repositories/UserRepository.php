<?php
declare(strict_types=1);

namespace App\Repositories;

use App\User;

class UserRepository extends Repository {

public static function model()
{
    return User::class;
}

}
<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserRepository;

class UserService {

    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    public function all()
    {
       return  $this->repository::all();
    }
}


<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\UserRepository;
use App\Scopes\AgeUser;

class UserService {

    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    public function all()
    {
       return  $this->repository::withoutGlobalScopes([AgeUser::class])->get();
    }


    public function moreThanTwenty()
    {
       return  $this->repository::all();
    }

    public function equalTwelve()
    {
       return  $this->repository::ages()->withoutGlobalScopes([AgeUser::class])->get();
    }
}


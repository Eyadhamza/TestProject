<?php

namespace App\Models;

use App\QueryBuilders\UserBuilder;
use DataAccess\Models\BaseUser;
use Illuminate\Database\Query\Builder;

class User extends BaseUser
{
    // methods that are specific to the User Model in the project
    public static function someMethod()
    {
        // some code
    }
    public function scopeInActive(Builder $query): Builder
    {
        return $query->where('active', false);
    }
}

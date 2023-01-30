<?php

use Illuminate\Database\Eloquent\Builder;

class BaseUserBuilder extends Builder
{
    public function active(): Builder
    {
        return $this->where('active', true);
    }

}

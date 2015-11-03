<?php

namespace App\Repositories;


use App\Membership;

class MemberRepository
{
    /**
     * Get all of the tasks.
     *
     * @return Collection
     */
    public function all()
    {
        return Membership::all();
    }
}

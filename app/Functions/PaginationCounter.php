<?php

namespace App\Functions;

use Illuminate\Pagination\LengthAwarePaginator;

class PaginationCounter
{
    public static function item(LengthAwarePaginator $items , int $key)
    {
        return  $items->perPage() * ( (int)( request('page') ?? 1) - 1)  + $key + 1;
    }

}

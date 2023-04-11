<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Traits\PaginationResource;
class UserCollection extends ResourceCollection
{
    use PaginationResource;
}

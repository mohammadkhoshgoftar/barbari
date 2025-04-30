<?php

namespace Modules\Permission\app\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RoleCollection extends ResourceCollection
{

    public function toArray($request): array
    {
        return [
            $this->collection->map(function ($item) {
                return new RoleResource($item);
            })
        ];
    }
}

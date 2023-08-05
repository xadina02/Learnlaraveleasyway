<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */

    public $collects = StudentNewResource::class;
    public static $wrap = 'student';

    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }

}

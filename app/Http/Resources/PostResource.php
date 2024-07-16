<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Post */
class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'image'        => $this->image ? asset("storage/{$this->image}") : null,
            'description'  => $this->description,
            'is_published' => $this->is_published,
            'created_at'   => $this->created_at,
        ];
    }
}

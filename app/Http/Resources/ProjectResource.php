<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'content' => $this->content,
            'client' => $this->client,
            'date' => $this->date?->format('Y-m-d'),
            'link' => $this->link,
            'github_link' => $this->github_link,
            'technology' => $this->technology,
            'is_featured' => $this->is_featured,
            'category_role_id' => $this->category_role_id,
            'category_role' => $this->whenLoaded('category_role'),
            'image' => isset($this->image?->url) ? asset('uploads/'.$this->image->url) : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

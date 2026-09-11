<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfilResource extends JsonResource
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
            'full_name' => $this->full_name,
            'nickname' => $this->nickname,
            'role' => $this->role,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'bio' => $this->bio,
            'about' => $this->about,
            'github' => $this->github,
            'linkedin' => $this->linkedin,
            'instagram' => $this->instagram,
            'cv_file' => $this->cv_file ? asset('uploads/'.$this->cv_file) : null,
            'image' => isset($this->image?->url) ? asset('uploads/'.$this->image->url) : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

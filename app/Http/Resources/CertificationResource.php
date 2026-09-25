<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CertificationResource extends JsonResource
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
            'issuer' => $this->issuer,
            'issue_date' => $this->issue_date,
            'credential_id' => $this->credential_id,
            'description' => $this->description,
            'verification_url' => $this->verification_url,
            'skills_covered' => $this->skills_covered,

            'issuer_logo' => $this->issuerLogo ? [
                'url' => asset('uploads/'.$this->issuerLogo->url),
                'type' => $this->issuerLogo->type,
            ] : null,

            'pdf_file' => $this->pdfFile ? [
                'url' => asset('uploads/'.$this->pdfFile->url),
                'type' => $this->pdfFile->type,
            ] : null,

            // "issuer_logo" => $this->issuerLogo->map( function($m) {
            //     return [
            //         'id' => $m->id,
            //         'url' => asset('uploads/' . $m->url),
            //         'type' => $m->type,
            //     ];
            // }),
            // "pdf_file" => $this->pdfFile->map( function($m) {
            //     return [
            //         'id' => $m->id,
            //         'url' => asset('uploads/' . $m->url),
            //         'type' => $m->type,
            //     ];
            // }),

            // "id": 1,
            // "title": "AWS",
            // "slug": "aws",
            // "issuer": "Dicoding",
            // "issue_date": "2026-09-03T00:00:00.000000Z",
            // "credential_id": "9eie",
            // "description": "noiOIBVUBOIViunurg vvv",
            // "verification_url": "http://192.168.1.6:8000/admin/certifications/create",
            // "skills_covered": [
            //     "backend"
            // ],
            // "created_at": "2026-09-19T12:20:52.000000Z",
            // "updated_at": "2026-09-19T12:20:52.000000Z",
            // "issuer_logo": {
            //     "id": 19,
            //     "url": "Issuer-Logo/01M2WSSFGVJBH9KPXWGP6XZMMQ.jpg",
            //     "imageable_type": "App\\Models\\Certification",
            //     "imageable_id": 1,
            //     "created_at": "2026-09-19T12:20:52.000000Z",
            //     "updated_at": "2026-09-19T12:20:52.000000Z",
            //     "type": "logo"
            // },
            // "pdf_file": {
            //     "id": 20,
            //     "url": "File-Pdf/1789820452_Kartu Pendaftaran.pdf",
            //     "imageable_type": "App\\Models\\Certification",
            //     "imageable_id": 1,
            //     "created_at": "2026-09-19T12:20:52.000000Z",
            //     "updated_at": "2026-09-19T12:20:52.000000Z",
            //     "type": "pdf"
            // }
        ];
    }
}

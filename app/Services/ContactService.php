<?php

namespace App\Services;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactService
{
    public function __construct(protected ProfilService $profil) {}

    public function send(array $data)
    {
        $contact = $this->profil->getProfil();

        if (! $contact || ! $contact->email) {
            return [
                'success' => false,
                'message' => 'Konfigurasi email belum diatur. Silakan hubungi administrator.',
            ];
        }

        $emailResmi = $contact->email;

        if (! filter_var($emailResmi, FILTER_VALIDATE_EMAIL)) {

            return [
                'success' => false,
                'message' => 'Email tujuan tidak valid. Silakan hubungi administrator.',
            ];
        }

        try {
            Mail::to($emailResmi)->send(new ContactMail($data));

            return [
                'success' => true,
                'message' => 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.',
            ];

        } catch (\Exception $e) {

            Log::error('Gagal mengirim email kontak: '.$e->getMessage());

            return [
                'success' => false,
                'message' => 'Gagal mengirim pesan. Silakan coba lagi nanti.',
            ];

        }

    }
}

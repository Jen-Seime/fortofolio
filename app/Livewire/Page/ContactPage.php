<?php

namespace App\Livewire\Page;

use App\Models\Profil;
use App\Services\ProfilService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactPage extends Component
{
    public array $kontak = [
        'name' => '',
        'email' => '',
        'subject' => '',
        'message' => '',
    ];

    public function rules(): array
    {
        return [
            'kontak.name' => 'required|string|max:255',
            'kontak.email' => 'required|email',
            'kontak.subject' => 'required|string|max:255',
            'kontak.message' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'kontak.name.required' => 'Name is required',
            'kontak.email.required' => 'Email is required',
            'kontak.subject.required' => 'Subject is required',
            'kontak.message.required' => 'Message is required',

            'kontak.name.string' => 'Name must be a string',
            'kontak.email.email' => 'Email must be an email',
            'kontak.subject.string' => 'Subject must be a string',
            'kontak.message.string' => 'Message must be a string',

            'kontak.name.max' => 'Name must be less than 255 characters',
            'kontak.email.max' => 'Email must be less than 255 characters',
            'kontak.subject.max' => 'Subject must be less than 255 characters',
            'kontak.message.max' => 'Message must be less than 255 characters',
        ];
    }

    public function contact(): ?Profil
    {

        return app(ProfilService::class)->getProfil();
    }

    public function kirimPesan(): void
    {
        // $this->validate();

        $emailResmi = $this->contact()->email;

        // dd($emailResmi);
        dd($emailResmi);

        // Cek apakah email resmi ada di database
        // if (!$emailResmi || !$emailResmi->deskripsi) {
        //     session()->flash('error', 'Konfigurasi email sekolah belum diatur. Silakan hubungi administrator.');
        //     return;
        // }

        // // Validasi format email tujuan
        // if (!filter_var($emailResmi->deskripsi, FILTER_VALIDATE_EMAIL)) {
        //     session()->flash('error', 'Email tujuan tidak valid. Silakan hubungi administrator.');
        //     return;
        // }

        // try {
        //     Mail::to($emailResmi->deskripsi)->queue(new ContactMail($kontakData));

        //     $this->reset('pesan');

        //     session()->flash('success', 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
        // } catch (\Exception $e) {
        //     session()->flash('error', 'Gagal mengirim pesan. Silakan coba lagi nanti.');
        // }
    }

    public function render(): View
    {

        return view('livewire.page.contact-page', [
            'contact' => $this->contact(),
        ]);
    }
}

buatkan  saya ui halaman detail sertifikasi

berdasarkan data ini


title	varchar
slug	varchar
issuer	varchar

issue_date	date
credential_id	varchar
description	text
verification_url	varchar

skills_covered	

dengan relasinya

public function issuerLogo(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'logo');
    }

    public function pdfFile(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'pdf');
    }

hasil nya simpan di

c:\Users\ASUS\Herd\Fortofolio\resources\views\livewire\component\certification-detail.blade.php


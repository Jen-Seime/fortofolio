<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pesan Contact</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f4f4f4; padding:20px;">

    <div style="
        max-width:600px;
        margin:auto;
        background:white;
        border-radius:10px;
        padding:30px;
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    ">

        <h2 style="color:#333; margin-bottom:20px;">
            📩 Pesan Baru Dari Contact Form
        </h2>

        <div style="margin-bottom:15px;">
            <strong>Nama:</strong>
            <p>{{ $kontak['name'] }}</p>
        </div>

        <div style="margin-bottom:15px;">
            <strong>Email:</strong>
            <p>{{ $kontak['email'] }}</p>
        </div>

        <div style="margin-bottom:15px;">
            <strong>Pesan:</strong>

            <div style="
                background:#f9f9f9;
                padding:15px;
                border-radius:8px;
                border:1px solid #ddd;
            ">
                {{ $kontak['message'] }}
            </div>
        </div>

        <hr style="margin:30px 0;">

        <p style="font-size:12px; color:gray;">
            Email ini dikirim otomatis dari website contact form.
        </p>

    </div>

</body>
</html>
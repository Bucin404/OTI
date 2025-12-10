<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesan Kontak Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .field {
            margin-bottom: 15px;
        }
        .field label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .field-value {
            padding: 10px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Pesan Kontak Baru dari Website</h2>
        </div>
        
        <div class="content">
            <p>Anda menerima pesan kontak baru dari website OTI:</p>
            
            <div class="field">
                <label>Nama:</label>
                <div class="field-value">{{ $contact->name }}</div>
            </div>
            
            <div class="field">
                <label>Email:</label>
                <div class="field-value">{{ $contact->email }}</div>
            </div>
            
            <div class="field">
                <label>Pesan:</label>
                <div class="field-value">{{ $contact->message }}</div>
            </div>
            
            <div class="field">
                <label>Waktu:</label>
                <div class="field-value">{{ $contact->created_at->format('d F Y, H:i:s') }}</div>
            </div>
            
            @if($contact->ip_address)
            <div class="field">
                <label>IP Address:</label>
                <div class="field-value">{{ $contact->ip_address }}</div>
            </div>
            @endif
        </div>
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} PT. OME TEKNOLOGI INDONESIA. All rights reserved.</p>
        </div>
    </div>
</body>
</html>

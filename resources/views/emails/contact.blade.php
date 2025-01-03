<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
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
            background-color: #1B2A4A;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nouveau message de contact</h1>
        </div>
        
        <div class="content">
            <p><strong>Nom :</strong> {{ $name }}</p>
            <p><strong>Email :</strong> {{ $email }}</p>
            <p><strong>Téléphone :</strong> {{ $phone }}</p>
            <p><strong>Message :</strong></p>
            <p>{{ $message }}</p>
        </div>
        
        <div class="footer">
            <p>Ce message a été envoyé depuis le formulaire de contact de Kottin&Co</p>
        </div>
    </div>
</body>
</html>

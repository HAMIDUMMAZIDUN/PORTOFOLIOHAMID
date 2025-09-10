<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            display: inline-block;
            width: 120px;
        }
        .message-box {
            padding: 15px;
            background-color: #f9f9f9;
            border-left: 4px solid #007bff;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Message from Your Website!</h1>
        <p>You have received a new message from your portfolio's contact form. Here are the details:</p>
        <hr>
        <p><strong>Name:</strong> {{ $formData['name'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        
        @if(!empty($formData['phone']))
            <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
        @endif

        <p><strong>Interested In:</strong> {{ $formData['service'] }}</p>
        
        <div class="message-box">
            <p><strong>Message:</strong></p>
            <p>{{ $formData['message'] }}</p>
        </div>
    </div>
</body>
</html>
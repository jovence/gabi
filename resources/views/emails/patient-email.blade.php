<!DOCTYPE html>
<html>
<head>
    <title>Appointment Information</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #1977cc;
            margin-bottom: 30px;
        }
        .header img {
            max-width: 150px;
            margin-bottom: 15px;
        }
        h1 {
            color: #1977cc;
            font-size: 24px;
            margin-bottom: 25px;
            text-align: center;
        }
        .appointment-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }
        .detail-row {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .detail-row strong {
            color: #1977cc;
            width: 140px;
            display: inline-block;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
        }
        .logo {
            color: #1977cc;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <a href="#" class="logo">MEDCARE</a>
            <p>Your Health, Our Priority</p>
        </div>

        <h1>Appointment Confirmation</h1>

        <div class="appointment-details">
            <div class="detail-row">
                <strong>Name:</strong> {{ $details['name'] }}
            </div>
            <div class="detail-row">
                <strong>Email:</strong> {{ $details['email'] }}
            </div>
            <div class="detail-row">
                <strong>Phone:</strong> {{ $details['phone'] }}
            </div>
            <div class="detail-row">
                <strong>Department:</strong> {{ $details['department'] }}
            </div>
            <div class="detail-row">
                <strong>Date:</strong> {{ $details['date'] }}
            </div>
            <div class="detail-row">
                <strong>Message:</strong> {{ $details['message'] }}
            </div>
        </div>

        <div class="footer">
            <p>Thank you for choosing MEDCARE for your healthcare needs.</p>
            <p>📞 Contact us: (123) 456-7890</p>
            <p>📍 123 Medical Center Drive, Healthcare City</p>
            <p style="color: #999; font-size: 12px;">This is an automated message, please do not reply.</p>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #f4f4f7;
            padding: 20px;
        }

        .email-content {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #2c343b;
            padding: 20px;
            text-align: center;
            color: #ffffff;
            font-size: 24px;
        }

        .email-body {
            padding: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        .email-body p {
            margin: 0 0 15px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #2c343b;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #2c343b;
        }

        .email-footer {
            padding: 20px;
            background-color: #f8f9fa;
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .email-footer p {
            margin: 0;
        }

        .email-footer a {
            color: #000000;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-wrapper">
    <div class="email-content">
        @yield('content')

        <div class="email-footer">
            <p>&copy; <?php echo date('Y');?> Developed By Information Communication & Technology Directorate of ZESCO</p>
            <p>If you have any questions, feel free to <a href="{{"mailto:".env('SUPPORT_EMAIL')}}">contact our support
                    team</a>.</p>
        </div>
    </div>
</div>
</body>
</html>

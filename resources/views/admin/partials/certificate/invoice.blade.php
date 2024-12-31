<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Asia Technical Traning Center - Skill Protal">
    <meta name="author" content="Asia Technical Traning Center">
    <meta name="keywords" content="Asia Technical Traning Center - Skill Protal">

    <title>Asia Technical Traning Center - Skill Protal</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Playfair+Display:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        body {
            overflow: hidden;
        }

        .certificate-container {
            padding: 20px;
            width: 100%;
            max-width: 1450px;
            margin: auto;
        }

        .certificate {
            border: 15px solid #0C5280;
            padding: 30px;
            position: relative;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            word-wrap: break-word;
        }

        .certificate:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('/public/upload/asia.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            z-index: -1;
            opacity: 0.5; /* Watermark effect */
        }

        .certificate-header {
            text-align: center; /* Centering the logos */
            margin-top: 5px;
        }
        .logo1{
            width: 100px;
            margin-right: 500px;
        }
        .logo2{
            width: 70px;
            margin-right: 500px;
        }
        .logo3{
            width: 70px;
        }

        .certificate-title {
            text-align: center;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 40px;
            color: #0C5280;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 42px;
            font-family: 'Merriweather', serif;
            font-weight: 700;
            color: #0C5280;
            text-align: center;
            margin-bottom: 20px;
        }

        .student-name {
            font-size: 30px;
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: #000;
            text-align: center;
            margin: 15px 0;
        }

        .certificate-content {
            text-align: center;
            font-size: 28px;
            font-family: 'Playfair Display', serif;
            color: #555;
            margin-bottom: 20px;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }

        .qr-code-container {
            display: inline-block;
        }

        .certificate-footer {
            text-align: left;
            margin-top: 30px;
        }

        .certificate-footer .signatures {
            font-family: 'Merriweather', serif;
            font-size: 28px;
            color: #333;
            margin: 10px;
            display: inline-block;
            vertical-align: top; /* Align the signatures side by side */
            width: 45%; /* Ensure they take equal space */
        }

        hr {
            background-color: #000;
            height: 1px;
            margin-right: 100px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .certificate {
                padding: 15px;
            }

            .certificate-header .logo {
                max-width: 60px;
            }

            h1 {
                font-size: 34px;
            }

            .student-name {
                font-size: 28px;
            }

            .certificate-content {
                font-size: 24px;
            }

            .certificate-footer {
                text-align: left;
                margin-top: 30px;
            }

            .certificate-footer .signatures {
                font-family: 'Merriweather', serif;
                font-size: 24px;
                color: #333;
                margin: 10px;
                display: inline-block;
                vertical-align: top;
                width: 45%;
            }

            hr {
                background-color: #000;
                height: 1px;
            }
        }

        @media (max-width: 480px) {
            .certificate {
                padding: 10px;
            }

            .certificate-header {
                text-align: center;
            }

            .certificate-header .logo {
                max-width: 50px;
                margin-bottom: 10px;
            }

            h1 {
                font-size: 30px;
            }

            .student-name {
                font-size: 28px;
            }

            .certificate-content {
                font-size: 24px;
            }

            .certificate-footer {
                text-align: left;
                margin-top: 30px;
            }

            .certificate-footer .signatures {
                font-family: 'Merriweather', serif;
                font-size: 24px;
                color: #333;
                margin: 10px;
                display: inline-block;
                vertical-align: top;
                width: 45%;
            }

            hr {
                background-color: #000;
                height: 1px;
            }
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <div class="certificate">
            <div class="certificate-header">
                <img src="{{ $image['logo1'] }}" class="logo1" alt="Logo 1">
                <img src="{{ $image['logo2'] }}" class="logo2" alt="Logo 2">
                <img src="{{ $image['logo3'] }}" class="logo3" alt="Logo 3">
            </div>

            <div class="certificate-body">
                <h3 class="certificate-title">Asia Technical Training Center</h3>
                <h1>Trade Test Participation Certificate</h1>
                <p class="student-name">{{ $data->name }}</p>
                <div class="certificate-content">
                    <p>
                        This is to certify that <strong>{{ $data->name }}</strong> has successfully participated in the trade test for
                        <strong>{{ $data->trade_name }}</strong> under Batch Number: <strong>{{ $data->batch_no }}</strong>
                        and Registration Number: <strong>{{ $data->registration_no }}</strong>.
                    </p>
                </div>
                <div class="qr-code">
                    <div class="qr-code-container">
                        {!! DNS2D::getBarcodeHTML("$baseUrl/$data->certificate_no", 'QRCODE', 2, 2) !!}
                    </div>
                </div>
            </div>

            <div class="certificate-footer">
                <div class="signatures">
                    <p>Issued by:</p>
                    <hr>
                    <p>Principal</p>
                </div>
                <div class="signatures">
                    <p>Authorized by:</p>
                    <hr>
                    <p>Principal</p>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>

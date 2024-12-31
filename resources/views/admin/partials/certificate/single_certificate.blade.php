<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Asia Technical Traning Center - Skill Protal">
	<meta name="author" content="Asia Technical Traning Center">
	<meta name="keywords" content="Asia Technical Traning Center - Skill Protal">

	<title>Asia Technical Traning Center - Skill Protal</title>
    
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Playfair+Display:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('public/assets/css/pdf.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="certificate">
                <div class="certificate-header">
                    <img width="80" src="{{ asset('public/upload/asia.png') }}" class="logo" alt="Logo 1">
                    <img width="70" src="{{ asset('public/upload/govt.png') }}" class="logo" alt="Logo 2">
                    <img width="70" src="{{ asset('public/upload/NASD.png') }}" class="logo" alt="Logo 3">
                </div>

                <div class="certificate-body">
                    <p class="certificate-title">RENR NCLEX AND CONTINUING EDUCATION (CME) Review Masters</p>
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
                            {!! DNS2D::getBarcodeHTML("$baseUrl/$data->certificate_no", 'QRCODE', 2,2) !!}
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
    </div>
</div>  
</body>
</html>


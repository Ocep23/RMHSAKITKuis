<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to RUMAH SAKIT JOSEPH</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .welcome-section {
            text-align: center;
            padding: 50px;
        }
        .welcome-section h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .welcome-section p {
            font-size: 1.5em;
            color: #343a40;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .btn-primary {
            font-size: 1.2em;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <h1>Welcome to RUMAH SAKIT JOSEPH</h1>
            <p>Your health is our priority. We provide the best medical services with professional staff and modern facilities.</p>
            <a href="{{ route('daftar') }}" class="btn btn-primary">Daftar</a>
            <a href="{{ route('tampilpasien') }}" class="btn btn-primary">Data Pasien</a>
        </div>
    </div>
</body>
</html>
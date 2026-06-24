<?php http_response_code(500); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 – Server Error | Shree Gurve Technology</title>
    <meta name="robots" content="noindex, nofollow">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #0D1B2A; color: white; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 40px 20px; }
        .error-num { font-size: 7rem; font-weight: 900; line-height: 1; background: linear-gradient(135deg, #3B8BEB, #F4623A); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .btn-home { background: linear-gradient(135deg, #F4623A, #e85320); color: white; border: none; border-radius: 10px; padding: 12px 32px; font-weight: 600; font-family: 'Poppins', sans-serif; }
        .btn-home:hover { color: white; transform: translateY(-2px); }
    </style>
</head>
<body>
    <div class="text-center">
        <div class="error-num">500</div>
        <h1 style="font-size:1.6rem;font-weight:700;margin:12px 0 8px;">Internal Server Error</h1>
        <p style="color:rgba(255,255,255,0.6);max-width:420px;margin:0 auto 32px;">Something went wrong on our end. Our team has been notified and we're working to fix it. Please try again shortly.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="/" class="btn btn-home">Go to Homepage</a>
            <a href="mailto:contact@shreegurvetech.com" class="btn" style="border:1px solid rgba(255,255,255,0.3);color:white;border-radius:10px;padding:12px 32px;font-weight:600;font-family:'Poppins',sans-serif;">Email Support</a>
        </div>
        <p style="margin-top:32px;font-size:0.8rem;color:rgba(255,255,255,0.35);">
            Or call us: <a href="tel:+918200017181" style="color:rgba(255,255,255,0.6);">+91 82000 17181</a>
        </p>
    </div>
</body>
</html>

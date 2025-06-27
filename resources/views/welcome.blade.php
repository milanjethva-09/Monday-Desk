<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            height: 100vh;
            color: #fff;
        }
        .hero-overlay {
            background-color: rgba(0,0,0,0.5);
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="hero-overlay">
            <h1 class="display-4 fw-bold mb-3">Welcome to Monday (by AmdavadX)</h1>
            <p class="lead mb-4">A most advanced e-commerce solution for Indian Sellers.</p>
            <a href="/login" class="btn btn-primary btn-lg">Login</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

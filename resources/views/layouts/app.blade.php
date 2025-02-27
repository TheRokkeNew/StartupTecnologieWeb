<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FamilyFinance')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <style>
    html, body {
        height: 100%;
        margin: 0;
    }
    .wrapper {
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }
    .content {
        flex: 1;
    }
    .footer {
        background-color: #f8f9fa;
        padding: 1rem 0;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">FamilyFinance</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profilo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-danger" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="content">
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
        
        <footer class="footer">
            <div class="container">
                <p class="mb-0">&copy; 2025 FamilyFinance - Tutti i diritti riservati</p>
            </div>
        </footer>
    </div>
</body>
</html>
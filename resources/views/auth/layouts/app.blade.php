<!DOCTYPE html>
@extends('layouts.app')
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
        <div class="content">
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
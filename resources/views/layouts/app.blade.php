<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha2/css/bootstrap.min.css" integrity="sha512-AJqlPMFVh36uw2D9RLPBfAVy0S7OFl7zCOnnZTs0WAtaRzv1lK7tMoGz7k586FulS00KTNsWNr/5IVhIzBlEow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <title>Laravel Demo for BSIT 3A</title>
</head>
<body>
    @include('components.header')
    @include('components.sidebar')
    <main id="main" class="main">
        @yield('content')
    </main>
    
    @include('components.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha512-EG++JPXevM9zNXYPPRo2G+qFY6OuQivci8L7/8HMfGjSbbsoFywHdHq/lLgSk1XIZNwzxxnE0mUGJxVoSsoUgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
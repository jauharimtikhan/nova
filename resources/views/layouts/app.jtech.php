<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>[[ $title ?? $appName ]]</title>
    &stack('css')
</head>

<body>
    <nav>
        &include('partials.header')
    </nav>

    <main>
        &yield('content')
    </main>

    <footer>
        <p>&copy; [[ date('Y') ]] [[ $appName ]]</p>
    </footer>

    &stack('js')
</body>

</html>
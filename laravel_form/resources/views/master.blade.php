<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration From</title>
    <link rel="stylesheet" href="css/main.css">
    <script>
		function changeLang(lang) {
		window.location.href = "http://localhost/laravel_form/public/?lang=" + lang;
		}
    </script>
    <script src="javascript/script.js"></script>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><button onclick="changeLang('ar')">Ar</button></li>
				<li><button onclick="changeLang('en')">En</button></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
            <p>{{ __('index.© 2023 My Website. All rights reserved.') }}</p>
    </footer>
</body>

</html>

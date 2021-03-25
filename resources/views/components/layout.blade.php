<!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Montserrat:400,700']
        }
    });
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notes</title>
<link rel="stylesheet" href="{{ asset('css/app.min.css') }}">

<body class="font-sans flex flex-col">

    <main class="prose ">
        {{ $slot }}
    </main>
</body>

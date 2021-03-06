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
@livewireStyles
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body class="flex flex-col font-sans dark:bg-gray-800 dark:text-white">

    <main class="grid flex-1 grid-cols-2 p-10 prose">
            <div class="flex flex-col">
            @foreach ($notes as $note)
                <button wire:click class="mt-10 focus:bg-pink-500">{{ $note->title }}</button>
            @endforeach
            </div>
            <div>

            </div>
    </main>
    @livewireScripts
</body>
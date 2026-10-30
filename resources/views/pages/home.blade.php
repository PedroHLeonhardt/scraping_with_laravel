<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
])
    <title>Document</title>
</head>
<body class="m-0 min-h-screen w-full overflow-x-hidden bg-[#080B10] text-slate-100">
    <x-header />
    <x-section />
    <x-section.categorias />
    <x-section.content />
    <main class="mx-auto w-full max-w-7xl px-4 py-6">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
            <x-card.content />
            <x-card.endpoint />
            <x-card.hackday />
            <x-card.technologies />
        </div>
    </main>
</body>
</html>






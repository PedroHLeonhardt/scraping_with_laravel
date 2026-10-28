<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#080B10]">
<x-header />
<x-section />
<x-content />

<main class="mx-auto w-full max-w-7xl px-4 py-6">
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
        <x-card.cardhack />
        <x-card.endpoint_card />
        <x-card.card_tecnologies />
        <x-card.lastarigle_card />
    </div>
</main>
</body>

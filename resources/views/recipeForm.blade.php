<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="font-sans text-black! bg-white! antialiased dark:bg-black dark:text-white/50">
    <x-header></x-header>
    <div class=" flex">
        {{-- sidebar --}}
        <x-sidebar></x-sidebar>
        <div class="w-full p-4">
            <div class="space-y-4">
                {{-- post card --}}
                <x-recipe.makerecipe :catigorys="$catigorys" />
            </div>
        </div>
    </div>

</body>

</html>
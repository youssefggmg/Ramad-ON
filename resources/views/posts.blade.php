<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    {{-- header --}}
    <x-header></x-header>
    <div class=" flex">
        {{-- sidebar --}}
        <x-sidebar></x-sidebar>
        <div class="w-full p-4">
            {{-- create post form --}}
            <x-post.createpost></x-post.createpost>
            <div class="space-y-4">
                {{-- post card --}}
                @foreach ($allPosts as $post )
                <x-post.post :post="$post" />
                @endforeach
            </div>
        </div>
    </div>


    <script>
        var toggleOpen = document.getElementById('toggleOpen');
        var toggleClose = document.getElementById('toggleClose');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
        }

        toggleOpen.addEventListener('click', handleClick);
        toggleClose.addEventListener('click', handleClick);
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        jetbrains: ['"JetBrains Mono"', 'monospace'],
                    },
                },
            }
        }
    </script>

</head>

<body class="bg-stone-950 text-stone-200 font-jetbrains font-medium">
    <header class=" bg-stone-900">
        <nav class=" mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="  space-x-4 flex font-bold">
                <li><a href="/" class="text-emerald-600">Explorar</a></li>
                <li><a href="/meus-livos.php" class="hover:underline"> Meus livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php">Fazer login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg space-x-3  space-y-6">


            <?php require "views/{$view}.view.php" ?>
          
        </section>

    </main>
</body>

</html>
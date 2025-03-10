<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>New Collection</title>
</head>
<body>
<header class="p-4 bg-gray-200 flex justify-between items-center">
    <!-- Menu mobile (burger) -->
    <div class="md:hidden">
        <button id="menu-toggle" class="text-black text-lg">&#9776;</button>
    </div>

    <!-- Navigation -->
    <nav id="menu" class="hidden md:flex items-center gap-4">
        <a href="index.php" class="text-black">Home</a>
        <a href="#Collections" class="text-black">Collections</a>
        <a href="#New" class="text-black">New</a>
    </nav>

    <!-- Logo -->
    <div>
        <img class="w-8 h-8 flex justify-center items-center" src="image/image.png" alt="Logo">
    </div>

    <!-- Icônes -->
    <div class="flex items-center gap-2">
        <a href="panier.php">
            <button class="w-10 h-10 rounded-full bg-black flex justify-center items-center text-white">
                🛒 <!-- Icône panier -->
            </button>
        </a>
        <a href="favoris.php">
            <button class="w-10 h-10 rounded-full bg-black flex justify-center items-center text-white">
                ❤️ <!-- Icône cœur -->
            </button>
        </a>
        <a href="login.php">
            <button class="w-10 h-10 rounded-full bg-black flex justify-center items-center text-white">
                👤 <!-- Icône utilisateur -->
            </button>
        </a>
    </div>
</header>

<!-- JavaScript pour gérer le menu burger -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("menu").classList.toggle("hidden");
    });
</script>

</body>
</html>

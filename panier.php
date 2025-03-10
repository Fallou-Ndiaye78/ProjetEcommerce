<?php
session_start();

// Vérifie si le panier existe, sinon on le crée
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

// Supprimer un article du panier
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    unset($_SESSION['panier'][$id]);
}

// Simuler des articles pour test (remplace ceci par ta base de données)
$articles = [
    1 => ["name" => "T-Shirt Noir", "price" => 20, "image" => "image/prod2.png"],
    2 => ["name" => "Sweat Blanc", "price" => 35, "image" => "image/prod3.png"],
    3 => ["name" => "Jeans Slim", "price" => 50, "image" => "image/prod31.png"]
];


// Ajouter un article (normalement via un formulaire)
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    if (isset($articles[$id])) {
        $_SESSION['panier'][$id] = $articles[$id];
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold mb-4">🛒 Mon Panier</h2>
        
        <?php if (!empty($_SESSION['panier'])): ?>
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Image</th>
                        <th class="p-2">Produit</th>
                        <th class="p-2">Prix</th>
                        <th class="p-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['panier'] as $id => $item): ?>
                        <tr class="border-b">
                            <td class="p-2"><img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="w-16 h-16 rounded"></td>
                            <td class="p-2"><?= $item['name'] ?></td>
                            <td class="p-2"><?= $item['price'] ?> €</td>
                            <td class="p-2">
                                <a href="panier.php?remove=<?= $id ?>" class="text-red-500">❌ Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="mt-4">
                <a href="shop.php" class="px-4 py-2 bg-blue-500 text-white rounded">🛍️ Continuer les achats</a>
            </div>
        <?php else: ?>
            <p class="text-gray-500">Votre panier est vide.</p>
            <a href="shop.php" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded inline-block">🛍️ Continuer les achats</a>
        <?php endif; ?>
    </div>
</body>
</html>

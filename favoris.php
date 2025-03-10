<?php
session_start();
include 'config.php';

function formatPrice($price, $currency) {
    $symbols = [
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£',
        'JPY' => '¥',
    ];
    
    $symbol = isset($symbols[$currency]) ? $symbols[$currency] : $currency.' ';
    
    return $symbol . number_format($price, 2);
}

// Vérifier si le tableau des favoris est initialisé
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}

// Ajouter aux favoris
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $productId = intval($_POST['product_id']);

    if ($_POST['action'] == 'add_to_favorites' && !in_array($productId, $_SESSION['favorites'])) {
        $_SESSION['favorites'][] = $productId;
    }
    
    if ($_POST['action'] == 'remove_from_favorites') {
        $_SESSION['favorites'] = array_diff($_SESSION['favorites'], [$productId]);
    }
}

// Récupérer les favoris
if (!empty($favorites)) {
    $ids = implode(",", array_map('intval', $favorites));

    $sql = "
        SELECT * FROM best_seller WHERE id IN ($ids)
        UNION 
        SELECT * FROM capuchons WHERE id IN ($ids)
        UNION 
        SELECT * FROM jacket WHERE id IN ($ids)
        UNION 
        SELECT * FROM jean WHERE id IN ($ids)
        UNION 
        SELECT * FROM new_shirt WHERE id IN ($ids)
        UNION 
        SELECT * FROM polo_shirt WHERE id IN ($ids)
        UNION 
        SELECT * FROM short WHERE id IN ($ids)
        UNION 
        SELECT * FROM sweatshirt WHERE id IN ($ids)
        UNION 
        SELECT * FROM t_shirt WHERE id IN ($ids)
    ";

    $result = $conn->query($sql);
} else {
    $result = false;
}
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
}
                                                                              
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Favoris</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">❤️ Mes Favoris</h2>
            <a href="shop.php" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                🛍️ Continuer les achats
            </a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-xl transition">
                        <img src="<?php echo htmlspecialchars($row["image_path"]); ?>" 
                            alt="<?php echo htmlspecialchars($row["name"]); ?>" 
                            class="w-full h-48 object-cover rounded-lg">
                        <h3 class="mt-3 text-lg font-semibold text-gray-900"><?php echo htmlspecialchars($row["name"]); ?></h3>
                        <p class="text-gray-700 mt-1"><?php echo formatPrice($row["price"], $row["currency"]); ?></p>
                        <form action="favoris.php" method="post" class="mt-4">
                            <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>">
                            <input type="hidden" name="action" value="remove_from_favorites">
                            <button type="submit" class="w-full py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition">❌ Supprimer</button>
                        </form>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p class='text-gray-500 text-lg text-center w-full'>Aucun produit dans vos favoris.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>


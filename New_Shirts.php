<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <div class="container mx-auto mt-5">
        <div class="flex gap-4">
            <!-- Filtres -->
            <div class="w-1/4 p-4 bg-gray-100">
                <h5 class="mb-3 font-bold">Filtres</h5>
                <div class="mb-3">
                    <h6 class="font-semibold">Size</h6>
                    <div class="flex flex-wrap gap-2">
                        <button class="px-2 py-1 border rounded">XS</button>
                        <button class="px-2 py-1 border rounded">S</button>
                        <button class="px-2 py-1 border rounded">M</button>
                        <button class="px-2 py-1 border rounded">L</button>
                        <button class="px-2 py-1 border rounded">XL</button>
                        <button class="px-2 py-1 border rounded">2X</button>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h6 class="font-semibold">Availability</h6>
                        <span>&gt;</span>
                    </div>
                    <div class="ml-4 hidden">
                        <p>
                            <input type="checkbox" id="availability">
                            <label for="availability" class="text-sm">Availability (450)</label>
                        </p>
                        <p>
                            <input type="checkbox" id="out-of-stock">
                            <label for="out-of-stock" class="text-sm">Out Of Stock (18)</label>
                        </p>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h6 class="font-semibold">Category</h6>
                        <span>&gt;</span>
                    </div>
                    <div class="ml-4 hidden">
                        <select class="w-full p-2 border rounded">
                            <option>Vêtements</option>
                            <option>Accessoires</option>
                            <option>Chaussures</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h6 class="font-semibold">Colors</h6>
                        <span>&gt;</span>
                    </div>
                    <div class="ml-4 hidden">
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-block w-6 h-6 bg-red-500 rounded-full"></span>
                            <span class="inline-block w-6 h-6 bg-blue-500 rounded-full"></span>
                            <span class="inline-block w-6 h-6 bg-green-500 rounded-full"></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h6 class="font-semibold">Price Range</h6>
                        <span>&gt;</span>
                    </div>
                    <div class="ml-4 hidden">
                        <input type="range" class="w-full" min="0" max="1000" step="10">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h6 class="font-semibold">Collections</h6>
                        <span>&gt;</span>
                    </div>
                    <div class="ml-4 hidden">
                        <select class="w-full p-2 border rounded">
                            <option>Collection A</option>
                            <option>Collection B</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h6 class="font-semibold">Tags</h6>
                        <span>&gt;</span>
                    </div>
                    <div class="ml-4 hidden">
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-200 px-2 py-1 rounded">Nouveau</span>
                            <span class="bg-gray-200 px-2 py-1 rounded">Populaire</span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="flex justify-between items-center cursor-pointer accordion-header">
                        <h6 class="font-semibold">Ratings</h6>
                        <span>&gt;</span>
                    </div>
                    <div class="ml-4 hidden">
                        <select class="w-full p-2 border rounded">
                            <option value="5">5 étoiles</option>
                            <option value="4">4 étoiles et plus</option>
                            <option value="3">3 étoiles et plus</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Produits -->
            <div class="w-3/4 p-4 bg-gray-100">
                <h2 class="mb-4 text-2xl font-bold">Produits</h2>
                <div class="flex items-center mb-4">
                    <input type="text" placeholder="Search" class="px-4 py-2 border rounded w-1/3" />
                    <div class="flex flex-wrap gap-2 ml-4">
                        <a href="New_Shirts.php"><button class="bg-gray-300 px-3 py-1 rounded">New Shirts</button></a>
                        <a href="Polo_Shirts.php"><button class="bg-gray-300 px-3 py-1 rounded">Polo Shirts</button></a>
                        <a href="Shorts.php"><button class="bg-gray-300 px-3 py-1 rounded">Shorts</button></a>
                        <a href="Sweatshirts.php"><button class="bg-gray-300 px-3 py-1 rounded">Sweatshirts</button></a>
                        <a href="Best_Sellers.php"><button class="bg-gray-300 px-3 py-1 rounded">Best Sellers</button></a>
                        <a href="T-Shirts.php"><button class="bg-gray-300 px-3 py-1 rounded">T-Shirts</button></a>
                        <a href="Jeans.php"><button class="bg-gray-300 px-3 py-1 rounded">Jeans</button></a>
                        <a href="Jackets.php"><button class="bg-gray-300 px-3 py-1 rounded">Jackets</button></a>
                        <a href="Capuchons.php"><button class="bg-gray-300 px-3 py-1 rounded">Capuchons</button></a>
                    </div>
                </div>
            <?php
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

                // Query to get all shirts
                $sql = "SELECT * FROM new_shirt";
                $result = $conn->query($sql);
                ?>

                <!-- Product Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 mb-4">
                    <?php
                    // Display products
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="product-card bg-white p-3 rounded-lg shadow hover:shadow-md transition">
                                <div class="relative">
                                    <img src="<?php echo htmlspecialchars($row["image_path"]); ?>" 
                                        alt="<?php echo htmlspecialchars($row["name"]); ?>" 
                                        class="w-full h-48 object-cover rounded-lg">
                                </div>
                                
                                <h3 class="mt-2 font-bold text-gray-800"><?php echo htmlspecialchars($row["name"]); ?></h3>
                                <p class="text-gray-600"><?php echo formatPrice($row["price"], $row["currency"]); ?></p>
                                
                                <div class="mt-3 flex flex-col gap-2">
                                    <!-- Add to Cart Button -->
                                    <form action="panier.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>">
                                        <input type="hidden" name="action" value="add_to_cart">
                                        <button type="submit" class="w-full py-1 px-3 bg-black text-white rounded hover:bg-gray-800 transition flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            Add to Cart
                                        </button>
                                    </form>
                                    
                                    <!-- Add to Favorites Button -->
                                    <form action="favoris.php" method="post">
                                        <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>">
                                        <input type="hidden" name="action" value="add_to_favorites">
                                        <button type="submit" class="w-full py-1 px-3 bg-white text-black border border-gray-300 rounded hover:bg-gray-100 transition flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                            Favorite
                                        </button>
                                    </form>
                                </div>
                                
                                <p class="text-xs text-gray-500 mt-2 truncate"><?php echo htmlspecialchars($row["description"]); ?></p>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<div class='col-span-full text-center py-8 text-gray-500'>No products found</div>";
                    }
                    ?>
                </div>
            <?php
                // Close the database connection
                $conn->close();
            ?>
            </div>
        </div>
    </div>

    <script>
        // Script pour faire fonctionner les flèches et afficher/cacher le contenu
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.classList.toggle('hidden');
                const arrow = header.querySelector('span');
                arrow.classList.toggle('rotate-90');
            });
        });
    </script>
    <script>
        const buttons = document.querySelectorAll('.flex-wrap button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.textContent.trim(); // Obtenez le texte du bouton
                fetch(`/api.php?category=${category}`) // Assurez-vous que le chemin correspond à votre API
                    .then(response => response.json())
                    .then(data => {
                        const productContainer = document.querySelector('.grid');
                        productContainer.innerHTML = ''; // Vide le conteneur avant d'ajouter les nouveaux produits
                        data.forEach(product => {
                            const productCard = `
                                <div class="product-card">
                                    <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover rounded-lg">
                                    <h3 class="mt-2 font-bold">${product.name}</h3>
                                </div>
                            `;
                            productContainer.innerHTML += productCard;
                        });
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
<?php include 'footer.php'; ?>
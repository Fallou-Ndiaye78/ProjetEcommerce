<?php include 'header.php'; ?>

<main class="p-4 sm:p-6 flex flex-col md:flex-row items-center bg-gray-100">
    <div class="w-full md:w-1/2 px-2 sm:px-4">
        <div class="flex space-x-4 mb-4">
            <p class="text-lg text-gray-600 hover:text-black cursor-pointer">MEN</p>
            <p class="text-lg text-gray-600 hover:text-black cursor-pointer">WOMEN</p>
            <p class="text-lg text-gray-600 hover:text-black cursor-pointer">KIDS</p>
        </div>

        <div class="my-4 w-full sm:w-auto">
            <input type="text" placeholder="Search" class="border rounded px-4 py-2 w-full sm:w-60 bg-gray-200" />
        </div>
        
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mt-4">NEW</h1>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mt-0">COLLECTION</h1>
        <p class="text-lg text-gray-600">Summer 2024</p>
        
        <div class="mt-6 sm:mt-8 flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0">
            <a href="shop.php" class="border rounded px-4 py-2 w-full sm:w-60 bg-gray-200 text-center hover:bg-gray-300 transition">Go to shop</a>
            <div class="flex items-center space-x-2 sm:ml-4">
                <span class="text-lg cursor-pointer text-gray-600 border p-2 rounded hover:bg-gray-300" onclick="changeColor('previous')">&lt;</span>
                <span class="text-lg cursor-pointer text-gray-600 border p-2 rounded hover:bg-gray-300" onclick="changeColor('next')">&gt;</span>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 mt-8 md:mt-0">
        <div class="flex flex-col sm:flex-row justify-between gap-4">
            <img src="image/img1.png" alt="Product 1" class="w-full sm:w-1/2 h-auto rounded shadow-lg bg-gray-100">
            <img src="image/img2.png" alt="Product 2" class="w-full sm:w-1/2 h-auto rounded shadow-lg bg-gray-100">
        </div>
    </div>
</main>

<section id="New" class="bg-gray-100 p-4 sm:p-6">
    <div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2">NEW</h1>
        <h2 class="text-2xl sm:text-3xl font-bold mb-4">THIS WEEK (50)</h2>
        
        <div id="image-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/tct1.png" alt="Embroidery Soarshaker Shirt" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">V-NECK T-SHIRT</p>
                <p class="font-bold">Embroidery Soarshaker Shirt</p>
                <p class="text-gray-600">$90</p>
            </div>
            
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/tct2.png" alt="Basic Slim Fit T-Shirt" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">T-SHIRT</p>
                <p class="font-bold">Basic Slim Fit T-Shirt</p>
                <p class="text-gray-600">$90</p>
            </div>
            
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/tct3.png" alt="Blurred Print T-Shirt" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">T-SHIRT</p>
                <p class="font-bold">Blurred Print T-Shirt</p>
                <p class="text-gray-600">$90</p>
            </div>
            
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/tct4.png" alt="Full Sleeve Zipper" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">JACKET</p>
                <p class="font-bold">Full Sleeve Zipper</p>
                <p class="text-gray-600">$90</p>
            </div>

            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/new1.png" alt="New Product 1" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">NEW ARRIVAL</p>
                <p class="font-bold">New Product 1</p>
                <p class="text-gray-600">$100</p>
            </div>
            
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/new2.png" alt="New Product 2" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">NEW ARRIVAL</p>
                <p class="font-bold">New Product 2</p>
                <p class="text-gray-600">$100</p>
            </div>
            
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/new3.png" alt="New Product 3" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">NEW ARRIVAL</p>
                <p class="font-bold">New Product 3</p>
                <p class="text-gray-600">$100</p>
            </div>
            
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/new4.png" alt="New Product 4" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">NEW ARRIVAL</p>
                <p class="font-bold">New Product 4</p>
                <p class="text-gray-600">$100</p>
            </div>
            
            <div class="p-4 bg-gray-100 transition hover:shadow-lg">
                <img src="image/new5.png" alt="New Product 5" class="w-full h-auto">
                <p class="text-gray-600 text-sm mt-2">NEW ARRIVAL</p>
                <p class="font-bold">New Product 5</p>
                <p class="text-gray-600">$100</p>
            </div>
        </div>

        <div class="flex justify-center mt-6">
            <div class="flex items-center space-x-4">
                <span id="prev" class="text-lg cursor-pointer text-gray-600 border p-2 rounded bg-gray-200 hover:bg-gray-300 transition">&lt;</span>
                <span id="next" class="text-lg cursor-pointer text-gray-600 border p-2 rounded bg-gray-200 hover:bg-gray-300 transition">&gt;</span>
            </div>
        </div>
    </div>

    <script>
        // Responsive image gallery handler
        document.addEventListener('DOMContentLoaded', function() {
            let currentGroup = 0;
            const groups = document.querySelectorAll('#image-container > div');
            const itemsPerPage = window.innerWidth < 640 ? 1 : 
                                window.innerWidth < 1024 ? 2 : 4;

            const showImages = () => {
                groups.forEach((group) => {
                    group.classList.add('hidden');
                });

                for (let i = currentGroup; i < currentGroup + itemsPerPage && i < groups.length; i++) {
                    groups[i].classList.remove('hidden');
                }
            };

            // Initial display
            showImages();

            // Handle window resize
            window.addEventListener('resize', function() {
                const newItemsPerPage = window.innerWidth < 640 ? 1 : 
                                      window.innerWidth < 1024 ? 2 : 4;
                
                if (newItemsPerPage !== itemsPerPage) {
                    currentGroup = 0; // Reset to first page on layout change
                    showImages();
                }
            });

            document.getElementById('next').addEventListener('click', () => {
                const itemsPerPage = window.innerWidth < 640 ? 1 : 
                                    window.innerWidth < 1024 ? 2 : 4;
                                    
                if (currentGroup < groups.length - itemsPerPage) {
                    currentGroup += itemsPerPage;
                    showImages();
                }
            });

            document.getElementById('prev').addEventListener('click', () => {
                const itemsPerPage = window.innerWidth < 640 ? 1 : 
                                    window.innerWidth < 1024 ? 2 : 4;
                                    
                if (currentGroup > 0) {
                    currentGroup -= itemsPerPage;
                    showImages();
                }
            });
        });
    </script>
</section>

<section id="Collections" class="bg-gray-100 p-4 sm:p-6">
    <div>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2">XIV</h1>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-2">COLLECTIONS</h1>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4">23-24</h1>

        <div class="flex justify-between mb-6">
            <button class="border rounded px-4 py-2 bg-gray-200 hover:bg-gray-300 transition">Filters (+)</button>
            <button class="border rounded px-4 py-2 bg-gray-200 hover:bg-gray-300 transition">Sorts(-)</button>
        </div>

        <div id="image-container-2" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg">
                <img src="image/xiv1.png" alt="Basic Heavy Weight T-Shirt" class="w-full h-auto">
                <p class="font-bold mt-3">Basic Heavy Weight T-Shirt</p>
                <p class="text-gray-600">$199</p>
            </div>

            <div class="flex flex-col items-center p-4 transition hover:shadow-lg">
                <img src="image/xiv2.png" alt="Soft Wash Straight Ft. Jeans" class="w-full h-auto">
                <p class="font-bold mt-3">Soft Wash Straight Ft. Jeans</p>
                <p class="text-gray-600">$199</p>
            </div>
            
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg">
                <img src="image/xiv3.png" alt="Cotton Jean T-Shirt" class="w-full h-auto">
                <p class="font-bold mt-3">Cotton Jean T-Shirt</p>
                <p class="text-gray-600">$199</p>
            </div>

            <!-- Hidden images for "More" functionality -->
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg hidden more-item">
                <img src="image/xiv(4).png" alt="New Product 4" class="w-full h-auto">
                <p class="font-bold mt-3">New Product 4</p>
                <p class="text-gray-600">$199</p>
            </div>
            
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg hidden more-item">
                <img src="image/xiv(5).png" alt="New Product 5" class="w-full h-auto">
                <p class="font-bold mt-3">New Product 5</p>
                <p class="text-gray-600">$199</p>
            </div>
            
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg hidden more-item">
                <img src="image/xiv(6).png" alt="New Product 6" class="w-full h-auto">
                <p class="font-bold mt-3">New Product 6</p>
                <p class="text-gray-600">$199</p>
            </div>
            
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg hidden more-item">
                <img src="image/xiv(7).png" alt="New Product 7" class="w-full h-auto">
                <p class="font-bold mt-3">New Product 7</p>
                <p class="text-gray-600">$199</p>
            </div>
            
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg hidden more-item">
                <img src="image/xiv(8).png" alt="New Product 8" class="w-full h-auto">
                <p class="font-bold mt-3">New Product 8</p>
                <p class="text-gray-600">$199</p>
            </div>
            
            <div class="flex flex-col items-center p-4 transition hover:shadow-lg hidden more-item">
                <img src="image/xiv(9).png" alt="New Product 9" class="w-full h-auto">
                <p class="font-bold mt-3">New Product 9</p>
                <p class="text-gray-600">$199</p>
            </div>
        </div>

        <div class="flex flex-col items-center mt-8">
            <span id="more" class="text-lg cursor-pointer text-gray-600 hover:text-black transition">More</span>
            <span id="toggle-images" class="text-3xl cursor-pointer text-gray-600 hover:text-black transition">v</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.more-item');
            let isExpanded = false;
            
            const toggleImages = () => {
                isExpanded = !isExpanded;
                
                images.forEach(img => {
                    img.classList.toggle('hidden', !isExpanded);
                });
                
                document.getElementById('toggle-images').textContent = isExpanded ? '^' : 'v';
                document.getElementById('more').textContent = isExpanded ? 'Less' : 'More';
            };
            
            document.getElementById('toggle-images').addEventListener('click', toggleImages);
            document.getElementById('more').addEventListener('click', toggleImages);
        });
    </script>
</section>

<section id="approach" class="p-4 sm:p-6 text-center bg-gray-100">
    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">OUR APPROACH TO FASHION DESIGN</h2>
    <div class="max-w-3xl mx-auto">
        <p class="text-gray-600 mb-8">
            At Elegant Vogue, we blend creativity with craftsmanship to create
            fashion that transcends trends and stands the test of time. Each
            design is meticulously crafted, ensuring the highest quality
            exquisite finish.
        </p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <div class="relative overflow-hidden rounded-md transition hover:shadow-lg">
            <img src="image/fas1.png" alt="Fashion 1" class="w-full h-auto">
        </div>
        <div class="relative overflow-hidden rounded-md transition hover:shadow-lg">
            <img src="image/fas2.png" alt="Fashion 2" class="w-full h-auto">
        </div>
        <div class="relative overflow-hidden rounded-md transition hover:shadow-lg">
            <img src="image/fas3.png" alt="Fashion 3" class="w-full h-auto">
        </div>
        <div class="relative overflow-hidden rounded-md transition hover:shadow-lg lg:transform lg:translate-y-6">
            <img src="image/fas4.png" alt="Fashion 4" class="w-full h-auto">
        </div>
    </div>
</section>

<script>
    // General responsive behavior script
    document.addEventListener('DOMContentLoaded', function() {
        // Function to handle menu for mobile devices
        const setupMobileMenu = () => {
            // This would be implemented in header.php, but we include the logic here
            // for completeness. This is a placeholder for any mobile menu functionality.
            console.log('Mobile menu setup complete');
        };
        
        // Responsive image sizing
        const responsiveImages = () => {
            const featuredImages = document.querySelectorAll('main img');
            
            if (window.innerWidth < 640) {
                // Mobile adjustments for images
                featuredImages.forEach(img => {
                    img.style.maxHeight = '400px';
                    img.style.objectFit = 'cover';
                });
            } else {
                // Reset for larger screens
                featuredImages.forEach(img => {
                    img.style.maxHeight = '';
                    img.style.objectFit = '';
                });
            }
        };
        
        // Initial setup
        setupMobileMenu();
        responsiveImages();
        
        // Listen for window resize
        window.addEventListener('resize', responsiveImages);
    });
</script>

<br> <br>

<?php include 'footer.php'; ?>
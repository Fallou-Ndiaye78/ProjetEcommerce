<script src="https://cdn.tailwindcss.com"></script>
<footer class="bg-gray-200 p-8">
    <div class="max-w-6xl mx-auto flex flex-col items-center">
        <div class="flex justify-between w-full mb-4">
            <div class="flex flex-col items-start">
                <span class="font-bold">INFO</span>
                <a href="#" class="text-gray-800 hover:underline">PRICING</a>
                <a href="#" class="text-gray-800 hover:underline">ABOUT</a>
                <a href="#" class="text-gray-800 hover:underline">CONTACTS</a>
            </div>
            <div class="text-5xl font-bold text-center mx-4 flex flex-col items-center">
                <div class="triangle-container">
                <div class="triangle previous" onclick="changeColor('previous')"></div> <!-- Flèche précédente -->
                <div class="triangle next active-next" onclick="changeColor('next')"></div> <!-- Flèche suivante -->
            </div>
                <div>
                    <img class="w-8 h-8 flex justify-center items-center"  src="image/image.png" alt="Logo">
                </div>
                <span class="text-[#d4d4d4]">VR</span>
                <span>XIV</span>
                <span>QR</span>
            </div>
            <div class="flex flex-col items-end">
                <span class="font-bold">LANGUAGES</span>
                <a href="#" class="text-gray-800 hover:underline">ENG</a>
                <a href="#" class="text-gray-800 hover:underline">ESP</a>
                <a href="#" class="text-gray-800 hover:underline">SVE</a>  
            </div>
        </div>
        <p class="text-gray-600 text-xs text-center">&copy; 2024 New Collection. Tous droits réservés.</p>
    </div>
</footer>
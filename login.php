<?php
session_start();
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['pemail'], FILTER_SANITIZE_EMAIL);
    $mot_de_passe = $_POST['pmot_de_passe'];

    $query = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
    $query->execute([$email]);
    $user = $query->fetch();

    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        $_SESSION['admin'] = $user['id'];
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Email ou mot de passe incorrect !'); window.location='login.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <!-- Lien vers le CDN de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Section principale de connexion -->
    <div class="max-w-sm mx-auto bg-white p-8 rounded-lg shadow-md mt-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-4">Fashion</h1>
        <h4 class="text-xl font-semibold text-center text-gray-600 mb-6">Connexion</h4>

        <!-- Formulaire de connexion -->
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="pemail" required
                    class="mt-2 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
            </div>

            <div class="mb-6">
                <label for="mot_de_passe" class="block text-gray-700 font-medium">Mot de passe</label>
                <input type="password" id="mot_de_passe" name="pmot_de_passe" required
                    class="mt-2 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
            </div>

            <div class="mb-4">
                <input type="submit" value="Se connecter"
                    class="w-full bg-[#333] text-white py-2 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
            </div>
        </form>

        <!-- Lien vers la page d'inscription -->
        <p class="text-center text-gray-600">
            Vous n'avez pas de compte ? <a href="inscription.php" class="text-blue-500 hover:underline">S'inscrire</a>
        </p>
    </div>

</body>

</html>

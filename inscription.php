<?php
session_start();
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['pnom']);
    $email = filter_var($_POST['pemail'], FILTER_SANITIZE_EMAIL);
    $mot_de_passe = password_hash($_POST['pmot_de_passe'], PASSWORD_DEFAULT);

    // Vérifier si l'email existe déjà
    $check_email = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
    $check_email->execute([$email]);
    if ($check_email->rowCount() > 0) {
        echo "<script>alert('Cet email est déjà utilisé !'); window.location='inscription.php';</script>";
        exit();
    }

    // Insérer dans la base de données
    $query = $pdo->prepare("INSERT INTO admins (nom, email, mot_de_passe) VALUES (?, ?, ?)");
    if ($query->execute([$nom, $email, $mot_de_passe])) {
        echo "<script>alert('Inscription réussie ! Connectez-vous.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de l'inscription !');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex justify-center items-center min-h-screen">
        <!-- Formulaire d'inscription -->
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Fashion</h1>
            <h4 class="text-xl font-semibold text-center text-gray-600 mb-8">Inscrivez-vous en tant que admin</h4>

            <form action="" method="post">
                <!-- Champ Nom -->
                <div class="mb-4">
                    <label for="pnom" class="block text-gray-700 font-medium">Nom</label>
                    <input type="text" name="pnom" id="pnom" required
                        class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
                </div>

                <!-- Champ Email -->
                <div class="mb-4">
                    <label for="pemail" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" name="pemail" id="pemail" required
                        class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
                </div>

                <!-- Champ Mot de passe -->
                <div class="mb-6">
                    <label for="pmot_de_passe" class="block text-gray-700 font-medium">Mot de passe</label>
                    <input type="password" name="pmot_de_passe" id="pmot_de_passe" required
                        class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400">
                </div>

                <!-- Bouton Soumettre -->
                <div class="mb-4">
                    <input type="submit" value="S'inscrire"
                        class="w-full bg-[#333] text-white py-2 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
            </form>

            <p class="text-center text-gray-600">
                Vous avez déjà un compte ? <a href="login.php" class="text-blue-500 hover:underline">Se connecter</a>
            </p>
        </div>
    </div>
</body>

</html>

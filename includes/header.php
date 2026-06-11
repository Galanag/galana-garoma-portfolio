<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Galana Garoma – Full‑Stack Developer'; ?></title>
    <meta name="description" content="<?php echo $pageDesc ?? 'Galana Garoma – Full‑Stack Developer specialised in ERP/Odoo, Websites, and Mobile Apps.'; ?>">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Three.js for animated background -->
    <script type="importmap">
        {
            "imports": {
                "three": "https://unpkg.com/three@0.128.0/build/three.module.js"
            }
        }
    </script>
    <!-- Heroicons (inline SVG) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-900 text-white font-sans antialiased relative">

<!-- 3D Background Canvas -->
<div id="bg-canvas" class="fixed top-0 left-0 w-full h-full -z-10"></div>

<!-- Main Content -->
<main class="relative z-10">
    <!-- Navigation -->
    <nav class="bg-black/50 backdrop-blur-md border-b border-white/10 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-pink-600 bg-clip-text text-transparent">Galana Garoma</a>
            <div class="space-x-6 hidden md:block">
                <a href="index.php" class="hover:text-purple-400 transition">Home</a>
                <a href="erp-odoo.php" class="hover:text-purple-400 transition">ERP/Odoo</a>
                <a href="website.php" class="hover:text-purple-400 transition">Websites</a>
                <a href="mobile-app.php" class="hover:text-purple-400 transition">Mobile Apps</a>
                <a href="contact.php" class="hover:text-purple-400 transition">Contact</a>
            </div>
            <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-black/80 backdrop-blur-md border-t border-white/10">
            <div class="flex flex-col space-y-4 p-6">
                <a href="index.php" class="hover:text-purple-400 transition">Home</a>
                <a href="erp-odoo.php" class="hover:text-purple-400 transition">ERP/Odoo</a>
                <a href="website.php" class="hover:text-purple-400 transition">Websites</a>
                <a href="mobile-app.php" class="hover:text-purple-400 transition">Mobile Apps</a>
                <a href="contact.php" class="hover:text-purple-400 transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Page content starts here -->
<?php
$pageTitle = 'Galana Garoma – Full‑Stack Developer';
$pageDesc = 'Full‑Stack Developer specialised in ERP/Odoo, Websites, and Mobile Apps.';
include 'includes/header.php';
include 'config/database.php';
?>

<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center text-center px-4 pt-20">
    <div class="max-w-4xl mx-auto">
        <div class="inline-block px-4 py-1 rounded-full bg-purple-500/20 text-purple-300 text-sm mb-6 border border-purple-500/30">
            <i class="fas fa-code mr-2"></i> Full‑Stack Developer
        </div>
        <h1 class="text-5xl md:text-7xl font-bold mb-6">
            Galana <span class="animated-gradient-text">Garoma</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed">
            I'm a versatile Full‑Stack Developer who builds high‑performance digital ecosystems. <br>
            My expertise spans <span class="text-purple-400">Flutter mobile apps</span>, 
            <span class="text-pink-400">WordPress websites</span>, and 
            <span class="text-orange-400">Odoo ERP systems</span>.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#services" class="btn-primary px-8 py-3 rounded-full font-semibold">Explore My Work</a>
            <a href="contact.php" class="px-8 py-3 rounded-full border border-white/30 hover:bg-white/10 transition">Contact Me</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 px-4">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center mb-4">What I Do</h2>
        <p class="text-gray-400 text-center mb-12 max-w-2xl mx-auto">End‑to‑end solutions tailored to your business needs</p>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- ERP/Odoo Card -->
            <a href="erp-odoo.php" class="glass-card p-8 text-center group block">
                <div class="w-20 h-20 mx-auto bg-purple-500/20 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-database text-4xl text-purple-400"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3">ERP | Odoo</h3>
                <p class="text-gray-300">Custom modules, OWL components, enterprise‑grade integrations, and end‑to‑end implementation.</p>
                <div class="mt-4 text-purple-400 group-hover:translate-x-1 transition inline-block">
                    Learn more <i class="fas fa-arrow-right ml-1"></i>
                </div>
            </a>

            <!-- Website Card -->
            <a href="website.php" class="glass-card p-8 text-center group block">
                <div class="w-20 h-20 mx-auto bg-pink-500/20 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-globe text-4xl text-pink-400"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3">Websites</h3>
                <p class="text-gray-300">WordPress, PHP, Tailwind, Elementor Pro, custom plugins, and pixel‑perfect responsive design.</p>
                <div class="mt-4 text-pink-400 group-hover:translate-x-1 transition inline-block">
                    Learn more <i class="fas fa-arrow-right ml-1"></i>
                </div>
            </a>

            <!-- Mobile App Card -->
            <a href="mobile-app.php" class="glass-card p-8 text-center group block">
                <div class="w-20 h-20 mx-auto bg-orange-500/20 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-mobile-alt text-4xl text-orange-400"></i>
                </div>
                <h3 class="text-2xl font-bold mb-3">Mobile Apps</h3>
                <p class="text-gray-300">Cross‑platform apps with Flutter, RESTful APIs, Node.js backends, and smooth UX/UI.</p>
                <div class="mt-4 text-orange-400 group-hover:translate-x-1 transition inline-block">
                    Learn more <i class="fas fa-arrow-right ml-1"></i>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Quick Stats / Skills Highlight -->
<section class="py-16 bg-black/30">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-6 text-center">
            <div><div class="text-4xl font-bold text-purple-400">5+</div><div class="text-gray-400">Years Experience</div></div>
            <div><div class="text-4xl font-bold text-pink-400">10+</div><div class="text-gray-400">Live Websites</div></div>
            <div><div class="text-4xl font-bold text-orange-400">12+</div><div class="text-gray-400">Odoo Modules</div></div>
            <div><div class="text-4xl font-bold text-green-400">100%</div><div class="text-gray-400">Client Satisfaction</div></div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
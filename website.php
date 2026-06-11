<?php
$pageTitle = 'Website Development – Galana Garoma';
$pageDesc = 'Professional WordPress, PHP, Tailwind, and custom plugin development. Pixel‑perfect, responsive websites.';
include 'includes/header.php';
?>

<section class="pt-32 pb-20 px-4">
    <div class="container mx-auto">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <h1 class="text-5xl font-bold mb-4 animated-gradient-text">Website Development</h1>
            <p class="text-gray-300 text-xl">Custom WordPress solutions, headless CMS, and high‑performance frontends.</p>
        </div>

        <!-- Existing skills + featured projects (unchanged) -->
        <div class="grid lg:grid-cols-2 gap-12 mb-20">
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-4 flex items-center"><i class="fab fa-wordpress text-blue-400 mr-3"></i> WordPress Expertise</h2>
                <ul class="space-y-3 text-gray-300">
                    <li><i class="fas fa-paint-brush text-pink-400 mr-2"></i> Theme Customization – Child Themes, CSS Overrides, Global Styles</li>
                    <li><i class="fas fa-palette text-pink-400 mr-2"></i> Figma to WP – Design Handoff, Asset Export, Pixel Perfect</li>
                    <li><i class="fas fa-mobile-alt text-pink-400 mr-2"></i> Responsive UI – Mobile‑First, Tablet Testing, Flexbox/Grid</li>
                    <li><i class="fab fa-elementor text-pink-400 mr-2"></i> Plugin Customization – Build from scratch, Elementor & Gutenberg</li>
                    <li><i class="fas fa-credit-card text-pink-400 mr-2"></i> Payment Integration – WooCommerce, PayPal, Telebir</li>
                </ul>
            </div>
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-4 flex items-center"><i class="fas fa-code-branch text-blue-400 mr-3"></i> Featured Projects</h2>
                <ul class="space-y-4">
                    <li><i class="fas fa-tree text-green-400 mr-2"></i> <strong>Tour & Travel Booking</strong> – Wanchi Dandi Ecotourism</li>
                    <li><i class="fas fa-building text-gray-400 mr-2"></i> <strong>Oro Construction Group</strong> – Corporate digital hub</li>
                    <li><i class="fas fa-hotel text-yellow-400 mr-2"></i> <strong>IJA Langano Booking Website</strong> – Resort booking platform</li>
                    <li><i class="fas fa-chart-line text-purple-400 mr-2"></i> <strong>Digital Transformation for IJA Developer s.c.</strong> – Investor portal</li>
                </ul>
            </div>
        </div>

        <!-- Portfolio Showcase with LIVE PREVIEW THUMBNAILS -->
        <div class="mt-20">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 bg-purple-500/20 px-4 py-2 rounded-full border border-purple-500/30 mb-4">
                    <i class="fas fa-briefcase text-purple-300"></i>
                    <span class="text-purple-300 text-sm font-medium">Live Projects</span>
                </div>
                <h2 class="text-4xl font-bold mb-4">My Digital Portfolio</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Click any thumbnail to see the live website in a new tab.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Function to generate screenshot URL using WordPress mshots -->
                <?php
                function get_screenshot_url($url, $width = 600) {
                    return 'https://s.wordpress.com/mshots/v1/' . urlencode($url) . '?w=' . $width;
                }
                ?>

                <!-- Siinqee Lease -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://siinqeelease.com', 600) ?>" 
                             alt="Siinqee Lease Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://siinqeelease.com" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-chart-line mr-1"></i> Financial Services
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">Siinqee Lease S.C.</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Ethiopia's premier capital goods finance institution specializing in collateral‑free leasing for MSMEs.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">WordPress</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Custom Post Types</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Lease Calculator</span>
                        </div>
                        <a href="https://siinqeelease.com" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- Walabu Construction -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://www.walabuconstruction.com', 600) ?>" 
                             alt="Walabu Construction Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://www.walabuconstruction.com" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-hard-hat mr-1"></i> Construction
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">Walabu Construction S.C.</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Grade I General Contractor delivering sustainable infrastructure across Ethiopia.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Corporate Portfolio</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Project Gallery</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Career Portal</span>
                        </div>
                        <a href="https://www.walabuconstruction.com" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- Jabaa Electronics -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://test.jabaaelectronics.com', 600) ?>" 
                             alt="Jabaa Electronics Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://test.jabaaelectronics.com" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-microchip mr-1"></i> E‑commerce
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">Jabaa Electronics</h3>
                            <span class="text-xs text-yellow-400">● Testing</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Premier electronics retailer in Addis Ababa offering original products with warranty.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">WooCommerce</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Product Filter</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Inventory Mgmt</span>
                        </div>
                        <a href="https://test.jabaaelectronics.com" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- IJA Developers -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://ijadevelopers.com/', 600) ?>" 
                             alt="IJA Developers Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://ijadevelopers.com/" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-hotel mr-1"></i> Hospitality & Real Estate
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">IJA Developer S.C.</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">State-owned enterprise managing premium eco‑destinations (Wanchi, Langano, Wabe Shabale, Boku).</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Multi‑site</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Booking Portal</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Destination Showcase</span>
                        </div>
                        <a href="https://ijadevelopers.com/" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- Oromia Communication Bureau (OCG) -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://ocg.gov.et/', 600) ?>" 
                             alt="OCG Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://ocg.gov.et/" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-building mr-1"></i> Government & Corporate
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">Oro‑Construction Group (OCG)</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Leading construction and development company delivering value‑driven projects across Africa.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Corporate Identity</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Subsidiary Showcase</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Project Portfolio</span>
                        </div>
                        <a href="https://ocg.gov.et/" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- Wabe Shabale Resort -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://wabeshabale.ijadevelopers.com/', 600) ?>" 
                             alt="Wabe Shabale Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://wabeshabale.ijadevelopers.com/" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-umbrella-beach mr-1"></i> Hospitality
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">IJA Wabe Shabale Resort</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Affordable lakeside getaway on Lake Langano with eco safari tents and conference facilities.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Booking Integration</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Room Showcase</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Activity Calendar</span>
                        </div>
                        <a href="https://wabeshabale.ijadevelopers.com/" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- Wanchi Dandi Eco-Tourism -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://wanchi-dandi.com/', 600) ?>" 
                             alt="Wanchi Dandi Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://wanchi-dandi.com/" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-leaf mr-1"></i> Eco‑Tourism
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">Wanchi Dandi Eco‑Tourism</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">UNWTO Best Tourism Village 2021 — volcanic crater lakes, hot springs, and hiking trails.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Eco‑Tourism</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Activity Booking</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Multilingual</span>
                        </div>
                        <a href="https://wanchi-dandi.com/" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- IJA Langano Booking -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://booking.ijadevelopers.com/', 600) ?>" 
                             alt="IJA Langano Booking Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://booking.ijadevelopers.com/" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-calendar-check mr-1"></i> Booking Platform
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">IJA Langano Booking</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Central booking portal for IJA's eco‑destinations with real‑time availability.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Booking Engine</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Payment Gateway</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Multi‑property</span>
                        </div>
                        <a href="https://booking.ijadevelopers.com/" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>

                <!-- NEW: Finance Report -->
                <div class="glass-card group hover:shadow-xl transition-all duration-300">
                    <div class="relative overflow-hidden rounded-t-2xl h-52 bg-gray-800">
                        <img src="<?= get_screenshot_url('https://financereport.ijadevelopers.com', 600) ?>" 
                             alt="Finance Report Preview" 
                             class="w-full h-full object-cover object-top transition-transform group-hover:scale-105"
                             loading="lazy">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <a href="https://financereport.ijadevelopers.com" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Preview
                            </a>
                        </div>
                        <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs text-white">
                            <i class="fas fa-chart-pie mr-1"></i> Financial Reporting
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold">Finance Report Portal</h3>
                            <span class="text-xs text-green-400">● Live</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Interactive financial dashboard and reporting platform for institutional investors and stakeholders.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Data Visualisation</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Charts.js</span>
                            <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Exportable Reports</span>
                        </div>
                        <a href="https://financereport.ijadevelopers.com" target="_blank" class="text-purple-400 hover:text-purple-300 text-sm inline-flex items-center gap-1">Visit Website <i class="fas fa-arrow-right text-xs"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-20 text-center">
            <div class="glass-card p-10 max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold mb-4">Ready to Build Your Online Presence?</h3>
                <p class="text-gray-300 mb-6">From corporate portals to e‑commerce platforms, I deliver custom websites that drive results.</p>
                <a href="contact.php" class="btn-primary inline-block px-8 py-3 rounded-full font-semibold">
                    Start Your Project <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
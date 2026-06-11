<?php
$pageTitle = 'Mobile App Development – Galana Garoma';
$pageDesc = 'Cross‑platform Flutter apps, Firebase backends, and seamless API integrations.';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 px-4 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-orange-900/20 via-transparent to-amber-900/20"></div>
    <div class="container mx-auto relative">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <div class="inline-block px-4 py-1 rounded-full bg-orange-500/20 text-orange-300 text-sm mb-6 border border-orange-500/30">
                <i class="fab fa-flutter mr-2"></i> Cross‑Platform Expert
            </div>
            <h1 class="text-5xl font-bold mb-4 animated-gradient-text">Mobile App Development</h1>
            <p class="text-gray-300 text-xl">Building fast, beautiful, and reliable cross‑platform experiences with Flutter & Node.js.</p>
        </div>
    </div>
</section>

<!-- Core Competencies + Tech Stack -->
<section class="py-12 px-4">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Left: Flutter Expertise -->
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-6 flex items-center"><i class="fab fa-flutter text-blue-400 mr-3"></i> Flutter Mastery</h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">Cross‑Platform (iOS & Android)</strong><br>Single codebase, native performance.</div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">State Management</strong><br>Riverpod, Provider, BLoC – clean and scalable architecture.</div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">Backend Integration</strong><br>REST APIs, Firebase, WebSockets, Node.js custom backends.</div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">UI/UX Focus</strong><br>Custom animations, responsive layouts, pixel‑perfect designs.</div>
                    </div>
                </div>
            </div>

            <!-- Right: Tech Stack -->
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-6 flex items-center"><i class="fas fa-layer-group text-blue-400 mr-3"></i> Tech Stack</h2>
                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="px-4 py-2 bg-orange-500/20 rounded-full text-sm">Flutter 3.x</span>
                    <span class="px-4 py-2 bg-orange-500/20 rounded-full text-sm">Dart</span>
                    <span class="px-4 py-2 bg-orange-500/20 rounded-full text-sm">Firebase</span>
                    <span class="px-4 py-2 bg-orange-500/20 rounded-full text-sm">Node.js</span>
                    <span class="px-4 py-2 bg-orange-500/20 rounded-full text-sm">MongoDB</span>
                    <span class="px-4 py-2 bg-orange-500/20 rounded-full text-sm">REST APIs</span>
                    <span class="px-4 py-2 bg-orange-500/20 rounded-full text-sm">Riverpod</span>
                </div>
                <div class="bg-black/30 p-4 rounded-lg">
                    <p class="text-sm text-gray-300"><i class="fab fa-github mr-2 text-orange-400"></i> 3+ Flutter projects on GitHub | 2+ years hands‑on experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GitHub Showcase – Mobile App Projects -->
<section class="py-16 px-4">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-orange-500/20 px-4 py-2 rounded-full border border-orange-500/30 mb-4">
                <i class="fab fa-github text-orange-300"></i>
                <span class="text-orange-300 text-sm font-medium">Open Source Work</span>
            </div>
            <h2 class="text-4xl font-bold mb-4">Flutter Projects on GitHub</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Live repositories, e‑commerce demos, and real‑world mobile apps.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1: Food Delivery App -->
            <div class="glass-card group transition-all duration-300 hover:scale-[1.02]">
                <div class="relative overflow-hidden rounded-t-2xl h-48 bg-gradient-to-br from-rose-900 to-pink-900">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <a href="https://github.com/Galanag/ecommerce_food_delivery_app" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                            <i class="fab fa-github mr-2"></i> View on GitHub
                        </a>
                    </div>
                    <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-xs">⭐ 2</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Food Delivery App</h3>
                    <p class="text-gray-400 text-sm mb-3">Flutter + Firebase – real‑time order tracking, cart management, and push notifications.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Flutter</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Firebase</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Kotlin</span>
                    </div>
                    <div class="bg-pink-500/10 p-3 rounded-lg text-sm text-gray-300 border-l-2 border-pink-400">
                        <i class="fas fa-utensils mr-2"></i> Latest commit: Firebase integration (Apr 2026).
                    </div>
                </div>
            </div>

            <!-- Project 2: E‑commerce App (Riverpod) -->
            <div class="glass-card group transition-all duration-300 hover:scale-[1.02]">
                <div class="relative overflow-hidden rounded-t-2xl h-48 bg-gradient-to-br from-indigo-900 to-blue-900">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <a href="https://github.com/Galanag/Ecommerce-app" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                            <i class="fab fa-github mr-2"></i> View on GitHub
                        </a>
                    </div>
                    <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-xs">⭐ 1</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">E‑commerce App</h3>
                    <p class="text-gray-400 text-sm mb-3">Flutter, Riverpod, REST API – full cart feature, product listing, and checkout flow.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Flutter</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Riverpod</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Dart</span>
                    </div>
                    <div class="bg-blue-500/10 p-3 rounded-lg text-sm text-gray-300 border-l-2 border-blue-400">
                        <i class="fas fa-shopping-cart mr-2"></i> Class project – SkillBridge Institute.
                    </div>
                </div>
            </div>

            <!-- Project 3: AI Chatbot (Web/App ready) -->
            <div class="glass-card group transition-all duration-300 hover:scale-[1.02]">
                <div class="relative overflow-hidden rounded-t-2xl h-48 bg-gradient-to-br from-cyan-900 to-teal-900">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <a href="https://github.com/Galanag/chatbot_AI" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                            <i class="fab fa-github mr-2"></i> View on GitHub
                        </a>
                    </div>
                    <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-xs">⭐ 1</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">AI Chatbot</h3>
                    <p class="text-gray-400 text-sm mb-3">PHP‑based chatbot that scrapes website content (75%) + API (25%) for real‑time, trusted answers.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">PHP</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">API Integration</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">24/7 Support</span>
                    </div>
                    <div class="bg-cyan-500/10 p-3 rounded-lg text-sm text-gray-300 border-l-2 border-cyan-400">
                        <i class="fas fa-robot mr-2"></i> Supports audio, images, and automatic message reading.
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs: Code Preview + Live Demo -->
        <div class="mt-16 glass-card p-6" x-data="{ activeTab: 'code' }">
            <div class="flex border-b border-white/10 mb-6">
                <button @click="activeTab = 'code'" :class="{'border-orange-400 text-orange-400': activeTab === 'code'}" class="px-6 py-3 font-medium transition border-b-2 border-transparent hover:text-orange-400">Code Preview</button>
                <button @click="activeTab = 'demo'" :class="{'border-orange-400 text-orange-400': activeTab === 'demo'}" class="px-6 py-3 font-medium transition border-b-2 border-transparent hover:text-orange-400">Live Features</button>
            </div>
            <div x-show="activeTab === 'code'">
                <pre class="bg-black/50 p-6 rounded-lg overflow-x-auto text-sm text-green-300"><code>// cart_provider.dart (Riverpod)
class CartNotifier extends StateNotifier&lt;List&lt;CartItem&gt;&gt; {
  CartNotifier() : super([]);

  void addItem(Product product) {
    final existingIndex = state.indexWhere((item) => item.product.id == product.id);
    if (existingIndex != -1) {
      state = [
        for (var i = 0; i &lt; state.length; i++)
          if (i == existingIndex)
            state[i].copyWith(quantity: state[i].quantity + 1)
          else
            state[i]
      ];
    } else {
      state = [...state, CartItem(product: product, quantity: 1)];
    }
  }

  void removeItem(int id) {
    state = state.where((item) => item.product.id != id).toList();
  }
}

final cartProvider = StateNotifierProvider&lt;CartNotifier, List&lt;CartItem&gt;&gt;((ref) {
  return CartNotifier();
});</code></pre>
            </div>
            <div x-show="activeTab === 'demo'">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-white/5 p-4 rounded-lg">
                        <i class="fas fa-credit-card text-orange-400 text-xl mb-2 block"></i>
                        <h4 class="font-semibold">Payment Integration</h4>
                        <p class="text-sm text-gray-400">Stripe, PayPal, Telebir – ready‑to‑use checkout flows.</p>
                    </div>
                    <div class="bg-white/5 p-4 rounded-lg">
                        <i class="fas fa-chart-line text-orange-400 text-xl mb-2 block"></i>
                        <h4 class="font-semibold">Real‑Time Analytics</h4>
                        <p class="text-sm text-gray-400">Firebase events + custom dashboards for user insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Me / Stats -->
<section class="py-16 bg-black/30">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-6 text-center">
            <div><div class="text-4xl font-bold text-orange-400">2+</div><div class="text-gray-400">Years Flutter Experience</div></div>
            <div><div class="text-4xl font-bold text-orange-400">3+</div><div class="text-gray-400">Live Apps on GitHub</div></div>
            <div><div class="text-4xl font-bold text-orange-400">100%</div><div class="text-gray-400">Cross‑Platform Code Reuse</div></div>
            <div><div class="text-4xl font-bold text-orange-400">24/7</div><div class="text-gray-400">AI‑Powered Support Ready</div></div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 text-center px-4">
    <div class="glass-card p-10 max-w-3xl mx-auto">
        <h3 class="text-2xl font-bold mb-4">Turn Your Idea Into a Mobile App</h3>
        <p class="text-gray-300 mb-6">From MVP to full production – let’s build an app your users will love.</p>
        <a href="contact.php" class="btn-primary inline-block px-8 py-3 rounded-full font-semibold">Start Your Project <i class="fas fa-arrow-right ml-2"></i></a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
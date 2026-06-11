<?php
$pageTitle = 'ERP | Odoo – Galana Garoma';
$pageDesc = 'Expert Odoo development, custom modules, OWL components, and enterprise‑grade ERP solutions.';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 px-4 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-purple-900/20 via-transparent to-pink-900/20"></div>
    <div class="container mx-auto relative">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <div class="inline-block px-4 py-1 rounded-full bg-purple-500/20 text-purple-300 text-sm mb-6 border border-purple-500/30">
                <i class="fab fa-odnoklassniki mr-2"></i> Odoo Technical Partner
            </div>
            <h1 class="text-5xl font-bold mb-4 animated-gradient-text">ERP | Odoo</h1>
            <p class="text-gray-300 text-xl">Engineering high‑performance, scalable ERP architectures that drive business growth.</p>
        </div>
    </div>
</section>

<!-- Core Competencies + Tech Stack -->
<section class="py-12 px-4">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Left: Technical Prowess -->
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-6 flex items-center"><i class="fas fa-cogs text-purple-400 mr-3"></i> Technical Prowess</h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">Full‑Cycle Implementation</strong><br>From requirement analysis to Odoo.sh or on‑premise deployment.</div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">OWL Framework Mastery</strong><br>Building reactive frontend components for POS, dashboards, and custom views.</div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">Version Migrations (v8 → v19)</strong><br>Safe, data‑preserving upgrades with minimal downtime.</div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-green-400 mt-1"></i>
                        <div><strong class="font-semibold">Custom Module Development</strong><br>Tailored business logic, reports, and third‑party integrations.</div>
                    </div>
                </div>
            </div>

            <!-- Right: Tech Stack -->
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-6 flex items-center"><i class="fas fa-layer-group text-purple-400 mr-3"></i> Tech Stack</h2>
                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="px-4 py-2 bg-purple-500/20 rounded-full text-sm">Odoo 16 / 17 / 18 / 19</span>
                    <span class="px-4 py-2 bg-purple-500/20 rounded-full text-sm">Python 3.10+</span>
                    <span class="px-4 py-2 bg-purple-500/20 rounded-full text-sm">PostgreSQL</span>
                    <span class="px-4 py-2 bg-purple-500/20 rounded-full text-sm">OWL / JavaScript</span>
                    <span class="px-4 py-2 bg-purple-500/20 rounded-full text-sm">XML / QWeb</span>
                    <span class="px-4 py-2 bg-purple-500/20 rounded-full text-sm">REST APIs</span>
                    <span class="px-4 py-2 bg-purple-500/20 rounded-full text-sm">Docker / Odoo.sh</span>
                </div>
                <div class="bg-black/30 p-4 rounded-lg">
                    <p class="text-sm text-gray-300"><i class="fas fa-database mr-2 text-purple-400"></i> 12+ custom modules delivered | 100% client satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GitHub Showcase – Odoo Projects -->
<section class="py-16 px-4">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-purple-500/20 px-4 py-2 rounded-full border border-purple-500/30 mb-4">
                <i class="fab fa-github text-purple-300"></i>
                <span class="text-purple-300 text-sm font-medium">Open Source Work</span>
            </div>
            <h2 class="text-4xl font-bold mb-4">Odoo Projects on GitHub</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Live repositories, real‑world modules, and ongoing contributions.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1: Education Management System -->
            <div class="glass-card group transition-all duration-300 hover:scale-[1.02]">
                <div class="relative overflow-hidden rounded-t-2xl h-48 bg-gradient-to-br from-blue-900 to-purple-900">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <a href="https://github.com/Galanag/education_management_system" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                            <i class="fab fa-github mr-2"></i> View on GitHub
                        </a>
                    </div>
                    <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-xs">⭐ 0</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Education Management ERP</h3>
                    <p class="text-gray-400 text-sm mb-3">Complete Odoo 19 solution – multi‑branch, attendance with biometric API, fee invoicing, parent portal.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Odoo 19</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Python</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">REST API</span>
                    </div>
                    <div class="bg-purple-500/10 p-3 rounded-lg text-sm text-gray-300 border-l-2 border-purple-400">
                        <i class="fas fa-code mr-2"></i> Features: Multi‑branch accounting, timetable scheduling, absence webhooks.
                    </div>
                </div>
            </div>

            <!-- Project 2: HMIS – Beltech Solutions -->
            <div class="glass-card group transition-all duration-300 hover:scale-[1.02]">
                <div class="relative overflow-hidden rounded-t-2xl h-48 bg-gradient-to-br from-emerald-900 to-teal-900">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <a href="https://github.com/Galanag/hmis-Beltechsolns" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                            <i class="fab fa-github mr-2"></i> View on GitHub
                        </a>
                    </div>
                    <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-xs">⭐ 0</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">HMIS – Hospital Management</h3>
                    <p class="text-gray-400 text-sm mb-3">Core `hm_patient` module – patient demographics, medical history, admission tracking, integrated with pharmacy, lab, billing.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Odoo 18</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Python</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Healthcare</span>
                    </div>
                    <div class="bg-emerald-500/10 p-3 rounded-lg text-sm text-gray-300 border-l-2 border-emerald-400">
                        <i class="fas fa-stethoscope mr-2"></i> Central repository for all patient interactions.
                    </div>
                </div>
            </div>

            <!-- Project 3: Odoo 18 Practice Projects -->
            <div class="glass-card group transition-all duration-300 hover:scale-[1.02]">
                <div class="relative overflow-hidden rounded-t-2xl h-48 bg-gradient-to-br from-amber-900 to-orange-900">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <a href="https://github.com/Galanag/odoo_18_practice_projects" target="_blank" class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-white hover:bg-white/30 transition">
                            <i class="fab fa-github mr-2"></i> View on GitHub
                        </a>
                    </div>
                    <div class="absolute top-3 right-3 bg-black/60 px-2 py-1 rounded text-xs">⭐ 1</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Odoo 18 Practice Lab</h3>
                    <p class="text-gray-400 text-sm mb-3">Sandbox for exploring Odoo development – custom modules, XML/OWL experiments, PostgreSQL workflows.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Odoo 18</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">Python</span>
                        <span class="text-xs bg-white/10 px-2 py-1 rounded-full">OWL</span>
                    </div>
                    <div class="bg-amber-500/10 p-3 rounded-lg text-sm text-gray-300 border-l-2 border-amber-400">
                        <i class="fas fa-flask mr-2"></i> 100% Python – hands‑on with real‑world scenarios.
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs: Code Preview + Live Demo -->
        <div class="mt-16 glass-card p-6" x-data="{ activeTab: 'code' }">
            <div class="flex border-b border-white/10 mb-6">
                <button @click="activeTab = 'code'" :class="{'border-purple-400 text-purple-400': activeTab === 'code'}" class="px-6 py-3 font-medium transition border-b-2 border-transparent hover:text-purple-400">Code Preview</button>
                <button @click="activeTab = 'demo'" :class="{'border-purple-400 text-purple-400': activeTab === 'demo'}" class="px-6 py-3 font-medium transition border-b-2 border-transparent hover:text-purple-400">Live Module Features</button>
            </div>
            <div x-show="activeTab === 'code'">
                <pre class="bg-black/50 p-6 rounded-lg overflow-x-auto text-sm text-green-300"><code># education_core/models/student.py
class EducationStudent(models.Model):
    _name = 'education.student'
    _description = 'Student Record'
    _inherit = ['mail.thread', 'mail.activity.mixin']

    name = fields.Char('Full Name', required=True, tracking=True)
    student_id = fields.Char('ID Number', required=True, copy=False, readonly=True)
    birth_date = fields.Date('Date of Birth')
    parent_id = fields.Many2one('res.partner', 'Parent/Guardian')
    enrollment_ids = fields.One2many('education.enrollment', 'student_id')
    attendance_ids = fields.One2many('education.attendance', 'student_id')
    state = fields.Selection([
        ('draft', 'Draft'),
        ('enrolled', 'Enrolled'),
        ('graduated', 'Graduated'),
        ('suspended', 'Suspended')
    ], default='draft', tracking=True)</code></pre>
            </div>
            <div x-show="activeTab === 'demo'">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-white/5 p-4 rounded-lg">
                        <i class="fas fa-chalkboard-user text-purple-400 text-xl mb-2 block"></i>
                        <h4 class="font-semibold">Biometric Attendance API</h4>
                        <p class="text-sm text-gray-400">REST endpoint for RFID hardware – real‑time check‑in/out.</p>
                    </div>
                    <div class="bg-white/5 p-4 rounded-lg">
                        <i class="fas fa-file-invoice-dollar text-purple-400 text-xl mb-2 block"></i>
                        <h4 class="font-semibold">Batch Invoicing</h4>
                        <p class="text-sm text-gray-400">Odoo Accounting integration – automated fee billing.</p>
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
            <div><div class="text-4xl font-bold text-purple-400">5+</div><div class="text-gray-400">Years Odoo Experience</div></div>
            <div><div class="text-4xl font-bold text-purple-400">12+</div><div class="text-gray-400">Custom Modules</div></div>
            <div><div class="text-4xl font-bold text-purple-400">4+</div><div class="text-gray-400">Odoo Versions Shipped</div></div>
            <div><div class="text-4xl font-bold text-purple-400">100%</div><div class="text-gray-400">Client Retention</div></div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 text-center px-4">
    <div class="glass-card p-10 max-w-3xl mx-auto">
        <h3 class="text-2xl font-bold mb-4">Ready to Optimise Your ERP?</h3>
        <p class="text-gray-300 mb-6">From migration to custom modules – let’s build a system that works for you.</p>
        <a href="contact.php" class="btn-primary inline-block px-8 py-3 rounded-full font-semibold">Let's Talk <i class="fas fa-arrow-right ml-2"></i></a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
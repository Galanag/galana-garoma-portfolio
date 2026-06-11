<?php
$pageTitle = 'Contact – Galana Garoma';
$pageDesc = 'Get in touch for project inquiries, consulting, or just to say hello.';
include 'config/database.php';
include 'includes/functions.php';

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // 1. Store in SQLite
        $dbSaved = send_contact_message($name, $email, $message, $db);
        
        // 2. Send email with spam-friendly headers
        $to = 'garomagalana3@gmail.com';
        $subject = "New Contact Message from $name";
        $emailBody = "Name: $name\nEmail: $email\n\nMessage:\n$message\n\nSubmitted: " . date('Y-m-d H:i:s');
        
        $headers = "From: Galana Garoma <garomagalana3@gmail.com>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Return-Path: garomagalana3@gmail.com\r\n";
        $headers .= "Message-ID: <" . time() . md5($email) . "@galana-garoma.ijadevelopers.com>\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        $emailSent = mail($to, $subject, $emailBody, $headers, "-f garomagalana3@gmail.com");
        
        if ($dbSaved && $emailSent) {
            $success = true;
        } elseif ($dbSaved && !$emailSent) {
            $error = 'Your message was saved, but the email could not be sent. I will still see it in the database.';
        } else {
            $error = 'Database error. Please try again later.';
        }
    }
}

include 'includes/header.php';
?>
<section class="pt-32 pb-20 px-4">
    <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4 animated-gradient-text">Let's Work Together</h1>
            <p class="text-gray-300 text-xl">Have a project in mind? I'm currently accepting new projects and consulting engagements.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-6">Reach Out Directly</h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <i class="fas fa-envelope text-purple-400 text-xl"></i>
                        <div>
                            <p class="font-semibold">Email</p>
                            <a href="mailto:galanagaroma@outlook.com" class="text-gray-300 hover:text-purple-400">galanagaroma@outlook.com</a><br>
                            <a href="mailto:garomagalana3@gmail.com" class="text-gray-300 hover:text-purple-400">garomagalana3@gmail.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fas fa-phone-alt text-purple-400 text-xl"></i>
                        <div>
                            <p class="font-semibold">Phone / WhatsApp</p>
                            <a href="tel:+251999726524" class="text-gray-300 hover:text-purple-400">+251 999 726 524</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="fab fa-github text-purple-400 text-xl"></i>
                        <div>
                            <p class="font-semibold">GitHub</p>
                            <a href="https://github.com/Galanag" class="text-gray-300 hover:text-purple-400">github.com/GalanaG</a>
                        </div>
                    </div>
                    
                     <div class="flex items-center gap-4">
                        <i class="fab fa-linkedin text-purple-400 text-xl"></i>
                        <div>
                            <p class="font-semibold">LinkedIn</p>
                            <a href="https://et.linkedin.com/in/gelana-garoma" class="text-gray-300 hover:text-purple-400">Linkedin.com/in/gelana-garoma</a>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <i class="fab fa-telegram text-purple-400 text-xl"></i>
                        <div>
                            <p class="font-semibold">Telegram</p>
                            <a href="https://t.me/galanagaroma" class="text-gray-300 hover:text-purple-400">t.me/galanagaroma</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <!-- Contact Form -->
            <div class="glass-card p-8">
                <h2 class="text-2xl font-bold mb-6">Send a Message</h2>
                <?php if ($success): ?>
                    <div class="bg-green-500/20 border border-green-500 rounded-lg p-4 mb-6">
                        <p class="text-green-300">Thank you! Your message has been sent. I'll get back to you shortly.</p>
                    </div>
                <?php elseif ($error): ?>
                    <div class="bg-red-500/20 border border-red-500 rounded-lg p-4 mb-6">
                        <p class="text-red-300"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                <?php endif; ?>
                <form method="POST">
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">Your Name</label>
                        <input type="text" name="name" required class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-400">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">Email Address</label>
                        <input type="email" name="email" required class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-400">
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-2">Message</label>
                        <textarea name="message" rows="5" required class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-400"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-full py-3 rounded-lg font-semibold">Send Message <i class="fas fa-paper-plane ml-2"></i></button>
                </form>
                <p class="text-gray-400 text-sm mt-4 text-center">
                    Your message is stored securely and emailed directly to me.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
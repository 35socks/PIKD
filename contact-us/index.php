<!DOCTYPE html>
<html lang="en" class="bg-black">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIKD | Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'be-vietnam': ['"Be Vietnam Pro"', 'Arial', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-black text-white font-be-vietnam">
    <!-- Header -->
    <header class="bg-black text-white py-8 sticky top-0 z-50 border-b border-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="text-4xl font-bold">PIKD</div>
                <nav class="space-x-6">
                    <a href="/" class="hover:text-gray-300 transition duration-300">Home</a>
                    <a href="/artists" class="hover:text-gray-300 transition duration-300">Artists</a>
                    <a href="/about-us" class="hover:text-gray-300 transition duration-300">About Us</a>
                    <a href="/contact-us" class="hover:text-gray-300 transition duration-300">Contact</a>
                    <a href="https://portal.pikd.nl" class="bg-white text-black px-4 py-2 rounded hover:bg-gray-200 transition duration-300">Login</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contact Information -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Contact Information</h2>
            <p>A&R: <a href="mailto:ar@pikd.nl" class="hover:text-gray-300">ar@pikd.nl</a></p>
            <p>Demos: <a href="mailto:demos@pikd.nl" class="hover:text-gray-300">demos@pikd.nl</a></p>
            <p>Product Support: <a href="mailto:support@pikd.nl" class="hover:text-gray-300">support@pikd.nl</a></p>
            <p>General Inquiries: <a href="mailto:contact@pikd.nl" class="hover:text-gray-300">contact@pikd.nl</a></p>
            <p>Fan Mail: <a href="mailto:fanmail@pikd.nl" class="hover:text-gray-300">fanmail@pikd.nl</a></p>
            <p>Legal: <a href="mailto:legal@pikd.nl" class="hover:text-gray-300">legal@pikd.nl</a></p>
            <p>Text Us: <a href="tel:+12094109320" class="hover:text-gray-300">+1 209-410-9320</a></p>
            <p>Fan Mail Address: 78 Kings Park Drive, Ayr, Scotland, KA8 9TF</p>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4">
            <div class="max-w-lg mx-auto bg-gray-900 p-8 rounded-lg shadow-lg">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    function capitalize($string) {
                        return ucwords(strtolower($string));
                    }

                    $name = capitalize($_POST['name']);
                    $email = strtolower($_POST['email']);
                    $subject = ucfirst($_POST['subject']);
                    $body = $_POST['body'];

                    $data = [
                        'name' => $name,
                        'email' => $email,
                        'subject' => $subject,
                        'body' => $body
                    ];

                    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
                    $randomFileName = bin2hex(random_bytes(8)) . '.json';
                    file_put_contents('../v/staff/app/contact/' . $randomFileName, $jsonData);

                    echo '<div class="submission-message text-center"><h1 class="text-3xl font-bold">Message Sent</h1><p>We will get back to you soon!</p></div>';
                } else {
                ?>
                <h1 class="text-3xl font-bold mb-6 text-center">Contact Us</h1>
                <form action="" method="post">
                    <div class="mb-6">
                        <label for="name" class="block text-lg font-semibold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full p-3 bg-gray-800 text-white rounded" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 bg-gray-800 text-white rounded" required>
                    </div>
                    <div class="mb-6">
                        <label for="subject" class="block text-lg font-semibold mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full p-3 bg-gray-800 text-white rounded" required>
                    </div>
                    <div class="mb-6">
                        <label for="body" class="block text-lg font-semibold mb-2">Message</label>
                        <textarea id="body" name="body" rows="5" class="w-full p-3 bg-gray-800 text-white rounded" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-white text-black py-3 rounded hover:bg-gray-300 transition duration-300">Submit</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-12 border-t border-gray-800">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">PIKD</h3>
                    <p class="text-sm">Making The Industry Fair</p>
                    <p class="text-sm mt-2">Distributed by AWAL</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-gray-300 transition duration-300">Home</a></li>
                        <li><a href="/artists" class="hover:text-gray-300 transition duration-300">Artists</a></li>
                        <li><a href="/about-us" class="hover:text-gray-300 transition duration-300">About Us</a></li>
                        <li><a href="/contact-us" class="hover:text-gray-300 transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Random</h4>
                    <ul class="space-y-2">
                        <li><a href="/ai" class="hover:text-gray-300 transition duration-300">Stance on GenAI in Music</a></li>
                        <li><a href="https://pikd-promo.com" class="hover:text-gray-300 transition duration-300">Random Release!</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/profile.php?id=61566268285468" class="text-2xl hover:text-gray-300 transition duration-300"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/pikd.nl" class="text-2xl hover:text-gray-300 transition duration-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p>&copy; 2024 PIKD. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

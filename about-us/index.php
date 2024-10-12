<!DOCTYPE html>
<html lang="en" class="bg-black">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIKD | About Us</title>
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

    <main class="py-16">
        <div class="container mx-auto px-4">
            <section class="mb-16">
                <h1 class="text-4xl font-bold mb-8 text-center">About Us</h1>
                <p class="text-lg mb-8 max-w-3xl mx-auto text-center">
                    Welcome to PIKD! We are a dynamic music label dedicated to discovering and promoting the best new talent in the industry. Our mission is to provide a platform for innovative artists to reach a wider audience and make their mark on the music world.
                </p>
            </section>

            <section class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Our Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold mb-4">Cameron Bell - CEO</h3>
                        <p class="mb-4">Cameron, being an artist himself, would like to make the industry more fair for smaller artists. He founded PIKD in 2024.</p>
                        <div class="flex space-x-4">
                            <a href="https://uk.linkedin.com/in/cameron-bell-b439b92a2?trk=public_profile_samename-profile" target="_blank" class="text-2xl hover:text-gray-300 transition duration-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold mb-4">Katie Fraser - Coding Team</h3>
                        <p class="mb-4">Katie is one of our valued coders.</p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-3xl font-bold mb-8 text-center">Contact Us</h2>
                <p class="text-lg text-center">
                    If you have any questions or would like to get in touch, please visit our 
                    <a href="/contact" class="text-white underline hover:text-gray-300 transition duration-300">contact page</a>.
                </p>
            </section>
        </div>
    </main>

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

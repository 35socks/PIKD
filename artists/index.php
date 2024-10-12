<!DOCTYPE html>
<html lang="en" class="bg-black">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIKD | Artists</title>
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

    <main>
        <section class="py-16">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold mb-12 text-center">Our Artists</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="artist-card relative overflow-hidden rounded-lg shadow-lg cursor-pointer" onclick="openModal('jayden-emmett')">
                        <img src="https://public.pikdcdn.com/img/artists/JaydenEmmett-1.png" alt="Jayden Emmett" class="w-full h-72 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end transition-opacity duration-300 opacity-0 hover:opacity-100">
                            <div class="p-4 w-full">
                                <h2 class="text-xl font-bold">Jayden Emmett</h2>
                            </div>
                        </div>
                    </div>
                    <div class="artist-card relative overflow-hidden rounded-lg shadow-lg cursor-pointer" onclick="openModal('gabriel-helewa')">
                        <img src="https://public.pikdcdn.com/img/artists/GabrielHelewa-1.png" alt="Gabriel Helewa" class="w-full h-72 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end transition-opacity duration-300 opacity-0 hover:opacity-100">
                            <div class="p-4 w-full">
                                <h2 class="text-xl font-bold">Gabriel Helewa</h2>
                            </div>
                        </div>
                    </div>
                    <div class="artist-card relative overflow-hidden rounded-lg shadow-lg cursor-pointer" onclick="openModal('sky-dreamers')">
                        <img src="https://public.pikdcdn.com/img/artists/SkyDreamers-1.jpg" alt="Sky Dreamers" class="w-full h-72 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end transition-opacity duration-300 opacity-0 hover:opacity-100">
                            <div class="p-4 w-full">
                                <h2 class="text-xl font-bold">Sky Dreamers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="artist-card relative overflow-hidden rounded-lg shadow-lg cursor-pointer" onclick="openModal('rayen-noth')">
                        <img src="https://public.pikdcdn.com/img/artists/RayenNoth-3.jpg" alt="Rayen Noth" class="w-full h-72 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end transition-opacity duration-300 opacity-0 hover:opacity-100">
                            <div class="p-4 w-full">
                                <h2 class="text-xl font-bold">Rayen Noth</h2>
                            </div>
                        </div>
                    </div>
                    <div class="artist-card relative overflow-hidden rounded-lg shadow-lg cursor-pointer" onclick="openModal('counterfeit-ghost')">
                        <img src="https://public.pikdcdn.com/img/artists/CounterfeitGhost-1.jpg" alt="Counterfeit Ghost" class="w-full h-72 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end transition-opacity duration-300 opacity-0 hover:opacity-100">
                            <div class="p-4 w-full">
                                <h2 class="text-xl font-bold">Counterfeit Ghost</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal structure -->
    <div id="artist-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
        <div class="bg-gray-900 p-8 rounded-lg max-w-2xl w-full mx-4">
            <div class="flex justify-between items-start mb-4">
                <h2 id="modal-artist-name" class="text-2xl font-bold"></h2>
                <button onclick="closeModal()" class="text-gray-400 hover:text-white">&times;</button>
            </div>
            <p id="modal-artist-bio" class="mb-4"></p>
            <div id="modal-social-icons" class="flex space-x-4"></div>
        </div>
    </div>

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

    <script>
        const artistData = {
            'jayden-emmett': {
                name: 'Jayden Emmett',
                bio: 'Jayden Emmett is a 16 Year Old artist from Scotland.',
                social: {
                    spotify: '',
                    instagram: 'https://www.instagram.com/jaydenemmettmusic_/'
                }
            },
            'gabriel-helewa': {
                name: 'Gabriel Helewa',
                bio: 'Gabriel Joel Helewa is an 18-year-old American music producer, singer, songwriter, and artist residing in Bakersfield, California, United States.',
                social: {
                    spotify: 'https://open.spotify.com/artist/3TqrEKyHwohWtStKHTGi04',
                    instagram: 'https://www.instagram.com/therealgabrielhelewa/'
                }
            },
            'sky-dreamers': {
                name: 'Sky Dreamers',
                bio: 'Sky Dreamers is a music group formed of three members. Jayden Emmett, Gabriel Helewa & Cameron Bell.',
                social: {
                    spotify: '',
                    instagram: 'https://www.instagram.com/gabeandjayden/'
                }
            },
            'erias': {
                name: 'Erias',
                bio: 'Erias is a 16 year old indie rock & shoegaze musician from Manchester, UK.',
                social: {
                    spotify: 'https://open.spotify.com/artist/1xz3YATcJQY8zZznXAw2jW',
                    instagram: 'https://www.instagram.com/erias.online/'
                }
            },
            'rayen-noth': {
                name: 'Rayen Noth',
                bio: 'Rayen Noth is a 14 Year old artist from Prestwick, Scotland.',
                social: {
                    spotify: 'https://open.spotify.com/artist/4K81LSb6T2gcsNPegazPet',
                    instagram: 'https://instagram.com/rnnothh'
                }
            },
            'counterfeit-ghost': {
                name: 'Counterfeit Ghost',
                bio: 'Counterfeit Ghost is a 17 Year old artist from Prestwick, Scotland.',
                social: {
                    spotify: 'https://open.spotify.com/artist/74jIH2l3X4VGzyXoPITCXU',
                    instagram: 'https://instagram.com/counterfeitghost'
                }
            }
        };

        function openModal(artistId) {
            const artist = artistData[artistId];
            document.getElementById('modal-artist-name').textContent = artist.name;
            document.getElementById('modal-artist-bio').textContent = artist.bio;
            
            const socialIcons = document.getElementById('modal-social-icons');
            socialIcons.innerHTML = '';
            if (artist.social.spotify) {
                socialIcons.innerHTML += `<a href="${artist.social.spotify}" target="_blank" class="text-2xl hover:text-gray-300 transition duration-300"><i class="fab fa-spotify"></i></a>`;
            }
            if (artist.social.instagram) {
                socialIcons.innerHTML += `<a href="${artist.social.instagram}" target="_blank" class="text-2xl hover:text-gray-300 transition duration-300"><i class="fab fa-instagram"></i></a>`;
            }
            
            document.getElementById('artist-modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('artist-modal').classList.add('hidden');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == document.getElementById('artist-modal')) {
                closeModal();
            }
        }
    </script>
</body>
</html>

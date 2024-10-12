<!DOCTYPE html>
<html lang="en" class="bg-black">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIKD Application Form</title>
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
            <div class="max-w-2xl mx-auto">
                <h1 class="text-4xl font-bold mb-8 text-center">PIKD Application Form</h1>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Function to capitalize each word in a string
                    function capitalize($string) {
                        return ucwords(strtolower($string));
                    }

                    // Get form data
                    $firstName = capitalize($_POST['first_name']);
                    $lastName = capitalize($_POST['last_name']);
                    $artistName = capitalize($_POST['artist_name']);
                    $email = strtolower($_POST['email']);
                    $continent = capitalize($_POST['continent']);
                    $socialMediaPlatforms = array_map('capitalize', $_POST['social_media_platforms']);
                    $socialMediaLinks = $_POST['social_media_links'];

                    // Create an array to store the application data
                    $data = [
                        'first_name' => $firstName,
                        'last_name' => $lastName,
                        'artist_name' => $artistName,
                        'email' => $email,
                        'continent' => $continent,
                        'social_media' => []
                    ];

                    // Loop through the social media platforms and links and store them in the array
                    for ($i = 0; $i < count($socialMediaPlatforms); $i++) {
                        $data['social_media'][] = [
                            'platform' => $socialMediaPlatforms[$i],
                            'link' => $socialMediaLinks[$i]
                        ];
                    }

                    // Convert the array to a JSON string
                    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

                    // Generate a random file name for the JSON file
                    $randomFileName = bin2hex(random_bytes(8)) . '.json';

                    // Check if the directory exists before saving the file
                    $dir = '../v/staff/app/applications/';
                    if (!is_dir($dir)) {
                        mkdir($dir, 0777, true); // Attempt to create the directory
                    }

                    // Save the JSON file to the applications directory
                    if (file_put_contents($dir . $randomFileName, $jsonData)) {
                        // Display a submission message
                        echo '<div class="submission-message"><h1>Application Submitted</h1><p>Watch your emails in the next few days/weeks!</p></div>';
                    } else {
                        echo '<div class="submission-message"><h1>Submission Failed</h1><p>There was an error saving your application. Please try again later.</p></div>';
                    }
                }
                ?>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="space-y-6">
                    <div>
                        <label for="first-name" class="block text-sm font-medium mb-2">First Name</label>
                        <input type="text" id="first-name" name="first_name" required class="w-full px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-medium mb-2">Last Name</label>
                        <input type="text" id="last-name" name="last_name" required class="w-full px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                    </div>
                    <div>
                        <label for="artist-name" class="block text-sm font-medium mb-2">Artist Name</label>
                        <input type="text" id="artist-name" name="artist_name" required class="w-full px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Social Media Profiles</label>
                        <div id="social-media-container" class="space-y-4">
                            <div class="flex space-x-4">
                                <select name="social_media_platforms[]" required class="w-1/2 px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                                    <option value="YouTube">YouTube</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="TikTok">TikTok</option>
                                    <option value="SoundCloud">SoundCloud</option>
                                    <option value="Spotify">Spotify</option>
                                    <option value="Other">Other</option>
                                </select>
                                <input type="text" name="social_media_links[]" placeholder="Profile URL" required class="w-1/2 px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                            </div>
                        </div>
                        <button type="button" id="add-profile" class="mt-2 text-yellow-200 hover:text-yellow-300 transition duration-300">+ Add Another Profile</button>
                    </div>
                    <div>
                        <label for="continent" class="block text-sm font-medium mb-2">Continent</label>
                        <select id="continent" name="continent" required class="w-full px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                            <option value="Africa">Africa</option>
                            <option value="Asia">Asia</option>
                            <option value="Europe">Europe</option>
                            <option value="North America">North America</option>
                            <option value="South America">South America</option>
                            <option value="Australia">Australia</option>
                            <option value="Antarctica">Antarctica</option>
                        </select>
                    </div>
                    <button type="submit" class="w-full bg-white text-black font-bold py-3 px-4 rounded hover:bg-gray-200 transition duration-300">Submit</button>
                </form>
            </div>
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
        document.getElementById('add-profile').addEventListener('click', function() {
            const container = document.getElementById('social-media-container');
            const newProfileDiv = document.createElement('div');
            newProfileDiv.className = 'flex space-x-4';
            newProfileDiv.innerHTML = `
                <select name="social_media_platforms[]" required class="w-1/2 px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                    <option value="YouTube">YouTube</option>
                    <option value="Instagram">Instagram</option>
                    <option value="TikTok">TikTok</option>
                    <option value="SoundCloud">SoundCloud</option>
                    <option value="Spotify">Spotify</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" name="social_media_links[]" placeholder="Profile URL" required class="w-1/2 px-3 py-2 bg-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-white">
                <button type="button" class="text-red-500 hover:text-red-600 transition duration-300" onclick="this.parentElement.remove()">Remove</button>
            `;
            container.appendChild(newProfileDiv);
        });
    </script>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    
<header class="bg-gray-900 text-white">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Avash Nepal</a>
            <ul class="flex space-x-6">
                <li>
                    <a href="/" class="hover:text-blue-500">Home</a>
                </li>
                <li>
                    <a href="/about" class="hover:text-blue-500">About Us</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-blue-500">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Hero Section -->
    <header class="bg-gray-900 text-white">
        <div class="container mx-auto px-6 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold">About Us</h1>
            <p class="mt-4 text-lg">Learn more about our mission, values, and the team behind the scenes.</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Who We Are</h2>
                <p class="text-lg leading-relaxed text-gray-600">
                    Welcome to my website! We are passionate about creating meaningful solutions that solve real-world problems. Our team is dedicated to delivering exceptional services and building lasting relationships with our clients.
                </p>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                    With years of experience in the industry, we focus on innovation, collaboration, and excellence. Join us on our journey as we continue to grow and make a positive impact.
                </p>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="https://via.placeholder.com/500x300" alt="About Image" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Meet Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 mx-auto rounded-full">
                    <h3 class="text-xl font-bold mt-4">John Doe</h3>
                    <p class="text-gray-600">CEO & Founder</p>
                </div>
                <!-- Team Member 2 -->
                <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 mx-auto rounded-full">
                    <h3 class="text-xl font-bold mt-4">Jane Smith</h3>
                    <p class="text-gray-600">CTO</p>
                </div>
                <!-- Team Member 3 -->
                <div class="bg-gray-50 rounded-lg p-6 shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Team Member" class="w-24 h-24 mx-auto rounded-full">
                    <h3 class="text-xl font-bold mt-4">Emily Johnson</h3>
                    <p class="text-gray-600">Project Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Avash Nepal. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>

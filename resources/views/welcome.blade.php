<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Avash Nepal</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header with Navigation -->
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
                    <a href="/contact" class="hover:text-[#86c5e2]">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-800 text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">Welcome to Avash Nepal</h1>
            <p class="mt-4 text-lg">Discover our innovative solutions.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold mb-4">Home Content</h2>
        <p class="text-lg text-gray-600">
            This is the homepage of Avash Nepal. Explore our services, learn more about us, or reach out through our contact page.
        </p>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Avash Nepal. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Avash Nepal</title>
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
                    <a href="/contact" class="hover:text-blue-500">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contact Us Section -->
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold mb-6 text-center">Contact Us</h2>
        <p class="text-lg text-gray-600 text-center mb-12">
            We'd love to hear from you! Please fill out the form below or reach out directly.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="space-y-6">
                <h3 class="text-2xl font-bold">Get in Touch</h3>
                <p class="text-gray-600">
                    Feel free to contact us using the details below or fill out the form to send us a message.
                </p>
                <p>
                    <strong>Email:</strong> <a href="mailto:info@avashnepal.com" class="text-blue-500">info@avashnepal.com</a>
                </p>
                <p>
                    <strong>Phone:</strong> <a href="tel:+977123456789" class="text-blue-500">+977-123-456-789</a>
                </p>
                <p>
                    <strong>Address:</strong><br>
                    Kathmandu, Nepal
                </p>
            </div>

            <!-- Contact Form -->
            <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-lg space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-bold">Your Name</label>
                    <input type="text" name="name" id="name" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter your name" required>
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-bold">Your Email</label>
                    <input type="email" name="email" id="email" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
                </div>

                <div>
                    <label for="message" class="block text-gray-700 font-bold">Your Message</label>
                    <textarea name="message" id="message" rows="5" class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Enter your message" required></textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600">
                    Send Message
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Avash Nepal. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>

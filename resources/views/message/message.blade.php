<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Message</title>

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


    <section>
        <h2 class="text-3xl font-bold text-center mb-6 mt-2">All messages</h2>

        <table class="min-w-full bg-white border border-gray-300 shadow-xl rounded-xl">
            <thead class="bg-gray-200">

            <tr>
                <th class="px-6 text-center py-3 text-lg text-gray-800">Name</th>
                <th class="px-6 text-center py-3 text-lg text-gray-800">Email</th>
                <th class="px-6 text-center py-3 text-lg text-gray-800">Message</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($messages as $message )
                <tr class="border-b border-gray-200">
                    <td class="px-6 py-4 text-sm text-gray-800"> {{$message->name}}</td>
                    <td class="px-6 py-4 text-sm text-gray-800"> {{$message->email}}</td>
                    <td class="px-6 py-4 text-sm text-gray-800"> {{$message->message}}</td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </section>


    
</body>
</html>
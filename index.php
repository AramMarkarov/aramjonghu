<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tailwind CSS Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

<!-- Header -->
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">Welcome to My Website</h1>
        <nav class="mt-2">
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
                <li><a href="live.php" class="hover:underline">Live Stream</a></li> <!-- Added Link -->
            </ul>
        </nav>
    </div>
</header>


<!-- Main Content -->
<main class="container mx-auto p-4">
    <section class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Hello, World!</h2>
        <p class="mb-4">
            This is a simple webpage using Tailwind CSS. You can modify this template as needed. Tailwind CSS makes it easy to style your webpage with utility classes.
        </p>
        <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Click Me</button>
    </section>
</main>

<!-- Footer -->
<footer class="bg-cyan-800 text-white py-4 mt-4">
    <div class="container mx-auto text-center">
        <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
    </div>
</footer>

</body>

</html>

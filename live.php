<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Stream</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        video {
            width: 80%;
            height: auto;
            border: 1px solid #ddd;
            margin: 20px auto;
            display: block;
        }
    </style>
</head>

<body>
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">Live Stream</h1>
        <nav class="mt-2">
            <ul class="flex justify-center space-x-4">
                <li><a href="index.php" class="hover:underline">Home</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="container mx-auto p-4">
    <h2 class="text-2xl font-semibold mb-4">Live Video Feed</h2>
    <video id="video" autoplay playsinline></video>
</main>

<footer class="bg-cyan-800 text-white py-4 mt-4">
    <div class="container mx-auto text-center">
        <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
    </div>
</footer>

</body>

</html>

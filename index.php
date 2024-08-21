<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tailwind CSS Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

<!-- Header -->
<header class="bg-cyan-800 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">My Personal Webpage</h1>
        <nav class="mt-2">
            <ul class="flex space-x-6">
                <li><a href="index.php" class="hover:underline">Home</a></li>
                <li><a href="gameron.php" class="hover:underline">Gameron</a></li>
                <li><a href="live.php" class="hover:underline">Live Stream</a></li>
                <li><a href="games.php" class="hover:underline">Games</a></li>
                <li><a href="socials.php" class="hover:underline">Socials</a></li>
                
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto p-4 flex-grow" style="width: 80%;">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Grid Items -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 1</h2>
            <p>This is some content for grid item 1.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 2</h2>
            <p>This is some content for grid item 2.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 3</h2>
            <p>This is some content for grid item 3.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 4</h2>
            <p>This is some content for grid item 4.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 5</h2>
            <p>This is some content for grid item 5.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 6</h2>
            <p>This is some content for grid item 6.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 7</h2>
            <p>This is some content for grid item 7.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 8</h2>
            <p>This is some content for grid item 8.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 9</h2>
            <p>This is some content for grid item 9.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 10</h2>
            <p>This is some content for grid item 10.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 11</h2>
            <p>This is some content for grid item 11.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Grid Item 12</h2>
            <p>This is some content for grid item 12.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-cyan-800 text-white py-4 mt-4">
    <div class="container mx-auto text-center">
        <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
    </div>
</footer>

</body>

</html>

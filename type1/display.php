<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Data Display</h1>
        <?php
        $data = file_get_contents("data.txt");

        if ($data !== false) {
            $entries = explode("\n", $data);

            foreach ($entries as $entry) {
                if (!empty($entry)) {
                    echo "<p class='mb-2'>$entry</p>";
                }
            }
        } else {
            echo "<p>No data available.</p>";
        }
        ?>
    </div>

</body>
</html>

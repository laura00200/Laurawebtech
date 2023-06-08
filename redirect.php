<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h2 {
            margin-top: 0;
        }

        .file-link {
            display: block;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            text-decoration: none;
            color: #333;
        }

        .file-link:hover {
            background-color: #eee;
        }

        .file-not-found {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['filename'])) {
            $filename = $_GET['filename'];
            $filePath = 'uploads/' . $filename;

            if (file_exists($filePath)) {
                echo '<h2>File Manager</h2>';
                echo '<h3>Uploaded File:</h3>';
                echo '<a class="file-link" href="' . $filePath . '" target="_blank">' . $filename . '</a>';
            } else {
                echo '<h2>File Manager</h2>';
                echo '<p class="file-not-found">File not found.</p>';
            }
        } else {
            echo '<h2>File Manager</h2>';
            echo '<p>No file uploaded.</p>';
        }
        ?>
    </div>
</body>
</html>

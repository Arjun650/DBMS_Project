<!-- admin.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .announcement-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .announcement-form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .announcement-form input,
        .announcement-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .announcement-form button {
            background-color: #0066cc;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var announcementForm = document.getElementById('announcement-form');

            announcementForm.addEventListener('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(this);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'process_announcement.php', true);

                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 400) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.status === 'success') {
                            alert('Announcement added successfully!');
                            announcementForm.reset(); // Reset the form
                        } else {
                            alert('Error: ' + response.message);
                        }
                    } else {
                        alert('Error: Unable to connect to the server.');
                    }
                };

                xhr.onerror = function() {
                    alert('Error: Unable to connect to the server.');
                };

                xhr.send(formData);
            });
        });
    </script>
</head>
<body>
    <h1>Admin Page</h1>

    <div class="announcement-form">
        <form id="announcement-form" method="post">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>

            <label for="content">Content:</label>
            <textarea name="content" id="content" rows="4" required></textarea>

            <button type="submit">Add Announcement</button>
        </form>
    </div>
    <p><a href="../index.php">go to main page</a></p>
</body>
</html>

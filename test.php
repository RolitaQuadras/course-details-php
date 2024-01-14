<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
            color: #333;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .course-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My College</h1>
    </header>

    <div class="content">
        <p>Welcome to our prestigious college where we offer a diverse range of courses designed to meet the needs of aspiring students. Our faculty members are experts in their fields, and our facilities are equipped to provide an enriching learning experience.</p>
        <p>Explore the world of knowledge with our comprehensive courses and pave the way for a successful future. Whether you're interested in sciences, arts, or technology, we have the right program for you.</p>
    </div>

    <div class="course-details">
        <?php
        // Course details
        $courseName = "Computer Science";
        $courseCode = "CS401";
        $courseCredits = 3;
        $courseDescription = "An introductory course in computer science covering fundamental concepts and programming skills.";

        // Displaying course information
        echo "<h2>$courseName ($courseCode)</h2>";
        echo "<p>Credits: $courseCredits</p>";
        echo "<p>Description: $courseDescription</p>";
        ?>
    </div>

    <footer>
        <p>Author: Rolita</p>
        <p>Copyright &nbsp;2024</p>
    </footer>
</body>
</html>

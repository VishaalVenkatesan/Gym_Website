<?php
$user = 'ggossahs_project';
$password = 'webtech@2023';
$database = 'ggossahs_webtech';
$servername = '95.217.119.36';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM enquiry";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid white;
        }

        h1 {
            text-align: center;
            color: white;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
            padding-top: 150px;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            color: white;
        }

        td {
            font-weight: lighter;
            background-color: #ff6c4d;
            border: 1px solid white;
            color: black;
        }
    </style>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/7433d3320f.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #161819;">
    <script language="javascript">
        var ref = document.referrer;
        if (ref != 'http://localhost/gym2/login.html')
            window.location.href = "http://localhost/gym2/index.html";
    </script>
    <div class="nav">
        <!-- Logo  -->
        <h2><a href="index.html" id="title">The Muscle Factory</a></h2>
        <!-- Nav Links  -->
        <ul id="item">
            <li><a href="index.html">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="classes.html">Classes</a></li>
            <li><a href="contact.html">Enquire</a></li>

            <div class="button">
                <a class="border" href="index.html">Logout</a>
            </div>
        </ul>
        <i id="bar" class="fa-solid fa-bars"></i>
    </div>
    <section>
        <h1>Enquiries</h1><br><br><br>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Sr. no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone no.</th>
                <th>Enquiry type</th>
                <th>Message</th>
            </tr>
            <?php
            while ($rows = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $rows['S_no']; ?></td>
                    <td><?php echo $rows['name']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['phone']; ?></td>
                    <td><?php echo $rows['type']; ?></td>
                    <td><?php echo $rows['message']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>
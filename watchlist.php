<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Watchlist</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="scripts.js"></script>
</head>

<body class="ibm-plex-mono-regular">

    <nav class="ibm-plex-mono-regular">
        <a href="home.html">Home</a>
        <a href="experience.html">Experience</a>
        <a href="resume.html">Resume</a>
        <a href="watchlist.php" class="current">Watchlist</a>
        <a href="contact.php">Contact</a>
    </nav>


    <h1 class="title-exp">Watchlist</h1>

    <div class="main">
    
        <label for="myInput", class="search-label">Search</label>
        <input class="search-bar ibm-plex-mono-regular" type="text" id="myInput" onkeyup="searchTable()" placeholder="Search the watchlist">
    
        <div class="grid">
            
            <?php
            $servername = // servername
            $username = // username
            $password = // password
            $dbname = // dbname
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            $sql = "SELECT id, title, genre, watch_status, rating, review, show_image FROM shows";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='watch-point flex'>";
                    echo "<img class='flex-left show_image' src='".$row["show_image"]."' alt='Poster for the show/movie' width='225' height='300'>";
                    echo "<div class='flex-right'>";
                        echo "<h3 class='title ibm-plex-mono-regular'>".$row["title"]."</h3>";
                        echo "<p class='genre ibm-plex-mono-regular'>Genre: ".$row["genre"]."</p>";
                        echo "<p class='status ibm-plex-mono-regular'>Status: ".$row["watch_status"]."</p>";
                        echo "<p class='rating ibm-plex-mono-regular'>Rating: ".$row["rating"]."</p>";
                        echo "<p class='review ibm-plex-mono-regular'>Review: ".$row["review"]."</p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>

    </div>
</body>

<footer>
    <p>-</p>
    <p>You've reached the end.</p>
    <p>lealip@memphis.edu</p>
    <p>Fall 2024</p>
</footer>

</html>


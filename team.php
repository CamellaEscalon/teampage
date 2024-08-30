<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2 - Team Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 style="text-align: center;">Meet Our Team</h1>
    </header>

    <div class="container">
        <?php
        $team = [
            ["name" => "Roldan Janna", "position" => "Team Leader", "photo" => "janna.jpg", "description" => "Janna mabait sobra.", "age" => "20", "birthday" => "June 23, 2004", "contact" => "09513965408", "address" => "Blk 15 lot 35 Lilac St. Metroville Complex, San Francisco Halang, Biñan, Laguna"],
            ["name" => "Escalon Camella", "position" => "Member", "photo" => "camella.jpg", "description" => "Camella palagi overthink.", "age" => "21", "birthday" => "December 14, 2002", "contact" => "09156487919", "address" => "SummitVille, Muntinlupa"],
            ["name" => "Dela Cruz Cathylene Fate", "position" => "Member", "photo" => "caty.jpg", "description" => "Cathylene laging active being president.", "age" => "20", "birthday" => "September 15, 2003", "contact" => "09275181927", "address" => "Sitio De Asis SMDP, Parañaque"],
            ["name" => "Dionisio Niña", "position" => "Member", "photo" => "nina.jpg", "description" => "Niña pakshet sayo.", "age" => "19", "birthday" => "September 16, 2004", "contact" => "09687223057", "address" => "Sitio Pagkakaisa, Sucat, Muntinlupa"],
            ["name" => "Encio Jocel", "position" => "Member", "photo" => "jocel.jpg", "description" => "Jocel mataray ka daw.", "age" => "22", "birthday" => "June 25, 2002", "contact" => "09946281902", "address" => "1619 Purok 6 Caingin, Santa Rosa, Laguna"],
            ["name" => "Bazar Jansent", "position" => "Member", "photo" => "jan.jpg", "description" => "Jansent bossing kamusta ang buhay buhay.", "age" => "21", "birthday" => "November 12, 2002", "contact" => "09918142152", "address" => "Blk 14 lot 6 Ostrich St. Camella Homes Woodhills, Brgy. San Antonio, San Pedro, Laguna"],
        ];

        foreach ($team as $member) {
            echo "
            <div class='team-member'>
                <img src='{$member['photo']}' alt='{$member['name']}'>
                <div class='info'>
                    <h2>{$member['name']}</h2>
                    <p>Position: {$member['position']}</p>
                    <p>{$member['description']}</p>
                    <input type='checkbox' id='read-more-{$member['name']}'>
                    <label for='read-more-{$member['name']}'>Read More</label>
                    <div class='more'>
                        <p><strong>Age:</strong> {$member['age']} <br>
                        <strong>Birthday:</strong> {$member['birthday']} <br>
                        <strong>Contact Number:</strong> {$member['contact']} <br>
                        <strong>Address:</strong> {$member['address']}</p>
                    </div>
                    <p><a href='#' target='_blank'>View {$member['name']}’s Github Profile</a></p>
                </div>
            </div>
            ";
        }
        ?>
    </div>

    <footer>
        <p>Thank you for visiting our team page! We hope you enjoyed learning more about us. If you have any questions or would like to get in touch, please <a href="#">contact us</a>.</p>
    </footer>
</body>
</html>


<?php


require_once 'connection.php';

$sql = "SELECT * FROM news;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo '<div class="news-' . $row['id'] . '">';
        echo '<div class="news-img-container">';
        echo '<a href="#" class="category">' . $row['category'] . '</a>';
        echo '<a class="news-img" href="">';
        echo '<img src=' . $row['image_url'] .
            ' alt=' . $row['image_alt_text'] . '>';
        echo '</a>';
        echo '</div>';
        echo '<div class="news-text">';
        echo '<a href="#" target="_blank">';
        echo '<h3>' .
            $row['title'] .
            '</h3>';
        echo '</a>
      <p>' . $row['description'] .
            '</p>';
        echo '<a href="#">';
        echo '<div class="btn news-button"> Read More</div>';
        echo '</a>';
        echo '<div class="news-poster">';
        echo '<div class="news-logo">';
        echo '<img src=' . $row['author_image_url'] .
            'alt=' . $row['author_image_alt'] . '>';
        echo '</div>';
        echo '<div class="news-details">';
        echo '<strong class="main-text">' . $row['author_name'] . '</strong>';
        echo '<br>' .
            $row['date_posted'] .
            '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

<?php


require_once 'connection.php';
try {
    $sql = "SELECT * FROM news;";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Unable to connect to Database -";
    echo $e->getMessage();
}

foreach ($results as $result) {


    echo '<div class="news-' . $result['id'] . '">';
    echo '<div class="news-img-container">';
    echo '<a href="#" class="category">' . $result['category'] . '</a>';
    echo '<a class="news-img" href="">';
    echo '<img src=' . $result['image_url'] .
        ' alt=' . $result['image_alt_text'] . '>';
    echo '</a>';
    echo '</div>';
    echo '<div class="news-text">';
    echo '<a href="#" target="_blank">';
    echo '<h3>' .
        $result['title'] .
        '</h3>';
    echo '</a>
      <p>' . $result['description'] .
        '</p>';
    echo '<a href="#">';
    echo '<div class="btn news-button"> Read More</div>';
    echo '</a>';
    echo '<div class="news-poster">';
    echo '<div class="news-logo">';
    echo '<img src=' . $result['author_image_url'] .
        'alt=' . $result['author_image_alt'] . '>';
    echo '</div>';
    echo '<div class="news-details">';
    echo '<strong class="main-text">' . $result['author_name'] . '</strong>';
    echo '<br>' .
        $result['date_posted'] .
        '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

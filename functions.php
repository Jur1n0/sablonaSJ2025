<?php
function insertQnA(){
    $json = file_get_contents("data/qna.json");
    $data = json_decode($json, true);
    $otazky = $data["otazky"];
    $odpovede = $data["odpovede"];
    echo '<section class="container">';
    for ($i = 0; $i < count($otazky); $i++) {
        echo '<div class="accordion">
            <div class="question">'.
            $otazky[$i].'
            </div>
            <div class="answer">'.
            $odpovede[$i].'
            </div>
        </div>';
    }
    echo '</section>';
}
?>
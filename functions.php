<?php
    function getArtists()
    {
        return json_decode(file_get_contents(__DIR__ . '/entertainment.json'), true);
    }

    function getArtistById($id)
    {
        $artists = getArtists();
        foreach ($artists as $artists) {
            if ($artist['id'] == $id) {
                return $artist;
            }
        }
        return null;
    }
?>
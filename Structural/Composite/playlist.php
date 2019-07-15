<?php
class Playlist implements Music {
    private $songs = array();

    public function play() {
        foreach($this->songs as $content) {
            $content->play();
        }
    }

    public function addSong(Music $content) : bool {
        $this->songs[spl_object_hash($content)] = $content;
        return true;
    }

    public function removeSong(Music $content) : bool {
        unset($this->songs[spl_object_hash($content)]);
        return true;
    }
}
?>
<?php
require_once('music.php');
require_once('song.php');
require_once('playlist.php');

$songOne = new Song('Lost In Stereo');
$songTwo = new Song('Running From Lions');
$songThree = new Song('Guts');
$playlistOne = new Playlist();
$playlistTwo = new Playlist();
$playlistThree = new Playlist();
$playlistTwo->addSong($songOne);
$playlistTwo->addSong($songTwo);
$playlistThree->addSong($songThree);
$playlistOne->addSong($playlistTwo);
$playlistOne->addSong($playlistThree);
$playlistOne->play();
?>
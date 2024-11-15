<?php
require_once 'models/Episode.php';

class EpisodeController
{
    // Mostrar todos los episodios
    public function index()
    {
        $episodeModel = new Episode();
        $episodes = $episodeModel->getAllEpisodes();
        include 'views/episode/index.php'; // Vista que muestra los episodios
    }
}
?>
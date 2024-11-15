<?php

class Episode {
    // Método para obtener los episodios de la API
    public function getAllEpisodes() {
        $url = "https://rickandmortyapi.com/api/episode";
        $response = file_get_contents($url); // También se puede usar cURL si se prefiere
        $data = json_decode($response, true);
        
        return $data['results']; // Retorna los episodios
    }
}
?>

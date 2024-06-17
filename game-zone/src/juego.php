<?php

// Espacio de nombres para organizar el código
namespace User\GameZone;

/**
 * Clase Juego
 *
 * Esta clase representa un juego donde se presenta una palabra desordenada y
 * el jugador debe adivinar la palabra original.
 */
class Juego {
    // Propiedades privadas de la clase
    private $palabrasList;        // Lista de palabras posibles para el juego
    private $palabraActual;       // Palabra actual que el jugador debe adivinar
    private $palabraDesordenada;  // Palabra actual desordenada

    /**
     * Constructor de la clase
     *
     * Inicializa la lista de palabras y selecciona una palabra aleatoria,
     * además de desordenarla.
     *
     * @param array $palabrasList Lista de palabras para el juego
     */
    public function __construct(array $palabrasList) {
        $this->palabrasList = $palabrasList;
        $this->palabraActual = $this->getPalabraAleatoria();
        $this->palabraDesordenada = $this->mezclarPalabra($this->palabraActual);
    }

    /**
     * Mezcla las letras de una palabra
     *
     * @param string $palabra Palabra a desordenar
     * @return string Palabra desordenada
     */
    private function mezclarPalabra($palabra) {
        $letras = str_split($palabra);
        shuffle($letras); 
        return implode('', $letras);
    }

    /**
     * Obtiene una palabra aleatoria de la lista de palabras
     *
     * @return string Palabra aleatoria
     */
    public function getPalabraAleatoria() {
        return $this->palabrasList[array_rand($this->palabrasList)];
    }

    /**
     * Obtiene la palabra desordenada
     *
     * @return string Palabra desordenada
     */
    public function getPalabraDesordenada() {
        return $this->palabraDesordenada;
    }

    /**
     * Verifica si una palabra escrita por el jugador coincide con la palabra actual
     *
     * @param string $palabraEscrita Palabra escrita por el jugador
     * @return bool true si la palabra es correcta, false en caso contrario
     */
    public function checarPalabra($palabraEscrita) {
        return strtolower($palabraEscrita) == strtolower($this->palabraActual);
    }
}




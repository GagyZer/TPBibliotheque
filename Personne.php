<?php
class Personne {
    private static int $dernierNumeroGlobal = 0;
    private int $numeroPers;
    private string $nomPers;
    private string $prenomPers;
    private int $anNaissance;

    public function __construct(string $nomPers, string $prenomPers, int $anNaissance) {
        $this->numeroPers = ++self::$dernierNumeroGlobal;
        $this->nomPers = $nomPers;
        $this->prenomPers = $prenomPers;
        $this->anNaissance = $anNaissance;
    }

    public function getNumeroPers(): int
    {
        return $this->numeroPers;
    }

    public function setNumeroPers(int $numeroPers): void
    {
        $this->numeroPers = $numeroPers;
    }

    public function getNomPers(): string
    {
        return $this->nomPers;
    }

    public function setNomPers(string $nomPers): void
    {
        $this->nomPers = $nomPers;
    }

    public function getPrenomPers(): string
    {
        return $this->prenomPers;
    }

    public function setPrenomPers(string $prenomPers): void
    {
        $this->prenomPers = $prenomPers;
    }

    public function getAnNaissance(): int
    {
        return $this->anNaissance;
    }

    public function setAnNaissance(int $anNaissance): void
    {
        $this->anNaissance = $anNaissance;
    }

    // Ajoutez ici les méthodes getter et setter selon vos besoins

    public static function getDernierNumeroGlobal(): int {
        return self::$dernierNumeroGlobal;
    }
}

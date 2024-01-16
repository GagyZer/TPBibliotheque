<?php
use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase
{
    /**
     * Teste la méthode getNumero de la classe Personne.
     */
    public function testGetNumero()
    {
        // À implémenter plus tard
        $this->markTestIncomplete('Test à implémenter plus tard');
    }

    /**
     * Teste la méthode getNom de la classe Personne.
     */
    public function testGetNom()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Turing", $alan->getNomPers());
    }

    /**
     * Teste la méthode getPrenom de la classe Personne.
     */
    public function testGetPrenom()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Alan", $alan->getPrenomPers());
    }

    /**
     * Teste la méthode getAnNaissance de la classe Personne.
     */
    public function testGetAnNaissance()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals(1912, $alan->getAnNaissance());
    }

    /**
     * Teste la méthode getDernierNum de la classe Personne.
     */
    public function testGetDernierNum()
    {
        // À implémenter plus tard
        $this->markTestIncomplete('Test à implémenter plus tard');
    }

    /**
     * Teste la méthode setNumPers de la classe Personne.
     */
    public function testSetNumPers()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setNumeroPers(18);
        $this->assertEquals(18, $alan->getNumeroPers());
    }

    /**
     * Teste la méthode setNomPers de la classe Personne.
     */
    public function testSetNomPers()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setNomPers("Minsky");
        $this->assertEquals("Minsky", $alan->getNomPers());
    }

    /**
     * Teste la méthode setPrenomPers de la classe Personne.
     */
    public function testSetPrenomPers()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setPrenomPers("Marvin");
        $this->assertEquals("Marvin", $alan->getPrenomPers());
    }

    /**
     * Teste la méthode setAnNaissance de la classe Personne.
     */
    public function testSetAnNaissance()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setAnNaissance(1990);
        $this->assertEquals(1990, $alan->getAnNaissance());
    }

    /**
     * Teste la méthode toString de la classe Personne.
     */
    public function testToString()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Turing, Alan, 1912", $alan->toString());
    }

}
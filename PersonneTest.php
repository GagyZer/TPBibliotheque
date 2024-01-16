<?php
use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase
{
    /**
     * Teste la m�thode getNumero de la classe Personne.
     */
    public function testGetNumero()
    {
        // � impl�menter plus tard
        $this->markTestIncomplete('Test � impl�menter plus tard');
    }

    /**
     * Teste la m�thode getNom de la classe Personne.
     */
    public function testGetNom()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Turing", $alan->getNomPers());
    }

    /**
     * Teste la m�thode getPrenom de la classe Personne.
     */
    public function testGetPrenom()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Alan", $alan->getPrenomPers());
    }

    /**
     * Teste la m�thode getAnNaissance de la classe Personne.
     */
    public function testGetAnNaissance()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals(1912, $alan->getAnNaissance());
    }

    /**
     * Teste la m�thode getDernierNum de la classe Personne.
     */
    public function testGetDernierNum()
    {
        // � impl�menter plus tard
        $this->markTestIncomplete('Test � impl�menter plus tard');
    }

    /**
     * Teste la m�thode setNumPers de la classe Personne.
     */
    public function testSetNumPers()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setNumeroPers(18);
        $this->assertEquals(18, $alan->getNumeroPers());
    }

    /**
     * Teste la m�thode setNomPers de la classe Personne.
     */
    public function testSetNomPers()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setNomPers("Minsky");
        $this->assertEquals("Minsky", $alan->getNomPers());
    }

    /**
     * Teste la m�thode setPrenomPers de la classe Personne.
     */
    public function testSetPrenomPers()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setPrenomPers("Marvin");
        $this->assertEquals("Marvin", $alan->getPrenomPers());
    }

    /**
     * Teste la m�thode setAnNaissance de la classe Personne.
     */
    public function testSetAnNaissance()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $alan->setAnNaissance(1990);
        $this->assertEquals(1990, $alan->getAnNaissance());
    }

    /**
     * Teste la m�thode toString de la classe Personne.
     */
    public function testToString()
    {
        $alan = new Personne("Turing", "Alan", 1912);
        $this->assertEquals("Turing, Alan, 1912", $alan->toString());
    }

}
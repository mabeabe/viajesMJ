<?php
namespace BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Viaje
{
    private $id;
    
    protected $name;
    
    protected $destino;
    
    protected $entradas;

    public function __construct($name, $destino){
        
        $this->name = $name;
        $this->destino = $destino;
        $this->entradas = new ArrayCollection();
            
    }
    public function getEntradas(){
        
        return $this->entradas;
        
    }
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Viaje
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set destino
     *
     * @param string $destino
     *
     * @return Viaje
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get destino
     *
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }
}

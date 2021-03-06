<?php

namespace Company\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Tag {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * 
     * @var integer $id
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     * 
     * @var string $name;
     */
    private $name;
    /**
     * @ORM\Column(type="datetime", name="created_at")
     * 
     * @var DateTime $createdAt
     */
    private $createdAt;

    /**
     * Gets the id.
     * 
     * @return integer The id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Gets the name of the tag.
     * 
     * @return string The name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets the name of the tag.
     * 
     * @param string $value The name
     */
    public function setName($value) {
        $this->name = $value;
    }

    /**
     * Gets an object representing the date and time the tag was created.
     * 
     * @return DateTime A DateTime object
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Constructs a new instance of Tag.
     */
    public function __construct() {
        $this->createdAt = new \DateTime();
    }

}
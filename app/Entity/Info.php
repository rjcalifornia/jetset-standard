<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @Entity
 * @Table(name="info")
 */
class Info{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }



}

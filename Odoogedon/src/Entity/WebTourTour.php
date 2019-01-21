<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebTourTour
 *
 * @ORM\Table(name="web_tour_tour", indexes={@ORM\Index(name="IDX_954DD89DA76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class WebTourTour
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="web_tour_tour_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Tour name"})
     */
    private $name;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}

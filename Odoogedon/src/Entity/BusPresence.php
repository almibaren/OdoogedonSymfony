<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusPresence
 *
 * @ORM\Table(name="bus_presence", uniqueConstraints={@ORM\UniqueConstraint(name="bus_presence_bus_user_presence_unique", columns={"user_id"})}, indexes={@ORM\Index(name="bus_presence_user_id_index", columns={"user_id"})})
 * @ORM\Entity
 */
class BusPresence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bus_presence_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_poll", type="datetime", nullable=true, options={"comment"="Last Poll"})
     */
    private $lastPoll;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_presence", type="datetime", nullable=true, options={"comment"="Last Presence"})
     */
    private $lastPresence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", nullable=true, options={"comment"="IM Status"})
     */
    private $status;

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

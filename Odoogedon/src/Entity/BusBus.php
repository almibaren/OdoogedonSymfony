<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusBus
 *
 * @ORM\Table(name="bus_bus", indexes={@ORM\Index(name="IDX_27A129507C455263", columns={"write_uid"}), @ORM\Index(name="IDX_27A129504C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class BusBus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bus_bus_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Create date"})
     */
    private $createDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="channel", type="string", nullable=true, options={"comment"="Channel"})
     */
    private $channel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="string", nullable=true, options={"comment"="Message"})
     */
    private $message;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Last Updated on"})
     */
    private $writeDate;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="write_uid", referencedColumnName="id")
     * })
     */
    private $writeUid;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_uid", referencedColumnName="id")
     * })
     */
    private $createUid;


}

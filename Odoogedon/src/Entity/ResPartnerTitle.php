<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResPartnerTitle
 *
 * @ORM\Table(name="res_partner_title", indexes={@ORM\Index(name="IDX_6BBFA2AA7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_6BBFA2AA4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ResPartnerTitle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_partner_title_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Title"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shortcut", type="string", nullable=true, options={"comment"="Abbreviation"})
     */
    private $shortcut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Created on"})
     */
    private $createDate;

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

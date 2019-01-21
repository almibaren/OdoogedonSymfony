<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCountryState
 *
 * @ORM\Table(name="res_country_state", uniqueConstraints={@ORM\UniqueConstraint(name="res_country_state_name_code_uniq", columns={"country_id", "code"})}, indexes={@ORM\Index(name="IDX_57C6B1B57C455263", columns={"write_uid"}), @ORM\Index(name="IDX_57C6B1B54C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_57C6B1B5F92F3E70", columns={"country_id"})})
 * @ORM\Entity
 */
class ResCountryState
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_country_state_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="State Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", nullable=false, options={"comment"="State Code"})
     */
    private $code;

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

    /**
     * @var \ResCountry
     *
     * @ORM\ManyToOne(targetEntity="ResCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;


}

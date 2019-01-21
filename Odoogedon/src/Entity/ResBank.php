<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResBank
 *
 * @ORM\Table(name="res_bank", indexes={@ORM\Index(name="res_bank_bic_index", columns={"bic"}), @ORM\Index(name="IDX_9C086DD57C455263", columns={"write_uid"}), @ORM\Index(name="IDX_9C086DD54C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_9C086DD55373C966", columns={"country"}), @ORM\Index(name="IDX_9C086DD5A393D2FB", columns={"state"})})
 * @ORM\Entity
 */
class ResBank
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_bank_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street", type="string", nullable=true, options={"comment"="Street"})
     */
    private $street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street2", type="string", nullable=true, options={"comment"="Street2"})
     */
    private $street2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", nullable=true, options={"comment"="Zip"})
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", nullable=true, options={"comment"="City"})
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", nullable=true, options={"comment"="Email"})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", nullable=true, options={"comment"="Phone"})
     */
    private $phone;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bic", type="string", nullable=true, options={"comment"="Bank Identifier Code"})
     */
    private $bic;

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
     *   @ORM\JoinColumn(name="country", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \ResCountryState
     *
     * @ORM\ManyToOne(targetEntity="ResCountryState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state", referencedColumnName="id")
     * })
     */
    private $state;


}

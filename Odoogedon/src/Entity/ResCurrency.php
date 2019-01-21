<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCurrency
 *
 * @ORM\Table(name="res_currency", uniqueConstraints={@ORM\UniqueConstraint(name="res_currency_unique_name", columns={"name"})}, indexes={@ORM\Index(name="IDX_2EC604147C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2EC604144C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ResCurrency
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_currency_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", nullable=false)
     */
    private $symbol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rounding", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Rounding Factor"})
     */
    private $rounding;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="position", type="string", nullable=true, options={"comment"="Symbol Position"})
     */
    private $position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency_unit_label", type="string", nullable=true, options={"comment"="Currency Unit"})
     */
    private $currencyUnitLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency_subunit_label", type="string", nullable=true, options={"comment"="Currency Subunit"})
     */
    private $currencySubunitLabel;

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

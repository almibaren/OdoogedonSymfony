<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResLang
 *
 * @ORM\Table(name="res_lang", uniqueConstraints={@ORM\UniqueConstraint(name="res_lang_name_uniq", columns={"name"}), @ORM\UniqueConstraint(name="res_lang_code_uniq", columns={"code"})}, indexes={@ORM\Index(name="IDX_756156CD7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_756156CD4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ResLang
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_lang_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", nullable=false, options={"comment"="Locale Code"})
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iso_code", type="string", nullable=true, options={"comment"="ISO code"})
     */
    private $isoCode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="translatable", type="boolean", nullable=true, options={"comment"="Translatable"})
     */
    private $translatable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="direction", type="string", nullable=false, options={"comment"="Direction"})
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="date_format", type="string", nullable=false, options={"comment"="Date Format"})
     */
    private $dateFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="time_format", type="string", nullable=false, options={"comment"="Time Format"})
     */
    private $timeFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="grouping", type="string", nullable=false, options={"comment"="Separator Format"})
     */
    private $grouping;

    /**
     * @var string
     *
     * @ORM\Column(name="decimal_point", type="string", nullable=false, options={"comment"="Decimal Separator"})
     */
    private $decimalPoint;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thousands_sep", type="string", nullable=true, options={"comment"="Thousands Separator"})
     */
    private $thousandsSep;

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

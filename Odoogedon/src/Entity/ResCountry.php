<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCountry
 *
 * @ORM\Table(name="res_country", uniqueConstraints={@ORM\UniqueConstraint(name="res_country_code_uniq", columns={"code"}), @ORM\UniqueConstraint(name="res_country_name_uniq", columns={"name"})}, indexes={@ORM\Index(name="IDX_71309D887C455263", columns={"write_uid"}), @ORM\Index(name="IDX_71309D884C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_71309D8838248176", columns={"currency_id"}), @ORM\Index(name="IDX_71309D8858F0EF5F", columns={"address_view_id"})})
 * @ORM\Entity
 */
class ResCountry
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_country_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Country Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=2, nullable=true, options={"comment"="Country Code"})
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_format", type="text", nullable=true, options={"comment"="Layout in Reports"})
     */
    private $addressFormat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="phone_code", type="integer", nullable=true, options={"comment"="Country Calling Code"})
     */
    private $phoneCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_position", type="string", nullable=true, options={"comment"="Customer Name Position"})
     */
    private $namePosition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vat_label", type="string", nullable=true, options={"comment"="Vat Label"})
     */
    private $vatLabel;

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
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_view_id", referencedColumnName="id")
     * })
     */
    private $addressView;


}

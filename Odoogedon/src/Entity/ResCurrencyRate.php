<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCurrencyRate
 *
 * @ORM\Table(name="res_currency_rate", uniqueConstraints={@ORM\UniqueConstraint(name="res_currency_rate_unique_name_per_day", columns={"name", "currency_id", "company_id"})}, indexes={@ORM\Index(name="res_currency_rate_name_index", columns={"name"}), @ORM\Index(name="IDX_6EE0AE97C455263", columns={"write_uid"}), @ORM\Index(name="IDX_6EE0AE94C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_6EE0AE9979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_6EE0AE938248176", columns={"currency_id"})})
 * @ORM\Entity
 */
class ResCurrencyRate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_currency_rate_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="name", type="date", nullable=false, options={"comment"="Date"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rate", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Rate"})
     */
    private $rate;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \ResCurrency
     *
     * @ORM\ManyToOne(targetEntity="ResCurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResPartnerBank
 *
 * @ORM\Table(name="res_partner_bank", uniqueConstraints={@ORM\UniqueConstraint(name="res_partner_bank_unique_number", columns={"sanitized_acc_number", "company_id"})}, indexes={@ORM\Index(name="res_partner_bank_partner_id_index", columns={"partner_id"}), @ORM\Index(name="IDX_8EB118907C455263", columns={"write_uid"}), @ORM\Index(name="IDX_8EB118904C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_8EB11890979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_8EB1189038248176", columns={"currency_id"}), @ORM\Index(name="IDX_8EB1189011C8FB41", columns={"bank_id"})})
 * @ORM\Entity
 */
class ResPartnerBank
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_partner_bank_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="acc_number", type="string", nullable=false, options={"comment"="Account Number"})
     */
    private $accNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sanitized_acc_number", type="string", nullable=true, options={"comment"="Sanitized Account Number"})
     */
    private $sanitizedAccNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

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

    /**
     * @var \ResBank
     *
     * @ORM\ManyToOne(targetEntity="ResBank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_id", referencedColumnName="id")
     * })
     */
    private $bank;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}

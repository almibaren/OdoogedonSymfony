<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCompany
 *
 * @ORM\Table(name="res_company", uniqueConstraints={@ORM\UniqueConstraint(name="res_company_name_uniq", columns={"name"})}, indexes={@ORM\Index(name="res_company_parent_id_index", columns={"parent_id"}), @ORM\Index(name="IDX_6DFC5DA1EFB9C9A", columns={"resource_calendar_id"}), @ORM\Index(name="IDX_6DFC5DA17C455263", columns={"write_uid"}), @ORM\Index(name="IDX_6DFC5DA14C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_6DFC5DA12FE4C5D9", columns={"paperformat_id"}), @ORM\Index(name="IDX_6DFC5DA138248176", columns={"currency_id"}), @ORM\Index(name="IDX_6DFC5DA19393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class ResCompany
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_company_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_header", type="text", nullable=true, options={"comment"="Company Tagline"})
     */
    private $reportHeader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_footer", type="text", nullable=true, options={"comment"="Report Footer"})
     */
    private $reportFooter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logo_web", type="blob", nullable=true, options={"comment"="Logo Web"})
     */
    private $logoWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_no", type="string", nullable=true, options={"comment"="Account No."})
     */
    private $accountNo;

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
     * @var string|null
     *
     * @ORM\Column(name="company_registry", type="string", nullable=true, options={"comment"="Company Registry"})
     */
    private $companyRegistry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_report_layout", type="string", nullable=true, options={"comment"="Document Template"})
     */
    private $externalReportLayout;

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
     * @var \ResourceCalendar
     *
     * @ORM\ManyToOne(targetEntity="ResourceCalendar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_calendar_id", referencedColumnName="id")
     * })
     */
    private $resourceCalendar;

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
     * @var \ReportPaperformat
     *
     * @ORM\ManyToOne(targetEntity="ReportPaperformat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paperformat_id", referencedColumnName="id")
     * })
     */
    private $paperformat;

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
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResPartner
 *
 * @ORM\Table(name="res_partner", indexes={@ORM\Index(name="res_partner_commercial_partner_id_index", columns={"commercial_partner_id"}), @ORM\Index(name="res_partner_parent_id_index", columns={"parent_id"}), @ORM\Index(name="res_partner_display_name_index", columns={"display_name"}), @ORM\Index(name="res_partner_ref_index", columns={"ref"}), @ORM\Index(name="res_partner_name_index", columns={"name"}), @ORM\Index(name="res_partner_date_index", columns={"date"}), @ORM\Index(name="res_partner_company_id_index", columns={"company_id"}), @ORM\Index(name="IDX_13686AF8296CD8AE", columns={"team_id"}), @ORM\Index(name="IDX_13686AF87C455263", columns={"write_uid"}), @ORM\Index(name="IDX_13686AF84C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_13686AF8730F10D1", columns={"commercial_partner_country_id"}), @ORM\Index(name="IDX_13686AF82B19A734", columns={"industry_id"}), @ORM\Index(name="IDX_13686AF8F92F3E70", columns={"country_id"}), @ORM\Index(name="IDX_13686AF85D83CC1", columns={"state_id"}), @ORM\Index(name="IDX_13686AF8A76ED395", columns={"user_id"}), @ORM\Index(name="IDX_13686AF82B36786B", columns={"title"})})
 * @ORM\Entity
 */
class ResPartner
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_partner_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_name", type="string", nullable=true, options={"comment"="Display Name"})
     */
    private $displayName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", nullable=true, options={"comment"="Internal Reference"})
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", nullable=true, options={"comment"="Language"})
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tz", type="string", nullable=true, options={"comment"="Timezone"})
     */
    private $tz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vat", type="string", nullable=true, options={"comment"="TIN"})
     */
    private $vat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", nullable=true, options={"comment"="Website"})
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", nullable=true, options={"comment"="Notes"})
     */
    private $comment;

    /**
     * @var float|null
     *
     * @ORM\Column(name="credit_limit", type="float", precision=10, scale=0, nullable=true, options={"comment"="Credit Limit"})
     */
    private $creditLimit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", nullable=true, options={"comment"="Barcode"})
     */
    private $barcode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer", type="boolean", nullable=true, options={"comment"="Is a Customer"})
     */
    private $customer;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="supplier", type="boolean", nullable=true, options={"comment"="Is a Vendor"})
     */
    private $supplier;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="employee", type="boolean", nullable=true, options={"comment"="Employee"})
     */
    private $employee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="function", type="string", nullable=true, options={"comment"="Job Position"})
     */
    private $function;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", nullable=true, options={"comment"="Address Type"})
     */
    private $type;

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
     * @var string|null
     *
     * @ORM\Column(name="mobile", type="string", nullable=true, options={"comment"="Mobile"})
     */
    private $mobile;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_company", type="boolean", nullable=true, options={"comment"="Is a Company"})
     */
    private $isCompany;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="partner_share", type="boolean", nullable=true, options={"comment"="Share Partner"})
     */
    private $partnerShare;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commercial_company_name", type="string", nullable=true, options={"comment"="Company Name Entity"})
     */
    private $commercialCompanyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_name", type="string", nullable=true, options={"comment"="Company Name"})
     */
    private $companyName;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_date_deadline", type="date", nullable=true, options={"comment"="Next Activity Deadline"})
     */
    private $activityDateDeadline;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

    /**
     * @var int|null
     *
     * @ORM\Column(name="message_bounce", type="integer", nullable=true, options={"comment"="Bounce"})
     */
    private $messageBounce;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="opt_out", type="boolean", nullable=true, options={"comment"="Opt-Out"})
     */
    private $optOut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signup_token", type="string", nullable=true, options={"comment"="Signup Token"})
     */
    private $signupToken;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signup_type", type="string", nullable=true, options={"comment"="Signup Token Type"})
     */
    private $signupType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="signup_expiration", type="datetime", nullable=true, options={"comment"="Signup Expiration"})
     */
    private $signupExpiration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="calendar_last_notif_ack", type="datetime", nullable=true, options={"comment"="Last notification marked as read from base Calendar"})
     */
    private $calendarLastNotifAck;

    /**
     * @var \CrmTeam
     *
     * @ORM\ManyToOne(targetEntity="CrmTeam")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     * })
     */
    private $team;

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
     *   @ORM\JoinColumn(name="commercial_partner_country_id", referencedColumnName="id")
     * })
     */
    private $commercialPartnerCountry;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commercial_partner_id", referencedColumnName="id")
     * })
     */
    private $commercialPartner;

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
     * @var \ResPartnerIndustry
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerIndustry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     * })
     */
    private $industry;

    /**
     * @var \ResCountry
     *
     * @ORM\ManyToOne(targetEntity="ResCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    /**
     * @var \ResCountryState
     *
     * @ORM\ManyToOne(targetEntity="ResCountryState")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \ResPartnerTitle
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerTitle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="title", referencedColumnName="id")
     * })
     */
    private $title;


}

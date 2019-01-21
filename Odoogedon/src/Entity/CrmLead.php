<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmLead
 *
 * @ORM\Table(name="crm_lead", indexes={@ORM\Index(name="crm_lead_company_id_index", columns={"company_id"}), @ORM\Index(name="crm_lead_email_from_index", columns={"email_from"}), @ORM\Index(name="crm_lead_website_index", columns={"website"}), @ORM\Index(name="crm_lead_user_id_index", columns={"user_id"}), @ORM\Index(name="crm_lead_lost_reason_index", columns={"lost_reason"}), @ORM\Index(name="crm_lead_partner_name_index", columns={"partner_name"}), @ORM\Index(name="crm_lead_team_id_index", columns={"team_id"}), @ORM\Index(name="crm_lead_name_index", columns={"name"}), @ORM\Index(name="crm_lead_partner_id_index", columns={"partner_id"}), @ORM\Index(name="crm_lead_type_index", columns={"type"}), @ORM\Index(name="crm_lead_date_last_stage_update_index", columns={"date_last_stage_update"}), @ORM\Index(name="crm_lead_priority_index", columns={"priority"}), @ORM\Index(name="crm_lead_stage_id_index", columns={"stage_id"}), @ORM\Index(name="IDX_474D437A7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_474D437A4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_474D437AE252B6A5", columns={"medium_id"}), @ORM\Index(name="IDX_474D437A953C1C61", columns={"source_id"}), @ORM\Index(name="IDX_474D437AF639F774", columns={"campaign_id"}), @ORM\Index(name="IDX_474D437A2B36786B", columns={"title"}), @ORM\Index(name="IDX_474D437AF92F3E70", columns={"country_id"}), @ORM\Index(name="IDX_474D437A5D83CC1", columns={"state_id"})})
 * @ORM\Entity
 */
class CrmLead
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_lead_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Opportunity"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_action_last", type="datetime", nullable=true, options={"comment"="Last Action"})
     */
    private $dateActionLast;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", nullable=true, options={"comment"="Email"})
     */
    private $emailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", nullable=true, options={"comment"="Website"})
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_cc", type="text", nullable=true, options={"comment"="Global CC"})
     */
    private $emailCc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Notes"})
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Create Date"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Update Date"})
     */
    private $writeDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_name", type="string", nullable=true, options={"comment"="Contact Name"})
     */
    private $contactName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_name", type="string", nullable=true, options={"comment"="Customer Name"})
     */
    private $partnerName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="opt_out", type="boolean", nullable=true, options={"comment"="Opt-Out"})
     */
    private $optOut;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="priority", type="string", nullable=true, options={"comment"="Priority"})
     */
    private $priority;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_closed", type="datetime", nullable=true, options={"comment"="Closed Date"})
     */
    private $dateClosed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referred", type="string", nullable=true, options={"comment"="Referred By"})
     */
    private $referred;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_open", type="datetime", nullable=true, options={"comment"="Assigned"})
     */
    private $dateOpen;

    /**
     * @var float|null
     *
     * @ORM\Column(name="day_open", type="float", precision=10, scale=0, nullable=true, options={"comment"="Days to Assign"})
     */
    private $dayOpen;

    /**
     * @var float|null
     *
     * @ORM\Column(name="day_close", type="float", precision=10, scale=0, nullable=true, options={"comment"="Days to Close"})
     */
    private $dayClose;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_last_stage_update", type="datetime", nullable=true, options={"comment"="Last Stage Update"})
     */
    private $dateLastStageUpdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_conversion", type="datetime", nullable=true, options={"comment"="Conversion Date"})
     */
    private $dateConversion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="message_bounce", type="integer", nullable=true, options={"comment"="Bounce"})
     */
    private $messageBounce;

    /**
     * @var float|null
     *
     * @ORM\Column(name="probability", type="float", precision=10, scale=0, nullable=true, options={"comment"="Probability"})
     */
    private $probability;

    /**
     * @var float|null
     *
     * @ORM\Column(name="planned_revenue", type="float", precision=10, scale=0, nullable=true, options={"comment"="Expected Revenue"})
     */
    private $plannedRevenue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_deadline", type="date", nullable=true, options={"comment"="Expected Closing"})
     */
    private $dateDeadline;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

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
     * @var string|null
     *
     * @ORM\Column(name="function", type="string", nullable=true, options={"comment"="Job Position"})
     */
    private $function;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="message_last_post", type="datetime", nullable=true, options={"comment"="Last Message Date"})
     */
    private $messageLastPost;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activity_date_deadline", type="date", nullable=true, options={"comment"="Next Activity Deadline"})
     */
    private $activityDateDeadline;

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
     * @var \UtmMedium
     *
     * @ORM\ManyToOne(targetEntity="UtmMedium")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="medium_id", referencedColumnName="id")
     * })
     */
    private $medium;

    /**
     * @var \UtmSource
     *
     * @ORM\ManyToOne(targetEntity="UtmSource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="source_id", referencedColumnName="id")
     * })
     */
    private $source;

    /**
     * @var \UtmCampaign
     *
     * @ORM\ManyToOne(targetEntity="UtmCampaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campaign_id", referencedColumnName="id")
     * })
     */
    private $campaign;

    /**
     * @var \CrmLostReason
     *
     * @ORM\ManyToOne(targetEntity="CrmLostReason")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lost_reason", referencedColumnName="id")
     * })
     */
    private $lostReason;

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
     * @var \ResPartnerTitle
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerTitle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="title", referencedColumnName="id")
     * })
     */
    private $title;

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
     * @var \CrmStage
     *
     * @ORM\ManyToOne(targetEntity="CrmStage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stage_id", referencedColumnName="id")
     * })
     */
    private $stage;

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
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResConfigSettings
 *
 * @ORM\Table(name="res_config_settings", indexes={@ORM\Index(name="IDX_2B80B04A7871026A", columns={"auth_signup_template_user_id"}), @ORM\Index(name="IDX_2B80B04A979B1AD6", columns={"company_id"}), @ORM\Index(name="IDX_2B80B04A7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2B80B04A4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ResConfigSettings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_config_settings_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var bool|null
     *
     * @ORM\Column(name="group_multi_company", type="boolean", nullable=true, options={"comment"="Manage multiple companies"})
     */
    private $groupMultiCompany;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_user_rights", type="boolean", nullable=true, options={"comment"="Default Access Rights"})
     */
    private $defaultUserRights;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_external_email_server", type="boolean", nullable=true, options={"comment"="External Email Servers"})
     */
    private $defaultExternalEmailServer;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_base_import", type="boolean", nullable=true, options={"comment"="Allow users to import data from CSV/XLS/XLSX/ODS files"})
     */
    private $moduleBaseImport;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_google_calendar", type="boolean", nullable=true, options={"comment"="Allow the users to synchronize their calendar  with Google Calendar"})
     */
    private $moduleGoogleCalendar;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_google_drive", type="boolean", nullable=true, options={"comment"="Attach Google documents to any record"})
     */
    private $moduleGoogleDrive;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_google_spreadsheet", type="boolean", nullable=true, options={"comment"="Google Spreadsheet"})
     */
    private $moduleGoogleSpreadsheet;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_auth_oauth", type="boolean", nullable=true, options={"comment"="Use external authentication providers (OAuth)"})
     */
    private $moduleAuthOauth;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_auth_ldap", type="boolean", nullable=true, options={"comment"="LDAP Authentication"})
     */
    private $moduleAuthLdap;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_base_gengo", type="boolean", nullable=true, options={"comment"="Translate Your Website with Gengo"})
     */
    private $moduleBaseGengo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_inter_company_rules", type="boolean", nullable=true, options={"comment"="Manage Inter Company"})
     */
    private $moduleInterCompanyRules;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_pad", type="boolean", nullable=true, options={"comment"="Collaborative Pads"})
     */
    private $modulePad;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_voip", type="boolean", nullable=true, options={"comment"="Asterisk (VoIP)"})
     */
    private $moduleVoip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="company_share_partner", type="boolean", nullable=true, options={"comment"="Share partners to all companies"})
     */
    private $companySharePartner;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default_custom_report_footer", type="boolean", nullable=true, options={"comment"="Custom Report Footer"})
     */
    private $defaultCustomReportFooter;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_multi_currency", type="boolean", nullable=true, options={"comment"="Multi-Currencies"})
     */
    private $groupMultiCurrency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fail_counter", type="integer", nullable=true, options={"comment"="Fail Mail"})
     */
    private $failCounter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alias_domain", type="string", nullable=true, options={"comment"="Alias Domain"})
     */
    private $aliasDomain;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auth_signup_reset_password", type="boolean", nullable=true, options={"comment"="Enable password reset from Login page"})
     */
    private $authSignupResetPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auth_signup_uninvited", type="string", nullable=true, options={"comment"="Customer Account"})
     */
    private $authSignupUninvited;

    /**
     * @var string|null
     *
     * @ORM\Column(name="crm_alias_prefix", type="string", nullable=true, options={"comment"="Default Alias Name for Leads"})
     */
    private $crmAliasPrefix;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="generate_lead_from_alias", type="boolean", nullable=true, options={"comment"="Manual Assignation of Emails"})
     */
    private $generateLeadFromAlias;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="group_use_lead", type="boolean", nullable=true, options={"comment"="Leads"})
     */
    private $groupUseLead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_crm_phone_validation", type="boolean", nullable=true, options={"comment"="Phone Formatting"})
     */
    private $moduleCrmPhoneValidation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="module_web_clearbit", type="boolean", nullable=true, options={"comment"="Customer Autocomplete"})
     */
    private $moduleWebClearbit;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auth_signup_template_user_id", referencedColumnName="id")
     * })
     */
    private $authSignupTemplateUser;

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

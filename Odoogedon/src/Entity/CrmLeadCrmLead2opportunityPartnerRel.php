<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmLeadCrmLead2opportunityPartnerRel
 *
 * @ORM\Table(name="crm_lead_crm_lead2opportunity_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="crm_lead_crm_lead2opportunity_crm_lead2opportunity_partner__key", columns={"crm_lead2opportunity_partner_id", "crm_lead_id"})}, indexes={@ORM\Index(name="crm_lead_crm_lead2opportunity_crm_lead2opportunity_partner__idx", columns={"crm_lead2opportunity_partner_id"}), @ORM\Index(name="crm_lead_crm_lead2opportunity_partner_rel_crm_lead_id_idx", columns={"crm_lead_id"})})
 * @ORM\Entity
 */
class CrmLeadCrmLead2opportunityPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_lead_crm_lead2opportunity_partner_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \CrmLead
     *
     * @ORM\ManyToOne(targetEntity="CrmLead")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crm_lead_id", referencedColumnName="id")
     * })
     */
    private $crmLead;

    /**
     * @var \CrmLead2opportunityPartner
     *
     * @ORM\ManyToOne(targetEntity="CrmLead2opportunityPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crm_lead2opportunity_partner_id", referencedColumnName="id")
     * })
     */
    private $crmLead2opportunityPartner;


}

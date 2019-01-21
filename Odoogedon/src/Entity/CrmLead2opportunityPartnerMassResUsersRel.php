<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmLead2opportunityPartnerMassResUsersRel
 *
 * @ORM\Table(name="crm_lead2opportunity_partner_mass_res_users_rel", uniqueConstraints={@ORM\UniqueConstraint(name="crm_lead2opportunity_partner__crm_lead2opportunity_partner__key", columns={"crm_lead2opportunity_partner_mass_id", "res_users_id"})}, indexes={@ORM\Index(name="crm_lead2opportunity_partner__crm_lead2opportunity_partner__idx", columns={"crm_lead2opportunity_partner_mass_id"}), @ORM\Index(name="crm_lead2opportunity_partner_mass_res_users_re_res_users_id_idx", columns={"res_users_id"})})
 * @ORM\Entity
 */
class CrmLead2opportunityPartnerMassResUsersRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="crm_lead2opportunity_partner_mass_res_users_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_users_id", referencedColumnName="id")
     * })
     */
    private $resUsers;

    /**
     * @var \CrmLead2opportunityPartnerMass
     *
     * @ORM\ManyToOne(targetEntity="CrmLead2opportunityPartnerMass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crm_lead2opportunity_partner_mass_id", referencedColumnName="id")
     * })
     */
    private $crmLead2opportunityPartnerMass;


}

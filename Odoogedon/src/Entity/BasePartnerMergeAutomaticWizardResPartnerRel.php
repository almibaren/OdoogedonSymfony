<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BasePartnerMergeAutomaticWizardResPartnerRel
 *
 * @ORM\Table(name="base_partner_merge_automatic_wizard_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="base_partner_merge_automatic__base_partner_merge_automatic__key", columns={"base_partner_merge_automatic_wizard_id", "res_partner_id"})}, indexes={@ORM\Index(name="base_partner_merge_automatic__base_partner_merge_automatic__idx", columns={"base_partner_merge_automatic_wizard_id"}), @ORM\Index(name="base_partner_merge_automatic_wizard_res_part_res_partner_id_idx", columns={"res_partner_id"})})
 * @ORM\Entity
 */
class BasePartnerMergeAutomaticWizardResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_partner_merge_automatic_wizard_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_partner_id", referencedColumnName="id")
     * })
     */
    private $resPartner;

    /**
     * @var \BasePartnerMergeAutomaticWizard
     *
     * @ORM\ManyToOne(targetEntity="BasePartnerMergeAutomaticWizard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="base_partner_merge_automatic_wizard_id", referencedColumnName="id")
     * })
     */
    private $basePartnerMergeAutomaticWizard;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailWizardInviteResPartnerRel
 *
 * @ORM\Table(name="mail_wizard_invite_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_wizard_invite_res_partne_mail_wizard_invite_id_res_par_key", columns={"mail_wizard_invite_id", "res_partner_id"})}, indexes={@ORM\Index(name="mail_wizard_invite_res_partner_rel_res_partner_id_idx", columns={"res_partner_id"}), @ORM\Index(name="mail_wizard_invite_res_partner_rel_mail_wizard_invite_id_idx", columns={"mail_wizard_invite_id"})})
 * @ORM\Entity
 */
class MailWizardInviteResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_wizard_invite_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MailWizardInvite
     *
     * @ORM\ManyToOne(targetEntity="MailWizardInvite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_wizard_invite_id", referencedColumnName="id")
     * })
     */
    private $mailWizardInvite;


}

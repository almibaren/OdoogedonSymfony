<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailChannelMailWizardInviteRel
 *
 * @ORM\Table(name="mail_channel_mail_wizard_invite_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_channel_mail_wizard_invi_mail_wizard_invite_id_mail_ch_key", columns={"mail_wizard_invite_id", "mail_channel_id"})}, indexes={@ORM\Index(name="mail_channel_mail_wizard_invite_rel_mail_wizard_invite_id_idx", columns={"mail_wizard_invite_id"}), @ORM\Index(name="mail_channel_mail_wizard_invite_rel_mail_channel_id_idx", columns={"mail_channel_id"})})
 * @ORM\Entity
 */
class MailChannelMailWizardInviteRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_channel_mail_wizard_invite_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MailChannel
     *
     * @ORM\ManyToOne(targetEntity="MailChannel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_channel_id", referencedColumnName="id")
     * })
     */
    private $mailChannel;

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

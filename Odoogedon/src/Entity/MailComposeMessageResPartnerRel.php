<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailComposeMessageResPartnerRel
 *
 * @ORM\Table(name="mail_compose_message_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_compose_message_res_partner_rel_wizard_id_partner_id_key", columns={"wizard_id", "partner_id"})}, indexes={@ORM\Index(name="mail_compose_message_res_partner_rel_partner_id_idx", columns={"partner_id"}), @ORM\Index(name="mail_compose_message_res_partner_rel_wizard_id_idx", columns={"wizard_id"})})
 * @ORM\Entity
 */
class MailComposeMessageResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_compose_message_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \MailComposeMessage
     *
     * @ORM\ManyToOne(targetEntity="MailComposeMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wizard_id", referencedColumnName="id")
     * })
     */
    private $wizard;


}

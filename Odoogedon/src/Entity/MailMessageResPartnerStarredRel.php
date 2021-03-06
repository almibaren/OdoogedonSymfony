<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailMessageResPartnerStarredRel
 *
 * @ORM\Table(name="mail_message_res_partner_starred_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_message_res_partner_star_mail_message_id_res_partner_i_key", columns={"mail_message_id", "res_partner_id"})}, indexes={@ORM\Index(name="mail_message_res_partner_starred_rel_res_partner_id_idx", columns={"res_partner_id"}), @ORM\Index(name="mail_message_res_partner_starred_rel_mail_message_id_idx", columns={"mail_message_id"})})
 * @ORM\Entity
 */
class MailMessageResPartnerStarredRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_message_res_partner_starred_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MailMessage
     *
     * @ORM\ManyToOne(targetEntity="MailMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_message_id", referencedColumnName="id")
     * })
     */
    private $mailMessage;


}

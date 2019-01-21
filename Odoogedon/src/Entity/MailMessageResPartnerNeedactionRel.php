<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailMessageResPartnerNeedactionRel
 *
 * @ORM\Table(name="mail_message_res_partner_needaction_rel", indexes={@ORM\Index(name="mail_notification_res_partner_id_is_read_email_status_mail_mess", columns={"res_partner_id", "is_read", "email_status", "mail_message_id"}), @ORM\Index(name="mail_message_res_partner_needaction_rel_is_read_index", columns={"is_read"}), @ORM\Index(name="mail_message_res_partner_needaction_rel_is_email_index", columns={"is_email"}), @ORM\Index(name="mail_message_res_partner_needaction_rel_mail_message_id_index", columns={"mail_message_id"}), @ORM\Index(name="mail_message_res_partner_needaction_rel_res_partner_id_index", columns={"res_partner_id"}), @ORM\Index(name="mail_message_res_partner_needaction_rel_email_status_index", columns={"email_status"})})
 * @ORM\Entity
 */
class MailMessageResPartnerNeedactionRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_message_res_partner_needaction_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_read", type="boolean", nullable=true, options={"comment"="Is Read"})
     */
    private $isRead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_email", type="boolean", nullable=true, options={"comment"="Sent by Email"})
     */
    private $isEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_status", type="string", nullable=true, options={"comment"="Email Status"})
     */
    private $emailStatus;

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

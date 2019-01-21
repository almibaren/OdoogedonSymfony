<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailMessageMailChannelRel
 *
 * @ORM\Table(name="mail_message_mail_channel_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_message_mail_channel_rel_mail_message_id_mail_channel__key", columns={"mail_message_id", "mail_channel_id"})}, indexes={@ORM\Index(name="mail_message_mail_channel_rel_mail_channel_id_idx", columns={"mail_channel_id"}), @ORM\Index(name="mail_message_mail_channel_rel_mail_message_id_idx", columns={"mail_message_id"})})
 * @ORM\Entity
 */
class MailMessageMailChannelRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_message_mail_channel_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MailMessage
     *
     * @ORM\ManyToOne(targetEntity="MailMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_message_id", referencedColumnName="id")
     * })
     */
    private $mailMessage;


}

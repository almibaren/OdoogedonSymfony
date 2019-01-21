<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailMail
 *
 * @ORM\Table(name="mail_mail", indexes={@ORM\Index(name="mail_mail_fetchmail_server_id_index", columns={"fetchmail_server_id"}), @ORM\Index(name="mail_mail_mail_message_id_index", columns={"mail_message_id"}), @ORM\Index(name="IDX_FC5D3F217C455263", columns={"write_uid"}), @ORM\Index(name="IDX_FC5D3F214C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class MailMail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_mail_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body_html", type="text", nullable=true, options={"comment"="Rich-text Contents"})
     */
    private $bodyHtml;

    /**
     * @var string|null
     *
     * @ORM\Column(name="references", type="text", nullable=true, options={"comment"="References"})
     */
    private $references;

    /**
     * @var string|null
     *
     * @ORM\Column(name="headers", type="text", nullable=true, options={"comment"="Headers"})
     */
    private $headers;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="notification", type="boolean", nullable=true, options={"comment"="Is Notification"})
     */
    private $notification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_to", type="text", nullable=true, options={"comment"="To"})
     */
    private $emailTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_cc", type="string", nullable=true, options={"comment"="Cc"})
     */
    private $emailCc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auto_delete", type="boolean", nullable=true, options={"comment"="Auto Delete"})
     */
    private $autoDelete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="failure_reason", type="text", nullable=true, options={"comment"="Failure Reason"})
     */
    private $failureReason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scheduled_date", type="string", nullable=true, options={"comment"="Scheduled Send Date"})
     */
    private $scheduledDate;

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
     * @var \FetchmailServer
     *
     * @ORM\ManyToOne(targetEntity="FetchmailServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fetchmail_server_id", referencedColumnName="id")
     * })
     */
    private $fetchmailServer;

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

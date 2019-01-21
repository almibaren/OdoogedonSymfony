<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailMessage
 *
 * @ORM\Table(name="mail_message", indexes={@ORM\Index(name="mail_message_model_index", columns={"model"}), @ORM\Index(name="mail_message_author_id_index", columns={"author_id"}), @ORM\Index(name="mail_message_res_id_index", columns={"res_id"}), @ORM\Index(name="mail_message_mail_activity_type_id_index", columns={"mail_activity_type_id"}), @ORM\Index(name="mail_message_subtype_id_index", columns={"subtype_id"}), @ORM\Index(name="mail_message_model_res_id_idx", columns={"model", "res_id"}), @ORM\Index(name="mail_message_message_id_index", columns={"message_id"}), @ORM\Index(name="mail_message_parent_id_index", columns={"parent_id"}), @ORM\Index(name="IDX_6C00B1107C455263", columns={"write_uid"}), @ORM\Index(name="IDX_6C00B1104C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_6C00B110609EF8D4", columns={"mail_server_id"})})
 * @ORM\Entity
 */
class MailMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_message_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", nullable=true, options={"comment"="Subject"})
     */
    private $subject;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", nullable=true, options={"comment"="Contents"})
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", nullable=true, options={"comment"="Related Document Model"})
     */
    private $model;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true, options={"comment"="Related Document ID"})
     */
    private $resId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="record_name", type="string", nullable=true, options={"comment"="Message Record Name"})
     */
    private $recordName;

    /**
     * @var string
     *
     * @ORM\Column(name="message_type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $messageType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", nullable=true, options={"comment"="From"})
     */
    private $emailFrom;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="no_auto_thread", type="boolean", nullable=true, options={"comment"="No threading for answers"})
     */
    private $noAutoThread;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message_id", type="string", nullable=true, options={"comment"="Message-Id"})
     */
    private $messageId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_to", type="string", nullable=true, options={"comment"="Reply-To"})
     */
    private $replyTo;

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
     * @var \IrMailServer
     *
     * @ORM\ManyToOne(targetEntity="IrMailServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_server_id", referencedColumnName="id")
     * })
     */
    private $mailServer;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * })
     */
    private $author;

    /**
     * @var \MailActivityType
     *
     * @ORM\ManyToOne(targetEntity="MailActivityType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_activity_type_id", referencedColumnName="id")
     * })
     */
    private $mailActivityType;

    /**
     * @var \MailMessageSubtype
     *
     * @ORM\ManyToOne(targetEntity="MailMessageSubtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subtype_id", referencedColumnName="id")
     * })
     */
    private $subtype;

    /**
     * @var \MailMessage
     *
     * @ORM\ManyToOne(targetEntity="MailMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}

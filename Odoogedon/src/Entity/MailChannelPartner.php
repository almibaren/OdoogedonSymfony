<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailChannelPartner
 *
 * @ORM\Table(name="mail_channel_partner", indexes={@ORM\Index(name="mail_channel_partner_seen_message_id_idx", columns={"channel_id", "partner_id", "seen_message_id"}), @ORM\Index(name="IDX_C4D335157C455263", columns={"write_uid"}), @ORM\Index(name="IDX_C4D335154C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_C4D335154185D690", columns={"seen_message_id"}), @ORM\Index(name="IDX_C4D3351572F5A1AA", columns={"channel_id"}), @ORM\Index(name="IDX_C4D335159393F8FE", columns={"partner_id"})})
 * @ORM\Entity
 */
class MailChannelPartner
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_channel_partner_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fold_state", type="string", nullable=true, options={"comment"="Conversation Fold State"})
     */
    private $foldState;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_minimized", type="boolean", nullable=true, options={"comment"="Conversation is minimized"})
     */
    private $isMinimized;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_pinned", type="boolean", nullable=true, options={"comment"="Is pinned on the interface"})
     */
    private $isPinned;

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
     * @var \MailMessage
     *
     * @ORM\ManyToOne(targetEntity="MailMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seen_message_id", referencedColumnName="id")
     * })
     */
    private $seenMessage;

    /**
     * @var \MailChannel
     *
     * @ORM\ManyToOne(targetEntity="MailChannel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="channel_id", referencedColumnName="id")
     * })
     */
    private $channel;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}

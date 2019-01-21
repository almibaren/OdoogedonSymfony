<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageAttachmentRel
 *
 * @ORM\Table(name="message_attachment_rel", uniqueConstraints={@ORM\UniqueConstraint(name="message_attachment_rel_message_id_attachment_id_key", columns={"message_id", "attachment_id"})}, indexes={@ORM\Index(name="message_attachment_rel_message_id_idx", columns={"message_id"}), @ORM\Index(name="message_attachment_rel_attachment_id_idx", columns={"attachment_id"})})
 * @ORM\Entity
 */
class MessageAttachmentRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="message_attachment_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \IrAttachment
     *
     * @ORM\ManyToOne(targetEntity="IrAttachment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attachment_id", referencedColumnName="id")
     * })
     */
    private $attachment;

    /**
     * @var \MailMessage
     *
     * @ORM\ManyToOne(targetEntity="MailMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="message_id", referencedColumnName="id")
     * })
     */
    private $message;


}

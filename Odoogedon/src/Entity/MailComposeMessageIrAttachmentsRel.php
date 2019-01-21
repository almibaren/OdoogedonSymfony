<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailComposeMessageIrAttachmentsRel
 *
 * @ORM\Table(name="mail_compose_message_ir_attachments_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_compose_message_ir_attachments_wizard_id_attachment_id_key", columns={"wizard_id", "attachment_id"})}, indexes={@ORM\Index(name="mail_compose_message_ir_attachments_rel_wizard_id_idx", columns={"wizard_id"}), @ORM\Index(name="mail_compose_message_ir_attachments_rel_attachment_id_idx", columns={"attachment_id"})})
 * @ORM\Entity
 */
class MailComposeMessageIrAttachmentsRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_compose_message_ir_attachments_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MailComposeMessage
     *
     * @ORM\ManyToOne(targetEntity="MailComposeMessage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wizard_id", referencedColumnName="id")
     * })
     */
    private $wizard;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailTemplateAttachmentRel
 *
 * @ORM\Table(name="email_template_attachment_rel", uniqueConstraints={@ORM\UniqueConstraint(name="email_template_attachment_rel_email_template_id_attachment__key", columns={"email_template_id", "attachment_id"})}, indexes={@ORM\Index(name="email_template_attachment_rel_attachment_id_idx", columns={"attachment_id"}), @ORM\Index(name="email_template_attachment_rel_email_template_id_idx", columns={"email_template_id"})})
 * @ORM\Entity
 */
class EmailTemplateAttachmentRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="email_template_attachment_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MailTemplate
     *
     * @ORM\ManyToOne(targetEntity="MailTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_template_id", referencedColumnName="id")
     * })
     */
    private $emailTemplate;


}

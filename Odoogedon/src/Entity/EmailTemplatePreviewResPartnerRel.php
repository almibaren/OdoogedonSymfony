<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailTemplatePreviewResPartnerRel
 *
 * @ORM\Table(name="email_template_preview_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="email_template_preview_res_pa_email_template_preview_id_res_key", columns={"email_template_preview_id", "res_partner_id"})}, indexes={@ORM\Index(name="email_template_preview_res_partner_rel_res_partner_id_idx", columns={"res_partner_id"}), @ORM\Index(name="email_template_preview_res_partne_email_template_preview_id_idx", columns={"email_template_preview_id"})})
 * @ORM\Entity
 */
class EmailTemplatePreviewResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="email_template_preview_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \EmailTemplatePreview
     *
     * @ORM\ManyToOne(targetEntity="EmailTemplatePreview")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_template_preview_id", referencedColumnName="id")
     * })
     */
    private $emailTemplatePreview;


}

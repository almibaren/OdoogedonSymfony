<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailMailResPartnerRel
 *
 * @ORM\Table(name="mail_mail_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_mail_res_partner_rel_mail_mail_id_res_partner_id_key", columns={"mail_mail_id", "res_partner_id"})}, indexes={@ORM\Index(name="mail_mail_res_partner_rel_mail_mail_id_idx", columns={"mail_mail_id"}), @ORM\Index(name="mail_mail_res_partner_rel_res_partner_id_idx", columns={"res_partner_id"})})
 * @ORM\Entity
 */
class MailMailResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_mail_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MailMail
     *
     * @ORM\ManyToOne(targetEntity="MailMail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_mail_id", referencedColumnName="id")
     * })
     */
    private $mailMail;


}

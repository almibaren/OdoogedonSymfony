<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailWizardInvite
 *
 * @ORM\Table(name="mail_wizard_invite", indexes={@ORM\Index(name="mail_wizard_invite_res_model_index", columns={"res_model"}), @ORM\Index(name="mail_wizard_invite_res_id_index", columns={"res_id"}), @ORM\Index(name="IDX_6CCB60CA7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_6CCB60CA4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class MailWizardInvite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_wizard_invite_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="res_model", type="string", nullable=false, options={"comment"="Related Document Model"})
     */
    private $resModel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true, options={"comment"="Related Document ID"})
     */
    private $resId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", nullable=true, options={"comment"="Message"})
     */
    private $message;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="send_mail", type="boolean", nullable=true, options={"comment"="Send Email"})
     */
    private $sendMail;

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


}

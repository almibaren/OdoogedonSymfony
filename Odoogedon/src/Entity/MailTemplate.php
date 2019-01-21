<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailTemplate
 *
 * @ORM\Table(name="mail_template", indexes={@ORM\Index(name="mail_template_model_index", columns={"model"}), @ORM\Index(name="IDX_4AB7DECB7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_4AB7DECB4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_4AB7DECB3699AFE5", columns={"sub_model_object_field"}), @ORM\Index(name="IDX_4AB7DECB1AFCE4A0", columns={"sub_object"}), @ORM\Index(name="IDX_4AB7DECB7604BDD0", columns={"model_object_field"}), @ORM\Index(name="IDX_4AB7DECB1D1F7BB8", columns={"ref_ir_act_window"}), @ORM\Index(name="IDX_4AB7DECB970086FE", columns={"report_template"}), @ORM\Index(name="IDX_4AB7DECB609EF8D4", columns={"mail_server_id"}), @ORM\Index(name="IDX_4AB7DECB7975B7E7", columns={"model_id"})})
 * @ORM\Entity
 */
class MailTemplate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_template_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", nullable=true, options={"comment"="Related Document Model"})
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", nullable=true, options={"comment"="Language"})
     */
    private $lang;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="user_signature", type="boolean", nullable=true, options={"comment"="Add Signature"})
     */
    private $userSignature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", nullable=true, options={"comment"="Subject"})
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", nullable=true, options={"comment"="From"})
     */
    private $emailFrom;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_default_to", type="boolean", nullable=true, options={"comment"="Default recipients"})
     */
    private $useDefaultTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_to", type="string", nullable=true, options={"comment"="To (Emails)"})
     */
    private $emailTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_to", type="string", nullable=true, options={"comment"="To (Partners)"})
     */
    private $partnerTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_cc", type="string", nullable=true, options={"comment"="Cc"})
     */
    private $emailCc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_to", type="string", nullable=true, options={"comment"="Reply-To"})
     */
    private $replyTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body_html", type="text", nullable=true, options={"comment"="Body"})
     */
    private $bodyHtml;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_name", type="string", nullable=true, options={"comment"="Report Filename"})
     */
    private $reportName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auto_delete", type="boolean", nullable=true, options={"comment"="Auto Delete"})
     */
    private $autoDelete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="null_value", type="string", nullable=true, options={"comment"="Default Value"})
     */
    private $nullValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="copyvalue", type="string", nullable=true, options={"comment"="Placeholder Expression"})
     */
    private $copyvalue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scheduled_date", type="string", nullable=true, options={"comment"="Scheduled Date"})
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
     * @var \IrModelFields
     *
     * @ORM\ManyToOne(targetEntity="IrModelFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sub_model_object_field", referencedColumnName="id")
     * })
     */
    private $subModelObjectField;

    /**
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sub_object", referencedColumnName="id")
     * })
     */
    private $subObject;

    /**
     * @var \IrModelFields
     *
     * @ORM\ManyToOne(targetEntity="IrModelFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_object_field", referencedColumnName="id")
     * })
     */
    private $modelObjectField;

    /**
     * @var \IrActWindow
     *
     * @ORM\ManyToOne(targetEntity="IrActWindow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_ir_act_window", referencedColumnName="id")
     * })
     */
    private $refIrActWindow;

    /**
     * @var \IrActReportXml
     *
     * @ORM\ManyToOne(targetEntity="IrActReportXml")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="report_template", referencedColumnName="id")
     * })
     */
    private $reportTemplate;

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
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     * })
     */
    private $model2;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActReportXml
 *
 * @ORM\Table(name="ir_act_report_xml", indexes={@ORM\Index(name="IDX_150F108F7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_150F108F4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_150F108FDAC4C9DB", columns={"binding_model_id"}), @ORM\Index(name="IDX_150F108F2FE4C5D9", columns={"paperformat_id"})})
 * @ORM\Entity
 */
class IrActReportXml
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_report_xml_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help", type="text", nullable=true)
     */
    private $help;

    /**
     * @var string
     *
     * @ORM\Column(name="binding_type", type="string", nullable=false)
     */
    private $bindingType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true)
     */
    private $writeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", nullable=false, options={"comment"="Model"})
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="report_type", type="string", nullable=false, options={"comment"="Report Type"})
     */
    private $reportType;

    /**
     * @var string
     *
     * @ORM\Column(name="report_name", type="string", nullable=false, options={"comment"="Template Name"})
     */
    private $reportName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_file", type="string", nullable=true, options={"comment"="Report File"})
     */
    private $reportFile;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="multi", type="boolean", nullable=true, options={"comment"="On Multiple Doc."})
     */
    private $multi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="print_report_name", type="string", nullable=true, options={"comment"="Printed Report Name"})
     */
    private $printReportName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="attachment_use", type="boolean", nullable=true, options={"comment"="Reload from Attachment"})
     */
    private $attachmentUse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="attachment", type="string", nullable=true, options={"comment"="Save as Attachment Prefix"})
     */
    private $attachment;

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
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="binding_model_id", referencedColumnName="id")
     * })
     */
    private $bindingModel;

    /**
     * @var \ReportPaperformat
     *
     * @ORM\ManyToOne(targetEntity="ReportPaperformat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paperformat_id", referencedColumnName="id")
     * })
     */
    private $paperformat;


}

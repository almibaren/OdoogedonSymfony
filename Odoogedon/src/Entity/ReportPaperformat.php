<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportPaperformat
 *
 * @ORM\Table(name="report_paperformat", indexes={@ORM\Index(name="IDX_66BF582D7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_66BF582D4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ReportPaperformat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="report_paperformat_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default", type="boolean", nullable=true, options={"comment"="Default paper format ?"})
     */
    private $default;

    /**
     * @var string|null
     *
     * @ORM\Column(name="format", type="string", nullable=true, options={"comment"="Paper size"})
     */
    private $format;

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin_top", type="float", precision=10, scale=0, nullable=true, options={"comment"="Top Margin (mm)"})
     */
    private $marginTop;

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin_bottom", type="float", precision=10, scale=0, nullable=true, options={"comment"="Bottom Margin (mm)"})
     */
    private $marginBottom;

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin_left", type="float", precision=10, scale=0, nullable=true, options={"comment"="Left Margin (mm)"})
     */
    private $marginLeft;

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin_right", type="float", precision=10, scale=0, nullable=true, options={"comment"="Right Margin (mm)"})
     */
    private $marginRight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="page_height", type="integer", nullable=true, options={"comment"="Page height (mm)"})
     */
    private $pageHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="page_width", type="integer", nullable=true, options={"comment"="Page width (mm)"})
     */
    private $pageWidth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orientation", type="string", nullable=true, options={"comment"="Orientation"})
     */
    private $orientation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="header_line", type="boolean", nullable=true, options={"comment"="Display a header line"})
     */
    private $headerLine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="header_spacing", type="integer", nullable=true, options={"comment"="Header spacing"})
     */
    private $headerSpacing;

    /**
     * @var int
     *
     * @ORM\Column(name="dpi", type="integer", nullable=false, options={"comment"="Output DPI"})
     */
    private $dpi;

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

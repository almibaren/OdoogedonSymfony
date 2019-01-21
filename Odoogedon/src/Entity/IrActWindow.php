<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActWindow
 *
 * @ORM\Table(name="ir_act_window", indexes={@ORM\Index(name="IDX_394F2CD87C455263", columns={"write_uid"}), @ORM\Index(name="IDX_394F2CD84C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_394F2CD8DAC4C9DB", columns={"binding_model_id"}), @ORM\Index(name="IDX_394F2CD88EC4F75D", columns={"search_view_id"}), @ORM\Index(name="IDX_394F2CD831518C7", columns={"view_id"})})
 * @ORM\Entity
 */
class IrActWindow
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_window_id_seq", allocationSize=1, initialValue=1)
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
     * @var string|null
     *
     * @ORM\Column(name="domain", type="string", nullable=true, options={"comment"="Domain Value"})
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", nullable=false, options={"comment"="Context Value"})
     */
    private $context;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true, options={"comment"="Record ID"})
     */
    private $resId;

    /**
     * @var string
     *
     * @ORM\Column(name="res_model", type="string", nullable=false, options={"comment"="Destination Model"})
     */
    private $resModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="src_model", type="string", nullable=true, options={"comment"="Source Model"})
     */
    private $srcModel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target", type="string", nullable=true, options={"comment"="Target Window"})
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="view_mode", type="string", nullable=false, options={"comment"="View Mode"})
     */
    private $viewMode;

    /**
     * @var string
     *
     * @ORM\Column(name="view_type", type="string", nullable=false, options={"comment"="View Type"})
     */
    private $viewType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usage", type="string", nullable=true, options={"comment"="Action Usage"})
     */
    private $usage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="limit", type="integer", nullable=true, options={"comment"="Limit"})
     */
    private $limit;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="filter", type="boolean", nullable=true, options={"comment"="Filter"})
     */
    private $filter;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auto_search", type="boolean", nullable=true, options={"comment"="Auto Search"})
     */
    private $autoSearch;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="multi", type="boolean", nullable=true, options={"comment"="Restrict to lists"})
     */
    private $multi;

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
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="search_view_id", referencedColumnName="id")
     * })
     */
    private $searchView;

    /**
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="view_id", referencedColumnName="id")
     * })
     */
    private $view;


}

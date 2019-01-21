<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrUiView
 *
 * @ORM\Table(name="ir_ui_view", indexes={@ORM\Index(name="ir_ui_view_model_index", columns={"model"}), @ORM\Index(name="ir_ui_view_inherit_id_index", columns={"inherit_id"}), @ORM\Index(name="ir_ui_view_model_type_inherit_id", columns={"model", "inherit_id"}), @ORM\Index(name="IDX_687AC0637C455263", columns={"write_uid"}), @ORM\Index(name="IDX_687AC0634C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrUiView
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_ui_view_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="View Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model", type="string", nullable=true, options={"comment"="Model"})
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="key", type="string", nullable=true, options={"comment"="Key"})
     */
    private $key;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"comment"="Sequence"})
     */
    private $priority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", nullable=true, options={"comment"="View Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arch_db", type="text", nullable=true, options={"comment"="Arch Blob"})
     */
    private $archDb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arch_fs", type="string", nullable=true, options={"comment"="Arch Filename"})
     */
    private $archFs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_parent", type="string", nullable=true, options={"comment"="Child Field"})
     */
    private $fieldParent;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Create Date"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true, options={"comment"="Last Modification Date"})
     */
    private $writeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", nullable=false, options={"comment"="View inheritance mode"})
     */
    private $mode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

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
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inherit_id", referencedColumnName="id")
     * })
     */
    private $inherit;


}

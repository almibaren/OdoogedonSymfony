<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModuleCategory
 *
 * @ORM\Table(name="ir_module_category", indexes={@ORM\Index(name="ir_module_category_name_index", columns={"name"}), @ORM\Index(name="ir_module_category_parent_id_index", columns={"parent_id"}), @ORM\Index(name="IDX_3BB727C27C455263", columns={"write_uid"}), @ORM\Index(name="IDX_3BB727C24C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModuleCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_module_category_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Description"})
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true, options={"comment"="Visible"})
     */
    private $visible;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="exclusive", type="boolean", nullable=true, options={"comment"="Exclusive"})
     */
    private $exclusive;

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
     * @var \IrModuleCategory
     *
     * @ORM\ManyToOne(targetEntity="IrModuleCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}

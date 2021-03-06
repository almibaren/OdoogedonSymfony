<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrUiMenu
 *
 * @ORM\Table(name="ir_ui_menu", indexes={@ORM\Index(name="ir_ui_menu_parent_id_index", columns={"parent_id"}), @ORM\Index(name="ir_ui_menu_parent_left_index", columns={"parent_left"}), @ORM\Index(name="ir_ui_menu_parent_right_index", columns={"parent_right"}), @ORM\Index(name="IDX_EB82517E7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_EB82517E4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrUiMenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_ui_menu_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_left", type="integer", nullable=true)
     */
    private $parentLeft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_right", type="integer", nullable=true)
     */
    private $parentRight;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Menu"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web_icon", type="string", nullable=true, options={"comment"="Web Icon File"})
     */
    private $webIcon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="action", type="string", nullable=true, options={"comment"="Action"})
     */
    private $action;

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
     * @var \IrUiMenu
     *
     * @ORM\ManyToOne(targetEntity="IrUiMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}

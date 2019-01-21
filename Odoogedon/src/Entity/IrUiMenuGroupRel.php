<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrUiMenuGroupRel
 *
 * @ORM\Table(name="ir_ui_menu_group_rel", uniqueConstraints={@ORM\UniqueConstraint(name="ir_ui_menu_group_rel_menu_id_gid_key", columns={"menu_id", "gid"})}, indexes={@ORM\Index(name="ir_ui_menu_group_rel_menu_id_idx", columns={"menu_id"}), @ORM\Index(name="ir_ui_menu_group_rel_gid_idx", columns={"gid"})})
 * @ORM\Entity
 */
class IrUiMenuGroupRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_ui_menu_group_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gid", referencedColumnName="id")
     * })
     */
    private $gid;

    /**
     * @var \IrUiMenu
     *
     * @ORM\ManyToOne(targetEntity="IrUiMenu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu_id", referencedColumnName="id")
     * })
     */
    private $menu;


}

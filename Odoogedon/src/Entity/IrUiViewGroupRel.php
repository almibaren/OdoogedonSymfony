<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrUiViewGroupRel
 *
 * @ORM\Table(name="ir_ui_view_group_rel", uniqueConstraints={@ORM\UniqueConstraint(name="ir_ui_view_group_rel_view_id_group_id_key", columns={"view_id", "group_id"})}, indexes={@ORM\Index(name="ir_ui_view_group_rel_group_id_idx", columns={"group_id"}), @ORM\Index(name="ir_ui_view_group_rel_view_id_idx", columns={"view_id"})})
 * @ORM\Entity
 */
class IrUiViewGroupRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_ui_view_group_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

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

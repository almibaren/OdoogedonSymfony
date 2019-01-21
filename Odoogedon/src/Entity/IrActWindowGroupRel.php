<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActWindowGroupRel
 *
 * @ORM\Table(name="ir_act_window_group_rel", uniqueConstraints={@ORM\UniqueConstraint(name="ir_act_window_group_rel_act_id_gid_key", columns={"act_id", "gid"})}, indexes={@ORM\Index(name="ir_act_window_group_rel_act_id_idx", columns={"act_id"}), @ORM\Index(name="ir_act_window_group_rel_gid_idx", columns={"gid"})})
 * @ORM\Entity
 */
class IrActWindowGroupRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_window_group_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \IrActWindow
     *
     * @ORM\ManyToOne(targetEntity="IrActWindow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_id", referencedColumnName="id")
     * })
     */
    private $act;


}

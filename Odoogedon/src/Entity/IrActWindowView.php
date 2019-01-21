<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActWindowView
 *
 * @ORM\Table(name="ir_act_window_view", uniqueConstraints={@ORM\UniqueConstraint(name="act_window_view_unique_mode_per_action", columns={"act_window_id", "view_mode"})}, indexes={@ORM\Index(name="IDX_85FBB8CC7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_85FBB8CC4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_85FBB8CCE2390CF6", columns={"act_window_id"}), @ORM\Index(name="IDX_85FBB8CC31518C7", columns={"view_id"})})
 * @ORM\Entity
 */
class IrActWindowView
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_window_view_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="view_mode", type="string", nullable=false, options={"comment"="View Type"})
     */
    private $viewMode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="multi", type="boolean", nullable=true, options={"comment"="On Multiple Doc."})
     */
    private $multi;

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
     * @var \IrActWindow
     *
     * @ORM\ManyToOne(targetEntity="IrActWindow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="act_window_id", referencedColumnName="id")
     * })
     */
    private $actWindow;

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

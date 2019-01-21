<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebPlanner
 *
 * @ORM\Table(name="web_planner", indexes={@ORM\Index(name="IDX_7DFED9FF7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7DFED9FF4C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_7DFED9FF31518C7", columns={"view_id"}), @ORM\Index(name="IDX_7DFED9FFCCD7E912", columns={"menu_id"})})
 * @ORM\Entity
 */
class WebPlanner
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="web_planner_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tooltip_planner", type="text", nullable=true, options={"comment"="Planner Tooltips"})
     */
    private $tooltipPlanner;

    /**
     * @var string
     *
     * @ORM\Column(name="planner_application", type="string", nullable=false, options={"comment"="Planner Application"})
     */
    private $plannerApplication;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

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
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="view_id", referencedColumnName="id")
     * })
     */
    private $view;

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

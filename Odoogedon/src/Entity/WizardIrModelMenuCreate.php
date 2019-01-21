<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WizardIrModelMenuCreate
 *
 * @ORM\Table(name="wizard_ir_model_menu_create", indexes={@ORM\Index(name="IDX_83B8C8597C455263", columns={"write_uid"}), @ORM\Index(name="IDX_83B8C8594C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_83B8C859CCD7E912", columns={"menu_id"})})
 * @ORM\Entity
 */
class WizardIrModelMenuCreate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="wizard_ir_model_menu_create_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Menu Name"})
     */
    private $name;

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
     *   @ORM\JoinColumn(name="menu_id", referencedColumnName="id")
     * })
     */
    private $menu;


}

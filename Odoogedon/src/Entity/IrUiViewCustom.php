<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrUiViewCustom
 *
 * @ORM\Table(name="ir_ui_view_custom", indexes={@ORM\Index(name="ir_ui_view_custom_ref_id_index", columns={"ref_id"}), @ORM\Index(name="ir_ui_view_custom_user_id_ref_id", columns={"user_id", "ref_id"}), @ORM\Index(name="ir_ui_view_custom_user_id_index", columns={"user_id"}), @ORM\Index(name="IDX_EAF19E567C455263", columns={"write_uid"}), @ORM\Index(name="IDX_EAF19E564C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrUiViewCustom
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_ui_view_custom_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="arch", type="text", nullable=false, options={"comment"="View Architecture"})
     */
    private $arch;

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
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \IrUiView
     *
     * @ORM\ManyToOne(targetEntity="IrUiView")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_id", referencedColumnName="id")
     * })
     */
    private $ref;


}

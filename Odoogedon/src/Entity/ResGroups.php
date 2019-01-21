<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResGroups
 *
 * @ORM\Table(name="res_groups", uniqueConstraints={@ORM\UniqueConstraint(name="res_groups_name_uniq", columns={"category_id", "name"})}, indexes={@ORM\Index(name="res_groups_category_id_index", columns={"category_id"}), @ORM\Index(name="IDX_B12F6EC67C455263", columns={"write_uid"}), @ORM\Index(name="IDX_B12F6EC64C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ResGroups
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_groups_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", nullable=true, options={"comment"="Comment"})
     */
    private $comment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="share", type="boolean", nullable=true, options={"comment"="Share Group"})
     */
    private $share;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_portal", type="boolean", nullable=true, options={"comment"="Portal"})
     */
    private $isPortal;

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
     * @var \IrModuleCategory
     *
     * @ORM\ManyToOne(targetEntity="IrModuleCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;


}

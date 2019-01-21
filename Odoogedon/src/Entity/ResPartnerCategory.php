<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResPartnerCategory
 *
 * @ORM\Table(name="res_partner_category", indexes={@ORM\Index(name="res_partner_category_parent_right_index", columns={"parent_right"}), @ORM\Index(name="res_partner_category_parent_left_index", columns={"parent_left"}), @ORM\Index(name="res_partner_category_parent_id_index", columns={"parent_id"}), @ORM\Index(name="IDX_7992F3E77C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7992F3E74C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class ResPartnerCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_partner_category_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Tag Name"})
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="color", type="integer", nullable=true, options={"comment"="Color Index"})
     */
    private $color;

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
     * @var \ResPartnerCategory
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;


}

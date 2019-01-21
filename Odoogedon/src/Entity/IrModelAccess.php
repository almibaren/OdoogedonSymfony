<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModelAccess
 *
 * @ORM\Table(name="ir_model_access", indexes={@ORM\Index(name="ir_model_access_name_index", columns={"name"}), @ORM\Index(name="ir_model_access_model_id_index", columns={"model_id"}), @ORM\Index(name="ir_model_access_group_id_index", columns={"group_id"}), @ORM\Index(name="IDX_983F0D637C455263", columns={"write_uid"}), @ORM\Index(name="IDX_983F0D634C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModelAccess
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_model_access_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_read", type="boolean", nullable=true, options={"comment"="Read Access"})
     */
    private $permRead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_write", type="boolean", nullable=true, options={"comment"="Write Access"})
     */
    private $permWrite;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_create", type="boolean", nullable=true, options={"comment"="Create Access"})
     */
    private $permCreate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_unlink", type="boolean", nullable=true, options={"comment"="Delete Access"})
     */
    private $permUnlink;

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
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     * })
     */
    private $model;


}

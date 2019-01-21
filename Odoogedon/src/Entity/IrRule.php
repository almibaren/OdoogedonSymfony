<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrRule
 *
 * @ORM\Table(name="ir_rule", indexes={@ORM\Index(name="ir_rule_name_index", columns={"name"}), @ORM\Index(name="ir_rule_model_id_index", columns={"model_id"}), @ORM\Index(name="IDX_187751487C455263", columns={"write_uid"}), @ORM\Index(name="IDX_187751484C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_rule_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain_force", type="text", nullable=true, options={"comment"="Domain"})
     */
    private $domainForce;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_read", type="boolean", nullable=true, options={"comment"="Apply for Read"})
     */
    private $permRead;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_write", type="boolean", nullable=true, options={"comment"="Apply for Write"})
     */
    private $permWrite;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_create", type="boolean", nullable=true, options={"comment"="Apply for Create"})
     */
    private $permCreate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="perm_unlink", type="boolean", nullable=true, options={"comment"="Apply for Delete"})
     */
    private $permUnlink;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="global", type="boolean", nullable=true, options={"comment"="Global"})
     */
    private $global;

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
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     * })
     */
    private $model;


}

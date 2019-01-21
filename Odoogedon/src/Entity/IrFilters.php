<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrFilters
 *
 * @ORM\Table(name="ir_filters", uniqueConstraints={@ORM\UniqueConstraint(name="ir_filters_name_model_uid_unique_action_index", columns={"model_id"}), @ORM\UniqueConstraint(name="ir_filters_name_model_uid_unique", columns={"name", "model_id", "user_id", "action_id"})}, indexes={@ORM\Index(name="IDX_7930F5067C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7930F5064C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_7930F506A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class IrFilters
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_filters_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Filter Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="text", nullable=false, options={"comment"="Domain"})
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="text", nullable=false, options={"comment"="Context"})
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="text", nullable=false, options={"comment"="Sort"})
     */
    private $sort;

    /**
     * @var string
     *
     * @ORM\Column(name="model_id", type="string", nullable=false, options={"comment"="Model"})
     */
    private $modelId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=true, options={"comment"="Default Filter"})
     */
    private $isDefault;

    /**
     * @var int|null
     *
     * @ORM\Column(name="action_id", type="integer", nullable=true, options={"comment"="Action"})
     */
    private $actionId;

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
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}

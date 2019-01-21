<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseModuleUpdate
 *
 * @ORM\Table(name="base_module_update", indexes={@ORM\Index(name="IDX_BA9D40EE7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_BA9D40EE4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class BaseModuleUpdate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_module_update_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated", type="integer", nullable=true, options={"comment"="Number of modules updated"})
     */
    private $updated;

    /**
     * @var int|null
     *
     * @ORM\Column(name="added", type="integer", nullable=true, options={"comment"="Number of modules added"})
     */
    private $added;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

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


}

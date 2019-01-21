<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseModuleUninstall
 *
 * @ORM\Table(name="base_module_uninstall", indexes={@ORM\Index(name="IDX_459630D77C455263", columns={"write_uid"}), @ORM\Index(name="IDX_459630D74C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_459630D7AFC2B591", columns={"module_id"})})
 * @ORM\Entity
 */
class BaseModuleUninstall
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_module_uninstall_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="show_all", type="boolean", nullable=true, options={"comment"="Show All"})
     */
    private $showAll;

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
     * @var \IrModuleModule
     *
     * @ORM\ManyToOne(targetEntity="IrModuleModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     * })
     */
    private $module;


}

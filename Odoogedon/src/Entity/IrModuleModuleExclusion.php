<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModuleModuleExclusion
 *
 * @ORM\Table(name="ir_module_module_exclusion", indexes={@ORM\Index(name="ir_module_module_exclusion_name_index", columns={"name"}), @ORM\Index(name="IDX_7A73BA57C455263", columns={"write_uid"}), @ORM\Index(name="IDX_7A73BA54C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_7A73BA5AFC2B591", columns={"module_id"})})
 * @ORM\Entity
 */
class IrModuleModuleExclusion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_module_module_exclusion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
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
     * @var \IrModuleModule
     *
     * @ORM\ManyToOne(targetEntity="IrModuleModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     * })
     */
    private $module;


}

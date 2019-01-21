<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModelRelation
 *
 * @ORM\Table(name="ir_model_relation", indexes={@ORM\Index(name="ir_model_relation_module_index", columns={"module"}), @ORM\Index(name="ir_model_relation_model_index", columns={"model"}), @ORM\Index(name="ir_model_relation_name_index", columns={"name"}), @ORM\Index(name="IDX_2083FCD67C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2083FCD64C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModelRelation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_model_relation_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Relation Name"})
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_update", type="datetime", nullable=true, options={"comment"="Update Date"})
     */
    private $dateUpdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_init", type="datetime", nullable=true, options={"comment"="Initialization Date"})
     */
    private $dateInit;

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
     *   @ORM\JoinColumn(name="module", referencedColumnName="id")
     * })
     */
    private $module;

    /**
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model", referencedColumnName="id")
     * })
     */
    private $model;


}

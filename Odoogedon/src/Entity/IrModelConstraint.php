<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModelConstraint
 *
 * @ORM\Table(name="ir_model_constraint", uniqueConstraints={@ORM\UniqueConstraint(name="ir_model_constraint_module_name_uniq", columns={"name", "module"})}, indexes={@ORM\Index(name="ir_model_constraint_model_index", columns={"model"}), @ORM\Index(name="ir_model_constraint_name_index", columns={"name"}), @ORM\Index(name="ir_model_constraint_type_index", columns={"type"}), @ORM\Index(name="ir_model_constraint_module_index", columns={"module"}), @ORM\Index(name="IDX_932030297C455263", columns={"write_uid"}), @ORM\Index(name="IDX_932030294C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModelConstraint
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_model_constraint_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Constraint"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="definition", type="string", nullable=true, options={"comment"="Definition"})
     */
    private $definition;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1, nullable=false, options={"comment"="Constraint Type"})
     */
    private $type;

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

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModelFieldsGroupRel
 *
 * @ORM\Table(name="ir_model_fields_group_rel", uniqueConstraints={@ORM\UniqueConstraint(name="ir_model_fields_group_rel_field_id_group_id_key", columns={"field_id", "group_id"})}, indexes={@ORM\Index(name="ir_model_fields_group_rel_field_id_idx", columns={"field_id"}), @ORM\Index(name="ir_model_fields_group_rel_group_id_idx", columns={"group_id"})})
 * @ORM\Entity
 */
class IrModelFieldsGroupRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_model_fields_group_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \IrModelFields
     *
     * @ORM\ManyToOne(targetEntity="IrModelFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_id", referencedColumnName="id")
     * })
     */
    private $field;


}

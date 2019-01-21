<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModelFields
 *
 * @ORM\Table(name="ir_model_fields", uniqueConstraints={@ORM\UniqueConstraint(name="ir_model_fields_name_unique", columns={"model", "name"})}, indexes={@ORM\Index(name="ir_model_fields_model_index", columns={"model"}), @ORM\Index(name="ir_model_fields_model_id_index", columns={"model_id"}), @ORM\Index(name="ir_model_fields_name_index", columns={"name"}), @ORM\Index(name="ir_model_fields_complete_name_index", columns={"complete_name"}), @ORM\Index(name="ir_model_fields_state_index", columns={"state"}), @ORM\Index(name="IDX_E0B3C5BF7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E0B3C5BF4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModelFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_model_fields_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Field Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complete_name", type="string", nullable=true, options={"comment"="Complete Name"})
     */
    private $completeName;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", nullable=false, options={"comment"="Object Name"})
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="relation", type="string", nullable=true, options={"comment"="Object Relation"})
     */
    private $relation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="relation_field", type="string", nullable=true, options={"comment"="Relation Field"})
     */
    private $relationField;

    /**
     * @var string
     *
     * @ORM\Column(name="field_description", type="string", nullable=false, options={"comment"="Field Label"})
     */
    private $fieldDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help", type="text", nullable=true, options={"comment"="Field Help"})
     */
    private $help;

    /**
     * @var string
     *
     * @ORM\Column(name="ttype", type="string", nullable=false, options={"comment"="Field Type"})
     */
    private $ttype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="selection", type="string", nullable=true, options={"comment"="Selection Options"})
     */
    private $selection;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="copy", type="boolean", nullable=true, options={"comment"="Copied"})
     */
    private $copy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="related", type="string", nullable=true, options={"comment"="Related Field"})
     */
    private $related;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="required", type="boolean", nullable=true, options={"comment"="Required"})
     */
    private $required;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="readonly", type="boolean", nullable=true, options={"comment"="Readonly"})
     */
    private $readonly;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="index", type="boolean", nullable=true, options={"comment"="Indexed"})
     */
    private $index;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="translate", type="boolean", nullable=true, options={"comment"="Translatable"})
     */
    private $translate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="size", type="integer", nullable=true, options={"comment"="Size"})
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="Type"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="on_delete", type="string", nullable=true, options={"comment"="On Delete"})
     */
    private $onDelete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domain", type="string", nullable=true, options={"comment"="Domain"})
     */
    private $domain;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="selectable", type="boolean", nullable=true, options={"comment"="Selectable"})
     */
    private $selectable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="relation_table", type="string", nullable=true, options={"comment"="Relation Table"})
     */
    private $relationTable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column1", type="string", nullable=true, options={"comment"="Column 1"})
     */
    private $column1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="column2", type="string", nullable=true, options={"comment"="Column 2"})
     */
    private $column2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="compute", type="text", nullable=true, options={"comment"="Compute"})
     */
    private $compute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="depends", type="string", nullable=true, options={"comment"="Dependencies"})
     */
    private $depends;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="store", type="boolean", nullable=true, options={"comment"="Stored"})
     */
    private $store;

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
     * @var string|null
     *
     * @ORM\Column(name="track_visibility", type="string", nullable=true, options={"comment"="Tracking"})
     */
    private $trackVisibility;

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
    private $model2;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrProperty
 *
 * @ORM\Table(name="ir_property", indexes={@ORM\Index(name="ir_property_fields_id_index", columns={"fields_id"}), @ORM\Index(name="ir_property_name_index", columns={"name"}), @ORM\Index(name="ir_property_company_id_index", columns={"company_id"}), @ORM\Index(name="ir_property_res_id_index", columns={"res_id"}), @ORM\Index(name="ir_property_type_index", columns={"type"}), @ORM\Index(name="IDX_F19901E47C455263", columns={"write_uid"}), @ORM\Index(name="IDX_F19901E44C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrProperty
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_property_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_id", type="string", nullable=true, options={"comment"="Resource"})
     */
    private $resId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value_float", type="float", precision=10, scale=0, nullable=true, options={"comment"="Value Float"})
     */
    private $valueFloat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_integer", type="integer", nullable=true, options={"comment"="Value Integer"})
     */
    private $valueInteger;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_text", type="text", nullable=true, options={"comment"="Value Text"})
     */
    private $valueText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_binary", type="blob", nullable=true, options={"comment"="Value Binary"})
     */
    private $valueBinary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_reference", type="string", nullable=true, options={"comment"="Value Reference"})
     */
    private $valueReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="value_datetime", type="datetime", nullable=true, options={"comment"="Value Datetime"})
     */
    private $valueDatetime;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $type;

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
     * @var \IrModelFields
     *
     * @ORM\ManyToOne(targetEntity="IrModelFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fields_id", referencedColumnName="id")
     * })
     */
    private $fields;

    /**
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}

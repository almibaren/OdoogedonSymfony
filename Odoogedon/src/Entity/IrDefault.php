<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrDefault
 *
 * @ORM\Table(name="ir_default", indexes={@ORM\Index(name="ir_default_field_id_index", columns={"field_id"}), @ORM\Index(name="ir_default_user_id_index", columns={"user_id"}), @ORM\Index(name="ir_default_company_id_index", columns={"company_id"}), @ORM\Index(name="IDX_E21992547C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E21992544C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrDefault
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_default_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="condition", type="string", nullable=true, options={"comment"="Condition"})
     */
    private $condition;

    /**
     * @var string
     *
     * @ORM\Column(name="json_value", type="string", nullable=false, options={"comment"="Default Value (JSON format)"})
     */
    private $jsonValue;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \ResUsers
     *
     * @ORM\ManyToOne(targetEntity="ResUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

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

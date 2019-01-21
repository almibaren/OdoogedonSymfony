<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActServer
 *
 * @ORM\Table(name="ir_act_server", indexes={@ORM\Index(name="IDX_E8C600F35DA0FB8", columns={"template_id"}), @ORM\Index(name="IDX_E8C600F37C455263", columns={"write_uid"}), @ORM\Index(name="IDX_E8C600F34C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_E8C600F3DAC4C9DB", columns={"binding_model_id"}), @ORM\Index(name="IDX_E8C600F3899D6779", columns={"link_field_id"}), @ORM\Index(name="IDX_E8C600F392F953EB", columns={"crud_model_id"}), @ORM\Index(name="IDX_E8C600F37975B7E7", columns={"model_id"})})
 * @ORM\Entity
 */
class IrActServer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_server_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help", type="text", nullable=true)
     */
    private $help;

    /**
     * @var string
     *
     * @ORM\Column(name="binding_type", type="string", nullable=false)
     */
    private $bindingType;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="write_date", type="datetime", nullable=true)
     */
    private $writeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="usage", type="string", nullable=false, options={"comment"="Usage"})
     */
    private $usage;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="Action To Do"})
     */
    private $state;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_name", type="string", nullable=true, options={"comment"="Model"})
     */
    private $modelName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="text", nullable=true, options={"comment"="Python Code"})
     */
    private $code;

    /**
     * @var \MailTemplate
     *
     * @ORM\ManyToOne(targetEntity="MailTemplate")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_id", referencedColumnName="id")
     * })
     */
    private $template;

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
     *   @ORM\JoinColumn(name="binding_model_id", referencedColumnName="id")
     * })
     */
    private $bindingModel;

    /**
     * @var \IrModelFields
     *
     * @ORM\ManyToOne(targetEntity="IrModelFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="link_field_id", referencedColumnName="id")
     * })
     */
    private $linkField;

    /**
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="crud_model_id", referencedColumnName="id")
     * })
     */
    private $crudModel;

    /**
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     * })
     */
    private $model;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActClient
 *
 * @ORM\Table(name="ir_act_client", indexes={@ORM\Index(name="IDX_75EFD1507C455263", columns={"write_uid"}), @ORM\Index(name="IDX_75EFD1504C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_75EFD150DAC4C9DB", columns={"binding_model_id"})})
 * @ORM\Entity
 */
class IrActClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_client_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="tag", type="string", nullable=false, options={"comment"="Client action tag"})
     */
    private $tag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target", type="string", nullable=true, options={"comment"="Target Window"})
     */
    private $target;

    /**
     * @var string|null
     *
     * @ORM\Column(name="res_model", type="string", nullable=true, options={"comment"="Destination Model"})
     */
    private $resModel;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", nullable=false, options={"comment"="Context Value"})
     */
    private $context;

    /**
     * @var string|null
     *
     * @ORM\Column(name="params_store", type="blob", nullable=true, options={"comment"="Params storage"})
     */
    private $paramsStore;

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


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActions
 *
 * @ORM\Table(name="ir_actions", indexes={@ORM\Index(name="IDX_40F63647C455263", columns={"write_uid"}), @ORM\Index(name="IDX_40F63644C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_40F6364DAC4C9DB", columns={"binding_model_id"})})
 * @ORM\Entity
 */
class IrActions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_actions_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Action Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="help", type="text", nullable=true, options={"comment"="Action Description"})
     */
    private $help;

    /**
     * @var string
     *
     * @ORM\Column(name="binding_type", type="string", nullable=false, options={"comment"="Binding Type"})
     */
    private $bindingType;

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
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="binding_model_id", referencedColumnName="id")
     * })
     */
    private $bindingModel;


}

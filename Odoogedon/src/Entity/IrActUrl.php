<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActUrl
 *
 * @ORM\Table(name="ir_act_url", indexes={@ORM\Index(name="IDX_AB81B2177C455263", columns={"write_uid"}), @ORM\Index(name="IDX_AB81B2174C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_AB81B217DAC4C9DB", columns={"binding_model_id"})})
 * @ORM\Entity
 */
class IrActUrl
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_url_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="url", type="text", nullable=false, options={"comment"="Action URL"})
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", nullable=false, options={"comment"="Action Target"})
     */
    private $target;

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

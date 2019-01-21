<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModel
 *
 * @ORM\Table(name="ir_model", uniqueConstraints={@ORM\UniqueConstraint(name="ir_model_obj_name_uniq", columns={"model"})}, indexes={@ORM\Index(name="ir_model_model_index", columns={"model"}), @ORM\Index(name="IDX_3D1E9A1D7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_3D1E9A1D4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_model_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Model Description"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", nullable=false, options={"comment"="Model"})
     */
    private $model;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info", type="text", nullable=true, options={"comment"="Information"})
     */
    private $info;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Type"})
     */
    private $state;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="transient", type="boolean", nullable=true, options={"comment"="Transient Model"})
     */
    private $transient;

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
     * @var bool|null
     *
     * @ORM\Column(name="is_mail_thread", type="boolean", nullable=true, options={"comment"="Mail Thread"})
     */
    private $isMailThread;

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


}

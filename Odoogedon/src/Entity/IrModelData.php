<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrModelData
 *
 * @ORM\Table(name="ir_model_data", uniqueConstraints={@ORM\UniqueConstraint(name="ir_model_data_module_name_uniq_index", columns={"module", "name"})}, indexes={@ORM\Index(name="ir_model_data_model_res_id_index", columns={"model", "res_id"}), @ORM\Index(name="IDX_C60B174F7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_C60B174F4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrModelData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_model_data_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var bool|null
     *
     * @ORM\Column(name="noupdate", type="boolean", nullable=true)
     */
    private $noupdate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_init", type="datetime", nullable=true)
     */
    private $dateInit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_update", type="datetime", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", nullable=false)
     */
    private $model;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true)
     */
    private $resId;

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

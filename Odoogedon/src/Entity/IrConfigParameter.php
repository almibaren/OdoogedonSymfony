<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrConfigParameter
 *
 * @ORM\Table(name="ir_config_parameter", uniqueConstraints={@ORM\UniqueConstraint(name="ir_config_parameter_key_uniq", columns={"key"})}, indexes={@ORM\Index(name="ir_config_parameter_key_index", columns={"key"}), @ORM\Index(name="IDX_881413617C455263", columns={"write_uid"}), @ORM\Index(name="IDX_881413614C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrConfigParameter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_config_parameter_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", nullable=false, options={"comment"="Key"})
     */
    private $key;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false, options={"comment"="Value"})
     */
    private $value;

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


}

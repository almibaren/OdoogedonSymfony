<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrLogging
 *
 * @ORM\Table(name="ir_logging", indexes={@ORM\Index(name="ir_logging_level_index", columns={"level"}), @ORM\Index(name="ir_logging_dbname_index", columns={"dbname"}), @ORM\Index(name="ir_logging_type_index", columns={"type"}), @ORM\Index(name="IDX_CBD2F0717C455263", columns={"write_uid"})})
 * @ORM\Entity
 */
class IrLogging
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_logging_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="Create Date"})
     */
    private $createDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="create_uid", type="integer", nullable=true, options={"comment"="Uid"})
     */
    private $createUid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dbname", type="string", nullable=true, options={"comment"="Database Name"})
     */
    private $dbname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="level", type="string", nullable=true, options={"comment"="Level"})
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false, options={"comment"="Message"})
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", nullable=false, options={"comment"="Path"})
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="func", type="string", nullable=false, options={"comment"="Function"})
     */
    private $func;

    /**
     * @var string
     *
     * @ORM\Column(name="line", type="string", nullable=false, options={"comment"="Line"})
     */
    private $line;

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


}

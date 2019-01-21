<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrExportsLine
 *
 * @ORM\Table(name="ir_exports_line", indexes={@ORM\Index(name="ir_exports_line_export_id_index", columns={"export_id"}), @ORM\Index(name="IDX_761089CE7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_761089CE4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrExportsLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_exports_line_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Field Name"})
     */
    private $name;

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
     * @var \IrExports
     *
     * @ORM\ManyToOne(targetEntity="IrExports")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="export_id", referencedColumnName="id")
     * })
     */
    private $export;


}

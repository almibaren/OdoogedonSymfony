<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrExports
 *
 * @ORM\Table(name="ir_exports", indexes={@ORM\Index(name="ir_exports_resource_index", columns={"resource"}), @ORM\Index(name="IDX_ED6986CB7C455263", columns={"write_uid"}), @ORM\Index(name="IDX_ED6986CB4C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrExports
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_exports_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Export Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource", type="string", nullable=true, options={"comment"="Resource"})
     */
    private $resource;

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

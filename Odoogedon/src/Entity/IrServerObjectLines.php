<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrServerObjectLines
 *
 * @ORM\Table(name="ir_server_object_lines", indexes={@ORM\Index(name="IDX_215838307C455263", columns={"write_uid"}), @ORM\Index(name="IDX_215838304C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_21583830D3CA2F7D", columns={"col1"}), @ORM\Index(name="IDX_215838301844E6B7", columns={"server_id"})})
 * @ORM\Entity
 */
class IrServerObjectLines
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_server_object_lines_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false, options={"comment"="Value"})
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false, options={"comment"="Evaluation Type"})
     */
    private $type;

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
     * @var \IrModelFields
     *
     * @ORM\ManyToOne(targetEntity="IrModelFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="col1", referencedColumnName="id")
     * })
     */
    private $col1;

    /**
     * @var \IrActServer
     *
     * @ORM\ManyToOne(targetEntity="IrActServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="server_id", referencedColumnName="id")
     * })
     */
    private $server;


}

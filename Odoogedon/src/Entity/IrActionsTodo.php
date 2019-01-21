<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActionsTodo
 *
 * @ORM\Table(name="ir_actions_todo", indexes={@ORM\Index(name="ir_actions_todo_action_id_index", columns={"action_id"}), @ORM\Index(name="IDX_2D3ACDE27C455263", columns={"write_uid"}), @ORM\Index(name="IDX_2D3ACDE24C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class IrActionsTodo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_actions_todo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="action_id", type="integer", nullable=false, options={"comment"="Action"})
     */
    private $actionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true, options={"comment"="Name"})
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


}

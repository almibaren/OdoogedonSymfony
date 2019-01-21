<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelServerActions
 *
 * @ORM\Table(name="rel_server_actions", uniqueConstraints={@ORM\UniqueConstraint(name="rel_server_actions_server_id_action_id_key", columns={"server_id", "action_id"})}, indexes={@ORM\Index(name="rel_server_actions_server_id_idx", columns={"server_id"}), @ORM\Index(name="rel_server_actions_action_id_idx", columns={"action_id"})})
 * @ORM\Entity
 */
class RelServerActions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rel_server_actions_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \IrActServer
     *
     * @ORM\ManyToOne(targetEntity="IrActServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_id", referencedColumnName="id")
     * })
     */
    private $action;

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

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActServerMailChannelRel
 *
 * @ORM\Table(name="ir_act_server_mail_channel_rel", uniqueConstraints={@ORM\UniqueConstraint(name="ir_act_server_mail_channel_re_ir_act_server_id_mail_channel_key", columns={"ir_act_server_id", "mail_channel_id"})}, indexes={@ORM\Index(name="ir_act_server_mail_channel_rel_mail_channel_id_idx", columns={"mail_channel_id"}), @ORM\Index(name="ir_act_server_mail_channel_rel_ir_act_server_id_idx", columns={"ir_act_server_id"})})
 * @ORM\Entity
 */
class IrActServerMailChannelRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_server_mail_channel_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MailChannel
     *
     * @ORM\ManyToOne(targetEntity="MailChannel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_channel_id", referencedColumnName="id")
     * })
     */
    private $mailChannel;

    /**
     * @var \IrActServer
     *
     * @ORM\ManyToOne(targetEntity="IrActServer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ir_act_server_id", referencedColumnName="id")
     * })
     */
    private $irActServer;


}

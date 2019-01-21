<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailChannelResGroupsRel
 *
 * @ORM\Table(name="mail_channel_res_groups_rel", uniqueConstraints={@ORM\UniqueConstraint(name="mail_channel_res_groups_rel_mail_channel_id_res_groups_id_key", columns={"mail_channel_id", "res_groups_id"})}, indexes={@ORM\Index(name="mail_channel_res_groups_rel_mail_channel_id_idx", columns={"mail_channel_id"}), @ORM\Index(name="mail_channel_res_groups_rel_res_groups_id_idx", columns={"res_groups_id"})})
 * @ORM\Entity
 */
class MailChannelResGroupsRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_channel_res_groups_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResGroups
     *
     * @ORM\ManyToOne(targetEntity="ResGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_groups_id", referencedColumnName="id")
     * })
     */
    private $resGroups;

    /**
     * @var \MailChannel
     *
     * @ORM\ManyToOne(targetEntity="MailChannel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_channel_id", referencedColumnName="id")
     * })
     */
    private $mailChannel;


}

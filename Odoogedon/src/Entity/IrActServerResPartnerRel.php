<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrActServerResPartnerRel
 *
 * @ORM\Table(name="ir_act_server_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="ir_act_server_res_partner_rel_ir_act_server_id_res_partner__key", columns={"ir_act_server_id", "res_partner_id"})}, indexes={@ORM\Index(name="ir_act_server_res_partner_rel_ir_act_server_id_idx", columns={"ir_act_server_id"}), @ORM\Index(name="ir_act_server_res_partner_rel_res_partner_id_idx", columns={"res_partner_id"})})
 * @ORM\Entity
 */
class IrActServerResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_act_server_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_partner_id", referencedColumnName="id")
     * })
     */
    private $resPartner;

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

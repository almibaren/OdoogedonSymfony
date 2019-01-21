<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiLibroResPartnerRel
 *
 * @ORM\Table(name="almi_libro_res_partner_rel", uniqueConstraints={@ORM\UniqueConstraint(name="almi_libro_res_partner_rel_almi_libro_id_res_partner_id_key", columns={"almi_libro_id", "res_partner_id"})}, indexes={@ORM\Index(name="almi_libro_res_partner_rel_almi_libro_id_idx", columns={"almi_libro_id"}), @ORM\Index(name="almi_libro_res_partner_rel_res_partner_id_idx", columns={"res_partner_id"})})
 * @ORM\Entity
 */
class AlmiLibroResPartnerRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_libro_res_partner_rel_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AlmiLibro
     *
     * @ORM\ManyToOne(targetEntity="AlmiLibro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almi_libro_id", referencedColumnName="id")
     * })
     */
    private $almiLibro;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResCountryResCountryGroupRel
 *
 * @ORM\Table(name="res_country_res_country_group_rel", uniqueConstraints={@ORM\UniqueConstraint(name="res_country_res_country_group_res_country_id_res_country_gr_key", columns={"res_country_id", "res_country_group_id"})}, indexes={@ORM\Index(name="res_country_res_country_group_rel_res_country_group_id_idx", columns={"res_country_group_id"}), @ORM\Index(name="res_country_res_country_group_rel_res_country_id_idx", columns={"res_country_id"})})
 * @ORM\Entity
 */
class ResCountryResCountryGroupRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_country_res_country_group_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResCountryGroup
     *
     * @ORM\ManyToOne(targetEntity="ResCountryGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_country_group_id", referencedColumnName="id")
     * })
     */
    private $resCountryGroup;

    /**
     * @var \ResCountry
     *
     * @ORM\ManyToOne(targetEntity="ResCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_country_id", referencedColumnName="id")
     * })
     */
    private $resCountry;


}

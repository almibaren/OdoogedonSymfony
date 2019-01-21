<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResPartnerResPartnerCategoryRel
 *
 * @ORM\Table(name="res_partner_res_partner_category_rel", uniqueConstraints={@ORM\UniqueConstraint(name="res_partner_res_partner_category_rel_category_id_partner_id_key", columns={"category_id", "partner_id"})}, indexes={@ORM\Index(name="res_partner_res_partner_category_rel_partner_id_idx", columns={"partner_id"}), @ORM\Index(name="res_partner_res_partner_category_rel_category_id_idx", columns={"category_id"})})
 * @ORM\Entity
 */
class ResPartnerResPartnerCategoryRel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="res_partner_res_partner_category_rel_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;

    /**
     * @var \ResPartnerCategory
     *
     * @ORM\ManyToOne(targetEntity="ResPartnerCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseImportTestsModelsM2oRequired
 *
 * @ORM\Table(name="base_import_tests_models_m2o_required", indexes={@ORM\Index(name="IDX_DFF788B97C455263", columns={"write_uid"}), @ORM\Index(name="IDX_DFF788B94C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_DFF788B91D775834", columns={"value"})})
 * @ORM\Entity
 */
class BaseImportTestsModelsM2oRequired
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_import_tests_models_m2o_required_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \BaseImportTestsModelsM2oRequiredRelated
     *
     * @ORM\ManyToOne(targetEntity="BaseImportTestsModelsM2oRequiredRelated")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="value", referencedColumnName="id")
     * })
     */
    private $value;


}

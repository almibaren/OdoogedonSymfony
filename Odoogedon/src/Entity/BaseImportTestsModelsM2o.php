<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseImportTestsModelsM2o
 *
 * @ORM\Table(name="base_import_tests_models_m2o", indexes={@ORM\Index(name="IDX_678CAAD77C455263", columns={"write_uid"}), @ORM\Index(name="IDX_678CAAD74C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_678CAAD71D775834", columns={"value"})})
 * @ORM\Entity
 */
class BaseImportTestsModelsM2o
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_import_tests_models_m2o_id_seq", allocationSize=1, initialValue=1)
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
     * @var \BaseImportTestsModelsM2oRelated
     *
     * @ORM\ManyToOne(targetEntity="BaseImportTestsModelsM2oRelated")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="value", referencedColumnName="id")
     * })
     */
    private $value;


}

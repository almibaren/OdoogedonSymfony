<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseImportTestsModelsCharRequired
 *
 * @ORM\Table(name="base_import_tests_models_char_required", indexes={@ORM\Index(name="IDX_C17A22737C455263", columns={"write_uid"}), @ORM\Index(name="IDX_C17A22734C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class BaseImportTestsModelsCharRequired
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="base_import_tests_models_char_required_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", nullable=false, options={"comment"="Value"})
     */
    private $value;

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

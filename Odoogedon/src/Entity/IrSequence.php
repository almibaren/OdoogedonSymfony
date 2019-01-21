<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrSequence
 *
 * @ORM\Table(name="ir_sequence", indexes={@ORM\Index(name="IDX_28EDCA117C455263", columns={"write_uid"}), @ORM\Index(name="IDX_28EDCA114C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_28EDCA11979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class IrSequence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_sequence_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Name"})
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", nullable=true, options={"comment"="Sequence Code"})
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="implementation", type="string", nullable=false, options={"comment"="Implementation"})
     */
    private $implementation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"comment"="Active"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prefix", type="string", nullable=true, options={"comment"="Prefix"})
     */
    private $prefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="suffix", type="string", nullable=true, options={"comment"="Suffix"})
     */
    private $suffix;

    /**
     * @var int
     *
     * @ORM\Column(name="number_next", type="integer", nullable=false, options={"comment"="Next Number"})
     */
    private $numberNext;

    /**
     * @var int
     *
     * @ORM\Column(name="number_increment", type="integer", nullable=false, options={"comment"="Step"})
     */
    private $numberIncrement;

    /**
     * @var int
     *
     * @ORM\Column(name="padding", type="integer", nullable=false, options={"comment"="Sequence Size"})
     */
    private $padding;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_date_range", type="boolean", nullable=true, options={"comment"="Use subsequences per date_range"})
     */
    private $useDateRange;

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
     * @var \ResCompany
     *
     * @ORM\ManyToOne(targetEntity="ResCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;


}

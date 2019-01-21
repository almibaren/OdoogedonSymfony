<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrSequenceDateRange
 *
 * @ORM\Table(name="ir_sequence_date_range", indexes={@ORM\Index(name="IDX_AB33D8817C455263", columns={"write_uid"}), @ORM\Index(name="IDX_AB33D8814C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_AB33D88198FB19AE", columns={"sequence_id"})})
 * @ORM\Entity
 */
class IrSequenceDateRange
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_sequence_date_range_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_from", type="date", nullable=false, options={"comment"="From"})
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_to", type="date", nullable=false, options={"comment"="To"})
     */
    private $dateTo;

    /**
     * @var int
     *
     * @ORM\Column(name="number_next", type="integer", nullable=false, options={"comment"="Next Number"})
     */
    private $numberNext;

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
     * @var \IrSequence
     *
     * @ORM\ManyToOne(targetEntity="IrSequence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sequence_id", referencedColumnName="id")
     * })
     */
    private $sequence;


}

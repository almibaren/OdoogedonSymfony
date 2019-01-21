<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailActivityType
 *
 * @ORM\Table(name="mail_activity_type", indexes={@ORM\Index(name="mail_activity_type_res_model_id_index", columns={"res_model_id"}), @ORM\Index(name="IDX_95388EB77C455263", columns={"write_uid"}), @ORM\Index(name="IDX_95388EB74C10A2D2", columns={"create_uid"})})
 * @ORM\Entity
 */
class MailActivityType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mail_activity_type_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="summary", type="string", nullable=true, options={"comment"="Summary"})
     */
    private $summary;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true, options={"comment"="Sequence"})
     */
    private $sequence;

    /**
     * @var int|null
     *
     * @ORM\Column(name="days", type="integer", nullable=true, options={"comment"="# Days"})
     */
    private $days;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", nullable=true, options={"comment"="Icon"})
     */
    private $icon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", nullable=true, options={"comment"="Category"})
     */
    private $category;

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
     * @var \IrModel
     *
     * @ORM\ManyToOne(targetEntity="IrModel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_model_id", referencedColumnName="id")
     * })
     */
    private $resModel;


}

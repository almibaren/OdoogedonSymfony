<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebEditorConverterTest
 *
 * @ORM\Table(name="web_editor_converter_test", indexes={@ORM\Index(name="IDX_CD3222057C455263", columns={"write_uid"}), @ORM\Index(name="IDX_CD3222054C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_CD3222051A3EAE0F", columns={"many2one"})})
 * @ORM\Entity
 */
class WebEditorConverterTest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="web_editor_converter_test_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="char", type="string", nullable=true, options={"comment"="Char"})
     */
    private $char;

    /**
     * @var int|null
     *
     * @ORM\Column(name="integer", type="integer", nullable=true, options={"comment"="Integer"})
     */
    private $integer;

    /**
     * @var float|null
     *
     * @ORM\Column(name="float", type="float", precision=10, scale=0, nullable=true, options={"comment"="Float"})
     */
    private $float;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numeric", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Numeric"})
     */
    private $numeric;

    /**
     * @var string|null
     *
     * @ORM\Column(name="binary", type="blob", nullable=true, options={"comment"="Binary"})
     */
    private $binary;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true, options={"comment"="Date"})
     */
    private $date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=true, options={"comment"="Datetime"})
     */
    private $datetime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="selection", type="integer", nullable=true, options={"comment"="Selection"})
     */
    private $selection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="selection_str", type="string", nullable=true, options={"comment"="Lorsqu'un pancake prend l'avion à destination de Toronto et qu'il fait une escale technique à St Claude, on dit:"})
     */
    private $selectionStr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="html", type="text", nullable=true, options={"comment"="Html"})
     */
    private $html;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", nullable=true, options={"comment"="Text"})
     */
    private $text;

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
     * @var \WebEditorConverterTestSub
     *
     * @ORM\ManyToOne(targetEntity="WebEditorConverterTestSub")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="many2one", referencedColumnName="id")
     * })
     */
    private $many2one;


}

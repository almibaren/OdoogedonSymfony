<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IrTranslation
 *
 * @ORM\Table(name="ir_translation", indexes={@ORM\Index(name="ir_translation_type_index", columns={"type"}), @ORM\Index(name="ir_translation_ltn", columns={"name", "lang", "type"}), @ORM\Index(name="ir_translation_module_index", columns={"module"}), @ORM\Index(name="ir_translation_res_id_index", columns={"res_id"}), @ORM\Index(name="ir_translation_comments_index", columns={"comments"}), @ORM\Index(name="IDX_B899F19F31098462", columns={"lang"})})
 * @ORM\Entity
 */
class IrTranslation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ir_translation_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Translated field"})
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="res_id", type="integer", nullable=true, options={"comment"="Record ID"})
     */
    private $resId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", nullable=true, options={"comment"="Type"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="src", type="text", nullable=true, options={"comment"="Internal Source"})
     */
    private $src;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", nullable=true, options={"comment"="Translation Value"})
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", nullable=true, options={"comment"="Module"})
     */
    private $module;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Status"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", nullable=true, options={"comment"="Translation comments"})
     */
    private $comments;

    /**
     * @var \ResLang
     *
     * @ORM\ManyToOne(targetEntity="ResLang")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lang", referencedColumnName="code")
     * })
     */
    private $lang;


}

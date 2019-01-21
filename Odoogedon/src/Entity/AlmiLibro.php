<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmiLibro
 *
 * @ORM\Table(name="almi_libro", indexes={@ORM\Index(name="IDX_5E5B29C07C455263", columns={"write_uid"}), @ORM\Index(name="IDX_5E5B29C04C10A2D2", columns={"create_uid"}), @ORM\Index(name="IDX_5E5B29C040C86FCE", columns={"publisher_id"})})
 * @ORM\Entity
 */
class AlmiLibro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="almi_libro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_name", type="string", nullable=true, options={"comment"="Titulo corto"})
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false, options={"comment"="Titulo"})
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_release", type="date", nullable=true, options={"comment"="Fecha de creacion"})
     */
    private $dateRelease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", nullable=true, options={"comment"="Notas Internas"})
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", nullable=true, options={"comment"="Estado"})
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true, options={"comment"="Descripcion"})
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover", type="blob", nullable=true, options={"comment"="Portada"})
     */
    private $cover;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="out_of_print", type="boolean", nullable=true, options={"comment"="¿Agotado?"})
     */
    private $outOfPrint;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=true, options={"comment"="Ultima vez actualizado"})
     */
    private $dateUpdated;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pages", type="integer", nullable=true, options={"comment"="Numero de paginas"})
     */
    private $pages;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reader_rating", type="decimal", precision=10, scale=0, nullable=true, options={"comment"="Valoracion media"})
     */
    private $readerRating;

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
     * @var \ResPartner
     *
     * @ORM\ManyToOne(targetEntity="ResPartner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publisher_id", referencedColumnName="id")
     * })
     */
    private $publisher;


}

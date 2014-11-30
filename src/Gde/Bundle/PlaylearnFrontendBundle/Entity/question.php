<?php

namespace Gde\Bundle\PlaylearnFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gde\Bundle\PlaylearnFrontendBundle\Entity\questionRepository")
 */
class question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=255, nullable=true)
     */
    private $response;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_last_modification", type="datetime", nullable=true)
     */
    private $dateLastModification;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return question
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string 
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return question
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateLastModification
     *
     * @param \DateTime $dateLastModification
     * @return question
     */
    public function setDateLastModification($dateLastModification)
    {
        $this->dateLastModification = $dateLastModification;

        return $this;
    }

    /**
     * Get dateLastModification
     *
     * @return \DateTime 
     */
    public function getDateLastModification()
    {
        return $this->dateLastModification;
    }
}

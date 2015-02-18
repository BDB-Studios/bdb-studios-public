<?php

namespace BDBStudios\BlogBundle\Entity;

/**
 * Class Enquiry
 * @package BDBStudios\BlogBundle\Entity
 */
class Enquiry
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $email;

    /** @var string */
    protected $subject;

    /** @var string */
    protected $body;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Enquiry
     *
     * @throws \LogicException
     */
    public function setName($name)
    {
        if (false === is_string($name)) {
            throw new \LogicException('A string was expected however ' . gettype($name) . ' was supplied');
        }
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Enquiry
     *
     * @throws \LogicException
     */
    public function setEmail($email)
    {
        if (false === is_string($email)) {
            throw new \LogicException('A string was expected however ' . gettype($email) . ' was supplied');
        }
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return Enquiry
     *
     * @throws \LogicException
     */
    public function setSubject($subject)
    {
        if (false === is_string($subject)) {
            throw new \LogicException('A string was expected however ' . gettype($subject) . ' was supplied');
        }
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return Enquiry
     *
     * @throws \LogicException
     */
    public function setBody($body)
    {
        if (false === is_string($body)) {
            throw new \LogicException('A string was expected however ' . gettype($body) . ' was supplied');
        }
        $this->body = $body;

        return $this;
    }
}

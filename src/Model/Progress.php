<?php
/**
 * @category Agere
 * @package Agere_Progress
 * @author Sergiy Popov <popov@agere.com.ua>
 * @datetime: 29.03.2016 23:14
 */
namespace Agere\ZfcProgress\Model;

use Doctrine\ORM\Mapping as ORM;
use Agere\Core\Model\DomainAwareTrait;
use Magere\Entity\Model\Entity;
use Magere\Entity\Model\Module;
use Magere\Users\Model\Users as User;

/**
 * @ORM\Entity(repositoryClass="Agere\ZfcProgress\Model\Repository\ProgressRepository")
 * @ORM\Table(name="progress", indexes={
 *  @ORM\Index(name="FK_ProgressEntityId", columns={"entityId", "itemId"}),
 *  @ORM\Index(name="FK_ProgressContextEntityId", columns={"contextId", "entityId", "itemId"})
 * })
 */
class Progress
{
    use DomainAwareTrait;

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \DateTime
     * @ORM\Column(name="createdAt", type="datetime")
     */
    protected $createdAt;

    /**
     * @var string
     * @ORM\Column(name="snippet", type="text", nullable=false)
     */
    protected $snippet;

    /**
     * @var array
     * @ORM\Column(name="extra", type="json_array")
     */
    protected $extra;

    /**
     * @var string
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    protected $message;

    /**
     * Executed module context
     *
     * @var Module
     * @ORM\ManyToOne(targetEntity="Magere\Entity\Model\Module")
     * @ORM\JoinColumn(name="contextId", referencedColumnName="id")
     */
    protected $context;

    /**
     * Item (ID) which has modification
     *
     * @var integer
     * @ORM\Column(name="itemId", type="integer", nullable=false)
     */
    protected $itemId;

    /**
     * Registered system entity
     *
     * @var Entity
     * @ORM\ManyToOne(targetEntity="Magere\Entity\Model\Entity")
     * @ORM\JoinColumn(name="entityId", referencedColumnName="id")
     */
    protected $entity;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="Magere\Users\Model\Users")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    protected $user;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Progress
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Progress
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return Progress
     */
    public function setSnippet($snippet)
    {
        $this->snippet = $snippet;

        return $this;
    }

    /**
     * @return array
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param array $extra
     * @return Progress
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Progress
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return Module
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param Module $context
     * @return Progress
     */
    public function setContext(Module $context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Progress
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return Entity
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param Entity $entity
     * @return Progress
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Progress
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}
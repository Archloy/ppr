<?php

namespace picc\piccBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wtf_id", type="integer", nullable=true)
     */
    private $wtfId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="text", nullable=true)
     */
    private $userName;

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_up", type="integer", nullable=true)
     */
    private $voteUp;

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_down", type="integer", nullable=true)
     */
    private $voteDown;

    /**
     * @var string
     *
     * @ORM\Column(name="date_publish", type="text", nullable=true)
     */
    private $datePublish;

    /**
     * @var string
     *
     * @ORM\Column(name="comm", type="text", nullable=true)
     */
    private $comm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set wtfId
     *
     * @param integer $wtfId
     *
     * @return Comments
     */
    public function setWtfId($wtfId)
    {
        $this->wtfId = $wtfId;

        return $this;
    }

    /**
     * Get wtfId
     *
     * @return integer
     */
    public function getWtfId()
    {
        return $this->wtfId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Comments
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Comments
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Comments
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set voteUp
     *
     * @param integer $voteUp
     *
     * @return Comments
     */
    public function setVoteUp($voteUp)
    {
        $this->voteUp = $voteUp;

        return $this;
    }

    /**
     * Get voteUp
     *
     * @return integer
     */
    public function getVoteUp()
    {
        return $this->voteUp;
    }

    /**
     * Set voteDown
     *
     * @param integer $voteDown
     *
     * @return Comments
     */
    public function setVoteDown($voteDown)
    {
        $this->voteDown = $voteDown;

        return $this;
    }

    /**
     * Get voteDown
     *
     * @return integer
     */
    public function getVoteDown()
    {
        return $this->voteDown;
    }

    /**
     * Set datePublish
     *
     * @param string $datePublish
     *
     * @return Comments
     */
    public function setDatePublish($datePublish)
    {
        $this->datePublish = $datePublish;

        return $this;
    }

    /**
     * Get datePublish
     *
     * @return string
     */
    public function getDatePublish()
    {
        return $this->datePublish;
    }

    /**
     * Set comm
     *
     * @param string $comm
     *
     * @return Comments
     */
    public function setComm($comm)
    {
        $this->comm = $comm;

        return $this;
    }

    /**
     * Get comm
     *
     * @return string
     */
    public function getComm()
    {
        return $this->comm;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

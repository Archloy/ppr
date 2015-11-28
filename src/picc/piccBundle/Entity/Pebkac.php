<?php

namespace picc\piccBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pebkac
 *
 * @ORM\Table(name="pebkac")
 * @ORM\Entity
 */
class Pebkac
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

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
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="integer", nullable=true)
     */
    private $commentCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="favorite_count", type="integer", nullable=true)
     */
    private $favoriteCount;

    /**
     * @var string
     *
     * @ORM\Column(name="date_publish", type="text", nullable=true)
     */
    private $datePublish;

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_count", type="integer", nullable=true)
     */
    private $voteCount;

    /**
     * @var string
     *
     * @ORM\Column(name="user_avatar", type="text", nullable=true)
     */
    private $userAvatar;

    /**
     * @var string
     *
     * @ORM\Column(name="status_label", type="text", nullable=true)
     */
    private $statusLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="revision_content", type="text", nullable=true)
     */
    private $revisionContent;

    /**
     * @var string
     *
     * @ORM\Column(name="full_url", type="text", nullable=true)
     */
    private $fullUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="user_display_name", type="text", nullable=true)
     */
    private $userDisplayName;

    /**
     * @var integer
     *
     * @ORM\Column(name="facebook", type="integer", nullable=true)
     */
    private $facebook;

    /**
     * @var integer
     *
     * @ORM\Column(name="twitter", type="integer", nullable=true)
     */
    private $twitter;

    /**
     * @var integer
     *
     * @ORM\Column(name="gplus", type="integer", nullable=true)
     */
    private $gplus;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_shares", type="integer", nullable=true)
     */
    private $totalShares;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Pebkac
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
     * Set voteUp
     *
     * @param integer $voteUp
     *
     * @return Pebkac
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
     * @return Pebkac
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
     * Set commentCount
     *
     * @param integer $commentCount
     *
     * @return Pebkac
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * Get commentCount
     *
     * @return integer
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Set favoriteCount
     *
     * @param integer $favoriteCount
     *
     * @return Pebkac
     */
    public function setFavoriteCount($favoriteCount)
    {
        $this->favoriteCount = $favoriteCount;

        return $this;
    }

    /**
     * Get favoriteCount
     *
     * @return integer
     */
    public function getFavoriteCount()
    {
        return $this->favoriteCount;
    }

    /**
     * Set datePublish
     *
     * @param string $datePublish
     *
     * @return Pebkac
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
     * Set voteCount
     *
     * @param integer $voteCount
     *
     * @return Pebkac
     */
    public function setVoteCount($voteCount)
    {
        $this->voteCount = $voteCount;

        return $this;
    }

    /**
     * Get voteCount
     *
     * @return integer
     */
    public function getVoteCount()
    {
        return $this->voteCount;
    }

    /**
     * Set userAvatar
     *
     * @param string $userAvatar
     *
     * @return Pebkac
     */
    public function setUserAvatar($userAvatar)
    {
        $this->userAvatar = $userAvatar;

        return $this;
    }

    /**
     * Get userAvatar
     *
     * @return string
     */
    public function getUserAvatar()
    {
        return $this->userAvatar;
    }

    /**
     * Set statusLabel
     *
     * @param string $statusLabel
     *
     * @return Pebkac
     */
    public function setStatusLabel($statusLabel)
    {
        $this->statusLabel = $statusLabel;

        return $this;
    }

    /**
     * Get statusLabel
     *
     * @return string
     */
    public function getStatusLabel()
    {
        return $this->statusLabel;
    }

    /**
     * Set revisionContent
     *
     * @param string $revisionContent
     *
     * @return Pebkac
     */
    public function setRevisionContent($revisionContent)
    {
        $this->revisionContent = $revisionContent;

        return $this;
    }

    /**
     * Get revisionContent
     *
     * @return string
     */
    public function getRevisionContent()
    {
        return $this->revisionContent;
    }

    /**
     * Set fullUrl
     *
     * @param string $fullUrl
     *
     * @return Pebkac
     */
    public function setFullUrl($fullUrl)
    {
        $this->fullUrl = $fullUrl;

        return $this;
    }

    /**
     * Get fullUrl
     *
     * @return string
     */
    public function getFullUrl()
    {
        return $this->fullUrl;
    }

    /**
     * Set userDisplayName
     *
     * @param string $userDisplayName
     *
     * @return Pebkac
     */
    public function setUserDisplayName($userDisplayName)
    {
        $this->userDisplayName = $userDisplayName;

        return $this;
    }

    /**
     * Get userDisplayName
     *
     * @return string
     */
    public function getUserDisplayName()
    {
        return $this->userDisplayName;
    }

    /**
     * Set facebook
     *
     * @param integer $facebook
     *
     * @return Pebkac
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return integer
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param integer $twitter
     *
     * @return Pebkac
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return integer
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set gplus
     *
     * @param integer $gplus
     *
     * @return Pebkac
     */
    public function setGplus($gplus)
    {
        $this->gplus = $gplus;

        return $this;
    }

    /**
     * Get gplus
     *
     * @return integer
     */
    public function getGplus()
    {
        return $this->gplus;
    }

    /**
     * Set totalShares
     *
     * @param integer $totalShares
     *
     * @return Pebkac
     */
    public function setTotalShares($totalShares)
    {
        $this->totalShares = $totalShares;

        return $this;
    }

    /**
     * Get totalShares
     *
     * @return integer
     */
    public function getTotalShares()
    {
        return $this->totalShares;
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

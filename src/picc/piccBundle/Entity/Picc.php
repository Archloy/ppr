<?php

namespace picc\piccBundle\Entity;

/**
 * Picc
 */
class Picc
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $voteUp;

    /**
     * @var integer
     */
    private $voteDown;

    /**
     * @var integer
     */
    private $commentCount;

    /**
     * @var integer
     */
    private $favoriteCount;

    /**
     * @var string
     */
    private $datePublish;

    /**
     * @var integer
     */
    private $voteCount;

    /**
     * @var string
     */
    private $userAvatar;

    /**
     * @var string
     */
    private $statusLabel;

    /**
     * @var string
     */
    private $piccContent;

    /**
     * @var string
     */
    private $fullUrl;

    /**
     * @var string
     */
    private $userDisplayName;

    /**
     * @var integer
     */
    private $facebook;

    /**
     * @var integer
     */
    private $twitter;

    /**
     * @var integer
     */
    private $gplus;

    /**
     * @var integer
     */
    private $totalShares;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * Set piccContent
     *
     * @param string $piccContent
     *
     * @return Picc
     */
    public function setPiccContent($piccContent)
    {
        $this->piccContent = $piccContent;

        return $this;
    }

    /**
     * Get piccContent
     *
     * @return string
     */
    public function getPiccContent()
    {
        return $this->piccContent;
    }

    /**
     * Set fullUrl
     *
     * @param string $fullUrl
     *
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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
     * @return Picc
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


<?php

namespace Chatter\Core\Events;

use Chatter\Core\Models\DiscussionInterface;

class BeforeLikeDiscussion
{
    /**
     * @var DiscussionInterface
     */
    public $discussion;

    /**
     * Constructor.
     *
     * @param Discussion   $discussion
     */
    public function __construct(DiscussionInterface $discussion)
    {
        $this->discussion = $discussion;
    }
}
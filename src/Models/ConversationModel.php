<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\AccountCollection;

/**
 * @see https://link.to.docs
 */
class ConversationModel extends Model
{
    /**
     * The ID of the conversation in the database.
     */
    public string $id;

    /**
     * Is the conversation currently marked as unread?
     */
    public bool $unread;

    /**
     * Participants in the conversation.
     */
    public AccountCollection $accounts;

    /**
     * The last status in the conversation.
     */
    public ?StatusModel $last_status = null;
}

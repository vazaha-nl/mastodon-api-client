<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Enums;

enum Scope: string
{
    case READ = 'read';

    case READ_ACCOUNTS = 'read:accounts';

    case READ_BLOCKS = 'read:blocks';

    case READ_BOOKMARKS = 'read:bookmarks';

    case READ_FAVOURITES = 'read:favourites';

    case READ_FILTERS = 'read:filters';

    case READ_FOLLOWS = 'read:follows';

    case READ_LISTS = 'read:lists';

    case READ_MUTES = 'read:mutes';

    case READ_NOTIFICATIONS = 'read:notifications';

    case READ_SEARCH = 'read:search';

    case READ_STATUSES = 'read:statuses';

    case WRITE = 'write';

    case WRITE_ACCOUNTS = 'write:accounts';

    case WRITE_BLOCKS = 'write:blocks';

    case WRITE_BOOKMARKS = 'write:bookmarks';

    case WRITE_CONVERSATIONS = 'write:conversations';

    case WRITE_FAVOURITES = 'write:favourites';

    case WRITE_FILTERS = 'write:filters';

    case WRITE_FOLLOWS = 'write:follows';

    case WRITE_LISTS = 'write:lists';

    case WRITE_MEDIA = 'write:media';

    case WRITE_MUTES = 'write:mutes';

    case WRITE_NOTIFICATIONS = 'write:notifications';

    case WRITE_REPORTS = 'write:reports';

    case WRITE_STATUSES = 'write:statuses';

    case PUSH = 'push';

    case ADMIN_READ = 'admin:read';

    case ADMIN_READ_ACCOUNTS = 'admin:read:accounts';

    case ADMIN_READ_REPORTS = 'admin:read:reports';

    case ADMIN_READ_DOMAIN_ALLOWS = 'admin:read:domain_allows';

    case ADMIN_READ_DOMAIN_BLOCKS = 'admin:read:domain_blocks';

    case ADMIN_READ_IP_BLOCKS = 'admin:read:ip_blocks';

    case ADMIN_READ_EMAIL_DOMAIN_BLOCKS = 'admin:read:email_domain_blocks';

    case ADMIN_READ_CANONICAL_EMAIL_BLOCKS = 'admin:read:canonical_email_blocks';

    case ADMIN_WRITE = 'admin:write';

    case ADMIN_WRITE_ACCOUNTS = 'admin:write:accounts';

    case ADMIN_WRITE_REPORTS = 'admin:write:reports';

    case ADMIN_WRITE_DOMAIN_ALLOWS = 'admin:write:domain_allows';

    case ADMIN_WRITE_DOMAIN_BLOCKS = 'admin:write:domain_blocks';

    case ADMIN_WRITE_IP_BLOCKS = 'admin:write:ip_blocks';

    case ADMIN_WRITE_EMAIL_DOMAIN_BLOCKS = 'admin:write:email_domain_blocks';

    case ADMIN_WRITE_CANONICAL_EMAIL_BLOCKS = 'admin:write:canonical_email_blocks';
}

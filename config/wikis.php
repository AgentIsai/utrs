<?php

/**
 * This is the UTRS file that can be used to configure supported wikis.
 */
return [
    'login' => [
        'username' => env('MEDIAWIKI_USERNAME', ''),
        'password' => env('MEDIAWIKI_PASSWORD', ''),
    ],

    'base_permissions' => [
        'appeal_view' => ['admin', 'trustandsafety', 'steward'],
        'appeal_handle' => ['admin', 'trustandsafety', 'steward'],
        'appeal_checkuser' => ['checkuser', 'trustandsafety', 'steward'],
    ],

    'globalwiki' => [
        'name' => 'Global locks/blocks',
        'api_url' => env('WIKI_URL_GLOBAL', 'https://meta.miraheze.org/w/api.php'),
        'url_base' => 'https://meta.miraheze.org/',
        'responding_user_title' => 'Miraheze Steward',
        'hidden_from_appeal_wiki_list' => false,
        'SRGP' => 'Stewards\' noticeboard',
        'appeal_list_page' => 'User:AmandaNP/UTRS Appeals',

        'permission_overrides' => [
            'appeal_view' => ['steward', 'trustandsafety', 'global-sysop'],
            'appeal_handle' => ['steward', 'trustandsafety', 'global-sysop'],
            'appeal_checkuser' => ['steward', 'trustandsafety'],
        ],
    ],

    'wikis' => [
        // IF YOU ARE REMOVING WIKIS: ensure FakeMediaWikiRepository has two existing test wikis!

        'metawiki' => [
            'name' => 'Miraheze Meta',
            'api_url' => env('WIKI_URL_METAWIKI', 'https://meta.miraheze.org/w/api.php'),
            'url_base' => 'https://meta.miraheze.org/',
            'responding_user_title' => 'Miraheze Meta Administrator',
            'appeal_list_page' => 'User:AmandaNP/UTRS Appeals',
        ],
        'avidwiki' => [
            'name' => 'AVID Wiki',
            'api_url' => env('WIKI_URL_AVIDWIKI', 'https://avid.miraheze.org/w/api.php'),
            'url_base' => 'https://avid.miraheze.org/',
            'responding_user_title' => 'AVID Administrator',
            'hidden_from_appeal_wiki_list' => false,
        ],
    ],
];

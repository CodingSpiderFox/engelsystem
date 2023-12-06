<?php

declare(strict_types=1);

// To change settings create a config.php

return [
    // MySQL-Connection Settings
    'database'                => [
        'host'     => env('MYSQL_HOST', (env('CI', false) ? 'mariadb' : 'localhost')),
        'database' => env('MYSQL_DATABASE', 'engelsystem'),
        'username' => env('MYSQL_USER', 'root'),
        'password' => env('MYSQL_PASSWORD', ''),
    ],

    // For accessing /metrics (and /stats)
    'api_key'                 => env('API_KEY', ''),

    // Enable maintenance mode (show a static page)
    'maintenance'             => (bool) env('MAINTENANCE', false),

    // Application name (not the event name)
    'app_name'                => env('APP_NAME', 'Engelsystem'),

    // Set to development to enable debugging messages
    'environment'             => env('ENVIRONMENT', 'production'),

    // Application URL and base path to use instead of the auto-detected one
    'url'                     => env('APP_URL', null),

    // Header links
    // Available link placeholders: %lang%
    // To disable a header_item in the config.php, you can set its value to null
    'header_items'            => [
        // Name can be a translation string, permission is a engelsystem privilege
        // 'Name' => 'URL',
        // 'Name' => ['URL', 'permission'],

        //'Foo' => ['https://foo.bar/batz-%lang%.html', 'logout'], // Permission: for logged-in users
    ],

    // Footer links
    // To disable a footer item in the config.php, you can set its value to null
    'footer_items'            => [
        // Name can be a translation string, permission is a engelsystem privilege
        // 'Name' => 'URL',
        // 'Name' => ['URL', 'permission'],

        // URL to the angel faq and job description
        'faq.faq' => [env('FAQ_URL', '/faq'), 'faq.view'],

        // Contact email address, linked on every page
        'Contact' => env('CONTACT_EMAIL', 'mailto:ticket@c3heaven.de'),
    ],

    // Text displayed on the FAQ page, rendered as markdown
    'faq_text'                => env('FAQ_TEXT', null),

    // Link to documentation/help
    'documentation_url'       => env('DOCUMENTATION_URL', 'https://engelsystem.de/doc/'),

    // Email config
    'email'                   => [
        // Can be mail, smtp, sendmail or log or an symfony mailer dsn string like smtps://[usr]:[pass]@smtp.foo.bar:465
        'driver' => env('MAIL_DRIVER', 'mail'),
        'from'   => [
            // From address of all emails
            'address' => env('MAIL_FROM_ADDRESS', 'noreply@example.com'),
            'name'    => env('MAIL_FROM_NAME', env('APP_NAME', 'Engelsystem')),
        ],

        'host'       => env('MAIL_HOST', 'localhost'),
        'port'       => env('MAIL_PORT', 587),
        // If tls transport encryption should be used
        'tls'        => env('MAIL_TLS', null),
        'username'   => env('MAIL_USERNAME'),
        'password'   => env('MAIL_PASSWORD'),
        'sendmail'   => env('MAIL_SENDMAIL', '/usr/sbin/sendmail -bs'),
    ],

    # Your privacy@ contact address
    'privacy_email' => env('PRIVACY_EMAIL', null),

    // Initial admin password
    'setup_admin_password'    => env('SETUP_ADMIN_PASSWORD', null),

    'oauth'                   => [
        // '[name]' => [config]
        /*
        '[name]' => [
            // Name shown to the user (optional)
            'name' => 'Some Provider',
            // Auth client ID
            'client_id' => 'engelsystem',
            // Auth client secret
            'client_secret' => '[generated by provider]',
            // Authentication URL
            'url_auth' => '[generated by provider]',
            // Token URL
            'url_token' => '[generated by provider]',
            // User info URL which provides userdata
            'url_info' => '[generated by provider]',
            // OAuth Scopes
            // 'scope' => ['openid'],
            // Info unique user id field
            'id' => 'uuid',
            // The following fields are used for registration
            // Info username field (optional)
            'username' => 'nickname',
            // Info email field (optional)
            'email' => 'email',
            // Info first name field (optional)
            'first_name' => 'first-name',
            // Info last name field (optional)
            'last_name' => 'last-name',
            // User URL to provider, linked on provider settings page (optional)
            'url' => '[provider page]',
            // Whether info attributes are nested arrays (optional)
            // For example {"user":{"name":"foo"}} can be accessed using user.name
            'nested_info' => false,
            // Only show after clicking the page title (optional)
            'hidden' => false,
            // Mark user as arrived when using this provider (optional)
            'mark_arrived' => false,
            // If the password field should be enabled on registration (optional)
            'enable_password' => false,
            // Allow registration even if disabled in config (optional)
            'allow_registration' => null,
            // Auto join teams
            // Info groups field (optional)
            'groups' => 'groups',
            // Groups to team (angeltype) mapping (optional)
            'teams' => [
                '/Lorem' => 4, // 4 being the ID of the angeltype
                '/Foo Mod' => ['id' => 5, 'supporter' => true], // 5 being the ID of the angeltype
            ],
        ],
        */
    ],

    // Default theme, 1=style1.css
    'theme'                   => env('THEME', 1),

    // Supported themes
    // To disable a theme in the config.php, you can set its value to null
    'themes' => [
        17 => [
            'name' => 'Engelsystem 37c3 (2023)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark',
        ],
        16 => [
            'name' => 'Engelsystem cccamp23 (2023)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark',
        ],
        15 => [
            'name' => 'Engelsystem rC3 (2021)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark',
        ],
        14 => [
            'name' => 'Engelsystem rC3 teal (2020)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        13 => [
            'name' => 'Engelsystem rC3 violet (2020)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        12 => [
            'name' => 'Engelsystem 36c3 (2019)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        10 => [
            'name' => 'Engelsystem cccamp19 green (2019)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        9 => [
            'name' => 'Engelsystem cccamp19 yellow (2019)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        8 => [
            'name' => 'Engelsystem cccamp19 blue (2019)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        7 => [
            'name' => 'Engelsystem 35c3 dark (2018)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-primary navbar-dark bg-black border-primary',
        ],
        6 => [
            'name' => 'Engelsystem 34c3 dark (2017)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        5 => [
            'name' => 'Engelsystem 34c3 light (2017)',
            'type' => 'light',
            'navbar_classes' => 'navbar-light bg-light',
        ],
        4 => [
            'name' => 'Engelsystem 33c3 (2016)',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-body border-dark',
        ],
        3 => [
            'name' => 'Engelsystem 32c3 (2015)',
            'type' => 'light',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        2 => [
            'name' => 'Engelsystem cccamp15',
            'type' => 'light',
            'navbar_classes' => 'navbar-light bg-light',
        ],
        11 => [
            'name' => 'Engelsystem high contrast',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
        0 => [
            'name' => 'Engelsystem light',
            'type' => 'light',
            'navbar_classes' => 'navbar-light bg-light',
        ],
        1 => [
            'name' => 'Engelsystem dark',
            'type' => 'dark',
            'navbar_classes' => 'navbar-dark bg-black border-dark',
        ],
    ],

    // Redirect to this site after logging in or when pressing the top-left button
    // Must be one of news, meetings, user_shifts, angeltypes, questions
    'home_site'               => env('HOME_SITE', 'news'),

    // Number of News shown on one site and for feed readers (minimum 1)
    'display_news'            => env('DISPLAY_NEWS', 10),

    // Users are able to sign up
    'registration_enabled'    => (bool) env('REGISTRATION_ENABLED', true),

    // Required user fields
    'required_user_fields' => [
        'pronoun'            => (bool) env('PRONOUN_REQUIRED', false),
        'firstname'          => (bool) env('FIRSTNAME_REQUIRED', false),
        'lastname'           => (bool) env('LASTNAME_REQUIRED', false),
        'tshirt_size'        => (bool) env('TSHIRT_SIZE_REQUIRED', true),
        'mobile'             => (bool) env('MOBILE_REQUIRED', false),
        'dect'               => (bool) env('DECT_REQUIRED', false),
    ],

    // Only arrived angels can sign up for shifts
    'signup_requires_arrival' => (bool) env('SIGNUP_REQUIRES_ARRIVAL', false),

    // Whether newly-registered user should automatically be marked as arrived
    'autoarrive'              => (bool) env('ANGEL_AUTOARRIVE', false),

    // Only allow shift signup this number of hours in advance
    // Setting this to 0 disables the feature
    'signup_advance_hours'    => env('SIGNUP_ADVANCE_HOURS', 0),

    // Allow signup this many minutes after the start of the shift.
    // If signup_post_fraction is set, first applies that before adding the number of minutes specified by this.
    'signup_post_minutes'     => env('SIGNUP_POST_MINUTES', 0),

    // Allow signup this fraction of the shift length after the start of the shift.
    // Example: If this is set to 1, signup is allowed until the end of a shift
    //          If this is set to 0.5, signup is allowd for the first half of a shift
    // If signup_post_minutes is set, first applies this and then adds the signup_post_minutes on top.
    'signup_post_fraction'    => env('SIGNUP_POST_FRACTION', 0),

    // Number of hours that an angel has to sign out own shifts
    'last_unsubscribe'        => env('LAST_UNSUBSCRIBE', 3),

    // Define the algorithm to use for `password_verify()`
    // If the user uses an old algorithm the password will be converted to the new format
    // See https://secure.php.net/manual/en/password.constants.php for a complete list
    'password_algorithm'      => env('PASSWORD_ALGORITHM', PASSWORD_DEFAULT),

    // The minimum length for passwords
    'min_password_length'     => env('PASSWORD_MINIMUM_LENGTH', 8),

    // Whether the Password field should be enabled on registration.
    // This is useful when using oauth, disabling it also disables normal
    // registration without oauth.
    'enable_password'         => (bool) env('ENABLE_PASSWORD', true),

    // Whether the DECT field should be enabled
    'enable_dect'             => (bool) env('ENABLE_DECT', true),

    // Whether the mobile number can be shown to other users
    'enable_mobile_show'      => (bool) env('ENABLE_MOBILE_SHOW', false),

    // Regular expression describing a FALSE username.
    // Per default usernames must only contain alphanumeric chars, "-", "_" or ".".
    'username_regex' => (string) env('USERNAME_REGEX', '/([^\p{L}\p{N}_.-]+)/ui'),

    // Enables first name and last name
    'enable_user_name'        => (bool) env('ENABLE_USER_NAME', false),

    // Show a users first name and last name instead of username
    'display_full_name'  => env('DISPLAY_FULL_NAME', false)
        && env('ENABLE_USER_NAME', false),

    // Enable displaying the pronoun fields
    'enable_pronoun'          => (bool) env('ENABLE_PRONOUN', true),

    // Enables the planned arrival/leave date
    'enable_planned_arrival'  => (bool) env('ENABLE_PLANNED_ARRIVAL', true),

    // Resembles the Goodie Type. There are three options:
    // 'none' => no goodie at all
    // 'goodie' => a goodie which has no sizing options
    // 'tshirt' => goodie that is called tshirt and has sizing options
    'goodie_type'             => env('GOODIE_TYPE', 'goodie'),

    // Enables the food voucher in the user profile
    'enable_voucher'          => (bool) env('ENABLE_VOUCHER', true),

    // Number of shifts to freeload until angel is locked for shift signup.
    'max_freeloadable_shifts' => env('MAX_FREELOADABLE_SHIFTS', 2),

    // Hide columns in backend user view. Possible values are any sortable parameters of the table.
    'disabled_user_view_columns' => [],

    // Local timezone
    'timezone'                => env('TIMEZONE', 'Europe/Berlin'),

    // Multiply 'night shifts' and freeloaded shifts (start or end between 2 and 6 exclusive) by 2
    'night_shifts'            => [
        'enabled'    => (bool) env('NIGHT_SHIFTS', true), // Disable to weigh every shift the same
        'start'      => env('NIGHT_SHIFTS_START', 2),
        'end'        => env('NIGHT_SHIFTS_END', 6),
        'multiplier' => env('NIGHT_SHIFTS_MULTIPLIER', 2),
    ],

    // Voucher calculation
    'voucher_settings'        => [
        'initial_vouchers'   => env('INITIAL_VOUCHERS', 0),
        'shifts_per_voucher' => env('SHIFTS_PER_VOUCHER', 0),
        'hours_per_voucher'  => env('HOURS_PER_VOUCHER', 2),
        // 'Y-m-d' formatted
        'voucher_start'      => env('VOUCHER_START', null) ?: null,
    ],

    # Instruction in accordance with § 43 Para. 1 of the German Infection Protection Act (IfSG)
    'ifsg_enabled'           => (bool) env('IFSG_ENABLED', false),

    # Instruction only onsite in accordance with § 43 Para. 1 of the German Infection Protection Act (IfSG)
    'ifsg_light_enabled'           => (bool) env('IFSG_LIGHT_ENABLED', false)
        && env('IFSG_ENABLED', false),

    // Available locales in /resources/lang/
    // To disable a locale in the config.php, you can set its value to null
    'locales'                 => [
        'de_DE' => 'Deutsch',
        'en_US' => 'English',
    ],

    // The default locale to use
    'default_locale'          => env('DEFAULT_LOCALE', 'en_US'),

    // Available T-Shirt sizes
    // To disable a t-shirt size in the config.php, you can set its value to null
    'tshirt_sizes'            => [
        'S'    => 'Small Straight-Cut',
        'S-F'  => 'Small Fitted-Cut',
        'M'    => 'Medium Straight-Cut',
        'M-F'  => 'Medium Fitted-Cut',
        'L'    => 'Large Straight-Cut',
        'L-F'  => 'Large Fitted-Cut',
        'XL'   => 'XLarge Straight-Cut',
        'XL-F' => 'XLarge Fitted-Cut',
        '2XL'  => '2XLarge Straight-Cut',
        '3XL'  => '3XLarge Straight-Cut',
        '4XL'  => '4XLarge Straight-Cut',
    ],

    // Whether to show the current day of the event (-2, -1, 0, 1, 2…) in footer and on the dashboard.
    // The event start date has to be set for it to appear.
    'enable_show_day_of_event' => false,
    // If true there will be a day 0 (-1, 0, 1…). If false there won't (-1, 1…)
    'event_has_day0' => true,

    'metrics'                 => [
        // User work buckets in seconds
        'work'    => [1 * 60 * 60, 1.5 * 60 * 60, 2 * 60 * 60, 3 * 60 * 60, 5 * 60 * 60, 10 * 60 * 60, 20 * 60 * 60],
        'voucher' => [0, 1, 2, 3, 5, 10, 15, 20],
    ],

    // Shifts overview
    // Set max number of hours that can be shown at once
    // 0 means no limit
    'filter_max_duration'     => env('FILTER_MAX_DURATION', 0),

    // Session config
    'session'                 => [
        // Supported: pdo or native
        'driver' => env('SESSION_DRIVER', 'pdo'),

        // Cookie name
        'name'   => env('SESSION_NAME', 'session'),

        // Lifetime in days
        'lifetime' => env('SESSION_LIFETIME', 30),
    ],

    // IP addresses of reverse proxies that are trusted, can be an array or a comma separated list
    'trusted_proxies'         => env('TRUSTED_PROXIES', ['127.0.0.0/8', '::ffff:127.0.0.0/8', '::1/128']),

    // Add additional headers
    'add_headers'             => (bool) env('ADD_HEADERS', true),
    // Predefined headers
    // To disable a header in the config.php, you can set its value to null
    'headers'                 => [
        'X-Content-Type-Options'  => 'nosniff',
        'X-Frame-Options'         => 'sameorigin',
        'Referrer-Policy'         => 'strict-origin-when-cross-origin',
        'Content-Security-Policy' =>
            'default-src \'self\'; '
            . ' style-src \'self\' \'unsafe-inline\'; '
            . 'img-src \'self\' data:;',
        'X-XSS-Protection'        => '1; mode=block',
        'Feature-Policy'          => 'autoplay \'none\'',
        //'Strict-Transport-Security' => 'max-age=7776000',
        //'Expect-CT' => 'max-age=7776000,enforce,report-uri="[uri]"',
    ],

    // A list of credits
    'credits'                 => [
        'Contribution' => 'Please visit [engelsystem/engelsystem](https://github.com/engelsystem/engelsystem) if '
            . 'you want to contribute, have found any [bugs](https://github.com/engelsystem/engelsystem/issues) '
            . 'or need help.',
    ],

    // var dump server
    'var_dump_server'         => [
        'host' => '127.0.0.1',
        'port' => '9912',
        'enable' => false,
    ],
];

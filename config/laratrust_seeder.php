<?php
return [
    "roles" => [
        "roles" => ["read", "create", "update", "delete"],
        "admins" => ["read", "create", "update", "delete", "updateProfile"],
        "sliders" => ["read", "create", "update", "delete"],
        "newsections" => ["read", "create", "update", "delete"],
        "features" => ["read", "update"],
        "counters" => ["read", "update"],
        "clients" => ["read", "create", "update", "delete"],
        "categories" => ["read", "create", "update", "delete"],
        "products" => ["read", "create", "update", "delete"],
        "projects" => ["read", "create", "update", "delete"],
        "services" => ["read", "create", "update", "delete"],
        "teams" => ["read", "create", "update", "delete"],
        "testimonials" => ["read", "create", "update", "delete"],
        "partners" => ["read", "create", "update", "delete"],
        "portfolios" => ["read", "create", "update", "delete"],
        "blog" => ["read", "create", "update", "delete"],
        "faqs" => ["read", "create", "update", "delete"],
        "pages" => ["read", "create", "update"],
        "contacts" => ["read", "create", "update", "delete"],
        "settings" => ["read", "update"],
        "courses" => ["read", "create", "export"],
        "contact_us" => ["read", "delete", "reply"],
        "news_letters" => ["read", "show_subscribed_users", "delete_subscribed_users", "create", "resend", "delete",
        ]
    ],
];

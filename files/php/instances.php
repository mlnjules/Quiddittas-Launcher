<?php
$instance['quidditasServeur'] = array_merge($instance['quidditasServeur'], array(
    "loadder" => array(
        "minecraft_version" => "1.16.5",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'options.txt',
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Quidditas Serveur",
        "ip" => "mc.miliani.fr",
        "port" => 25565
    )
));

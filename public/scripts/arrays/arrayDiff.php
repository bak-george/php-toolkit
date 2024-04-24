<?php

$currentSubscribers = ["user1", "user2", "user3", "user4", "user5"];

$unsubscribedSubscribers = ["user2", "user4"];

$activeSubscribers = array_diff($currentSubscribers, $unsubscribedSubscribers);

echo "Active subscribers: " . PHP_EOL;
print_r($activeSubscribers);

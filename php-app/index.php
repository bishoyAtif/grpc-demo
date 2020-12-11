<?php

require 'vendor/autoload.php';

$userDatabaseClient = new UserDatabaseClient('grpc-test-node:50051', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

$guid = new Guid();
$guid->setGuid('1');
list($user, $status) = $userDatabaseClient->getUser($guid, [], ['timeout' => 10000])->wait();

if ($status->code !== Grpc\STATUS_OK) {
    echo "Call did not complete successfully. Status object:\n";
    var_dump($status);
    exit(1);
}

/**
 * User
 */
$user;
print_r($user->getEmail());

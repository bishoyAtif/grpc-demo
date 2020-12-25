<?php


class GrpcClient
{
    protected $client;

    public function __construct()
    {
        $this->client = new UserDatabaseClient('grpc-demo-node:50051', [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);
    }

    public function getUser($userId)
    {
        list($user, $status) = $this->client->getUser($userId)->wait();

        if ($status->code !== Grpc\STATUS_OK) {
            throw new Exception($status->details, $status->code);
        }

        return $user;
    }

    public function listUsers()
    {
    }
}

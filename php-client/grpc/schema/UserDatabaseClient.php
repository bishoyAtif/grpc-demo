<?php
// GENERATED CODE -- DO NOT EDIT!


/**
 */
class UserDatabaseClient extends \Grpc\BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Guid $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getUser(
        \Guid $argument,
        $metadata = [],
        $options = []
    ) {
        return $this->_simpleRequest(
            '/UserDatabase/getUser',
            $argument,
            ['\User', 'decode'],
            $metadata,
            $options
        );
    }
}

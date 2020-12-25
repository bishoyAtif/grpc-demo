# GRpc Demo

This is a simple server-client app implemented using two small separate apps, a nodejs server and a php client using GRpc as a protocol for communication.

## Getting Started

- Clone the repo.
- Open the terminal in the project repo, Run `cp .env.example .env` then populate the variables. Use `id -nu` to get the current user name, and `id -u` to get the current user id.
- Run `docker-compose up -d --build`. NOTE: It may take a while because of compiling grpc's php extention.
- Open http://localhost:3333

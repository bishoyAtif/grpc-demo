const grpc = require('grpc')
const protoLoader = require('@grpc/proto-loader')
const packageDefinition = protoLoader.loadSync('services.proto', {})
const grpcObject = grpc.loadPackageDefinition(packageDefinition)

const server = new grpc.Server()
server.bind('0.0.0.0:50051', grpc.ServerCredentials.createInsecure())
server.addService(grpcObject.UserDatabase.service, {
  getUser: getUser
})

server.start()

const { users } = require('./data')

function getUser(call, callback) {
  let result = null
  let error = null
  const user = users.find((user) => user.id === parseInt(call.request.guid))

  if (!user) {
    error = new Error('User Not Found!')
    error.code = 404
  } else {
    result = user
  }

  callback(error, result)
}

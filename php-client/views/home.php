<html>

<head>
    <link rel="stylesheet" href="../assets/main.css">
</head>

<body>
    <h1 id="main-header">GRpc Test</h1>
    <p>This is a simple server-client app implemented using two small separate apps, a nodejs server and a php client using GRpc as a protocol for communication.</p>
    <p id="link">To get the first user, please use this <a href="http://localhost:3333/users/1">link</a>.</p>
    <p id="link">Or Search users by id 'From 1-4': <input id="id-input" type="text" name="id"> <button id="submit-button">Submit</button></p>
    <form action=""></form>

    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            document.getElementById('submit-button').onclick = function() {
                window.location = 'http://localhost:3333/users/' + document.getElementById('id-input').value
            }
            console.log('DOM is ready.')
        });
    </script>
</body>

</html>
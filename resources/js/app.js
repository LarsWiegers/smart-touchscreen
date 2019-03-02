const axios = require('axios');
const accessToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiI3ZmM0OGU2ODUxODM0MzZmODA1MzA0YjNmMzY0YmEzYiIsImlhdCI6MTU1MTI4Njg0OSwiZXhwIjoxODY2NjQ2ODQ5fQ.ifW7XuTs3PfS5znd7hUXPQDwyNSmVRjZmqZ3mT6NOeo";
// Make a request for a user with a given ID
axios.get('192.168.1.5:8123/api', { 'headers': { 'Authorization': 'Bearer ' + accessToken } })
.then(function (response) {
    // handle success
    console.log("Success" + response);
})
.catch(function (error) {
    // handle error
    console.log("Rejected" + error);
})
.then(function () {
    // always executed
});

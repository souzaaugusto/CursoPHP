var http = require('http');
var fs = require('fs');

var server = http.createServer(function(req, res){
    res.writeHead(200,{'content-type':'text/html'});

    fs.createReadStream('voz.html').pipe(res);
});
server.listen(3000);
console.log('Servidor pronto em http://localhost:3000');
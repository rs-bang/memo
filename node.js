var http = require('http');
var fs = require('fs');
var ejs = require('ejs');
var url = require('url');

var server = http.createServer();
server.on('request',doRequest);

//////////
function doRequest(req,res){
	var url_parts = url.parse(req.url);
	res.writeHead(200, {'Content-Type': 'text/plain'});
	var :
	res.write(req.method);
	res.end();
};
//////////////
function doRequestbkk(req,res){
	var gener_temp = fs.readFileSync('./gener_temp','utf8');
	var header_temp = fs.readFileSync('./header_temp','utf8');
	var content_temp = fs.readFileSync('./content_temp','utf8');

	var header_render = ejs.render(header_temp,{
		header:'header 1'
	});
	var content_render = ejs.render(content_temp,{
		content:'content 1'
	});
	var gener_render = ejs.render(gener_temp,{
		header:header_render,
		content:content_render
	});
	var gener_render1 = ejs.render(gener_temp,{
		header:header_render,
		content:content_render
	});
	res.writeHead(200, {'Content-Type': 'text/html'});
	res.write(gener_render);
	//res.write('bang<br>bang');
	res.end();
};
function doRequestbk(req,res){
	fs.readFile('./data.txt','UTF-8',
		function(err,data){
			res.writeHead(200, {'Content-Type': 'text/html'});
			res.write(data);
			res.end();
		});
};
//server.listen(3333);
//server.listen(3333,"127.0.0.1");
server.listen(3333,"192.168.33.11");
console.log('Server running');

exports.install = function(framework){
	framework.route('/', view_homepage);
	framework.websocket('/', socket_homepage, ['json'])
}
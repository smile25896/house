<link type="text/css" href="<?=base_url_plugin() ?>/nlpviz/css/dagre-d3-simple.css" rel="stylesheet"/>
<link type="text/css" href="<?=base_url_plugin() ?>/nlpviz/css/digraph.css" rel="stylesheet"/>
<script src="<?=base_url_plugin() ?>/nlpviz/resources/d3.min.js"></script>
<script src="<?=base_url_plugin() ?>/nlpviz/resources/dagre.min.js"></script>
<script src="<?=base_url_plugin() ?>/nlpviz/resources/dagre-d3-simple.js"></script>

<div id="attach">
  <svg class="main-svg" id="svg-canvas"></svg>
</div>

<script>
    var dataParsed = JSON.parse('<?=$json_source ?>');

    var nodes = {};
    var edges = [];

    dataParsed.forEach(function (e) {
      populate(e, nodes, edges);
    });

    renderJSObjsToD3(nodes, edges, ".main-svg");

  function populate(data, nodes, edges) {
    var nodeID = Object.keys(nodes).length;

    var newNode = {
      label: data.data.type,
      id: nodeID + ""
    };

    var classes = ["type-" + data.data.type];
    if (data.data.ne) {
      classes.push("ne-" + data.data.ne);
    }

    newNode.nodeclass = classes.join(" ");

    nodes[nodeID] = newNode;

    data.children.forEach(function (child) {
      var newChild = populate(child, nodes, edges);

      edges.push({
        source: newNode.id,
        target: newChild.id,
        id: newNode.id + "-" + newChild.id
      });
    });

    return newNode;
  }


  function buildGraphData(node, nodes, links) {

    var index = nodes.length;
    nodes.push({
      name: node.data.content,
      group: 1
    });

    node.children.forEach(function (e) {
      links.push({
        source: index,
        target: nodes.length,
        value: 2
      });
      buildGraphData(e, nodes, links);
    });
  }

</script>
function toggleNextNodes(node) {
  var nodes = locateSubParagraphs(node);
  toggleHide(nodes);
}

function locateSubParagraphs(node) {
  var paras = new Array();
  while(node = node.nextSibling && node.tagName != "h3") {
    paras[paras.length] = node;
  }
  return paras;
}

function toggleHide(nodes) {
  var allNodes
  if(!isArray(nodes)) {
    allNodes = new Array(0);
    allNodes[0] = nodes;
  } else {
    allNodes = nodes;
  }

  for(var i=0;i<allNodes.length;i++) {
    node = allNodes[i];
    if(node.style.display == "none") {
      node.style.display == "block";
    } else {
      node.style.display == "none";
    }
  }
}

function hideElement(id) {
  node = document.getElementById(id)
  node.style.display = "none";
}

function showElement(id) {
  node = document.getElementById(id)
  node.style.display = "block";
}

function isArray(obj) {
   if (obj.constructor.toString().indexOf("Array") == -1)
      return false;
   else
      return true;
}
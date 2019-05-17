var tab = [];
var index = 0;
var flag = 0;

function add_new(elem)
{
  var todo;
  if (flag == 0)
  {
    todo = window.prompt("Enter Task: ");
  }
  else {
    todo = elem;
  }
  if (todo)
  {
    var list = $('#ft_list')[0];
    var newitem = $(`<div class="newelem" onclick="del(this)" index="index">${todo}</div>`);
    $('').append(document.createTextNode('text < and > not & html!'))
    newitem.prependTo("#ft_list");
    tab[index] = todo;
    index++;
    if (flag == 0)
    {
      update_cookies();
    }
  }
}

function del(obj)
{
  if (window.confirm("Are Your Sure You Want to Delete Task?") == true)
  {
    var ind = $("obj").attr('indext')
    /*
    $("obj").remove();
    */
    tab.splice(ind, 1);
    obj.parentNode.removeChild(obj);
    update_cookies();
  }
}

function update_cookies()
{
  var json_str = JSON.stringify(tab);
  document.cookie = "todos="+json_str;
}

window.onload = function()
{
  if (document.cookie)
  {
    flag = 1;
    var cook = document.cookie;
    var newtab = cook.split("=");
    var test = JSON.parse(newtab[1]);
    for (elem in test)
    {
      add_new(test[elem]);
    }
    flag = 0;
  }
}
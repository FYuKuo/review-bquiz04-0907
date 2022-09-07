// JavaScript Document
function lof(x)
{
	location.href=x
}

function del(id,table)
{
	$.post('./api/del.php',{id,table},()=>{
		location.reload();
	})
}
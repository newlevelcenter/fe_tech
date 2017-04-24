<?php
  header('Content-Type: text/html; charset=utf-8');
  include ("config.php");//подключение конфигурационного файла
  include ("connect.php");
  $res=mysql_query("SHOW TABLE STATUS LIKE 'order'");
  if($row=mysql_fetch_assoc($res))
    $ordern =  intval($row['Auto_increment']);
  else
    echo 1;
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://code.jquery.com/jquery-3.1.1.js" ></script>
</head>
<body>
	<div id="example_j">
		Order №:<input  value="<?php echo $ordern; ?>" id = "ordern" readonly /><br>
		Card №:<input  value="5168755522770730" id = "card" /><br>
		Amount:<input  value="5" id = "amount"/><br>
		Details:<input  value="det" id = "details"/><br>
		<button>Отправить</button> <span>Заполните поля и отправьте их на сервер</span>
		<p id = "out"></p>
	</div>
<script>
	var a,b,id,state, message, ref, amt, cardinfo, ccy, code, comis,card,amt,det;
	ordern =  $("#ordern").val();
	card = $("#card").val();
	amt = $("#amount").val();
	det = $("#details").val();
	//http://new-level.kh.ua/pb/pay.php?ordern=3&card=5168755522770730&amt=&det=details
	var str;
	$("#example_j button").click(function(){
		console.log("ok");
		str = "http://new-level.kh.ua/pb/pay.php?ordern="+ordern+"&card="+card+"&amt="+amt+"&det="+det+"";
			console.log(str);
	$.getJSON("http://new-level.kh.ua/pb/pay.php?ordern="+ordern+"&card=5168755522770730&amt=5&det=det",
	function(data){
	          console.log(data);
				a = data.data.payment;
				console.log(a['@attributes']);
				b = a['@attributes'];
				id = b['id'];
				state = b['state'];
				message = b['message'];
				ref = b['ref'];
				amt = b['amt'];
				cardinfo = b['cardinfo'];
				ccy = b['ccy'];
				code = b['code'];
				comis = b['comis'];
							
			  $("#out").html("id "+id+"<br> "+"state "+state+"<br> "+"message "+message+"<br> "+"ref "+ref+"<br> "+"amt "+amt+"<br> "
			  +"cardinfo "+cardinfo+"<br> "+"ccy "+ccy+"<br> "+"code "+code+"<br> "+"comis "+comis+" ");
	        });
			console.log("ok1");
	        });

</script>
</body>
</html>
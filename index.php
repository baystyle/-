
<br>
<input type="text" id="the_input_id1" placeholder="Money">
<input type="text" id="the_input_id2" placeholder="Yeild">
<input type="text" id="the_input_id3" placeholder="Year">
<br><br><br>
<table id="table" border="1"></table>

<script src="jquery-3.6.0.min.js"></script>
<script>
$(()=>{

$('#the_input_id1').keyup(function() {  
	updateTotal();
});

$('#the_input_id2').keyup(function() {  
	updateTotal();
});

$('#the_input_id3').keyup(function() {  
	updateTotal();
});

var updateTotal = function () {
	var m = parseFloat($('#the_input_id1').val())
	var r = parseFloat($('#the_input_id2').val())
	var y = parseFloat($('#the_input_id3').val())
	var t = parseFloat(0)
	
	var FILL = 	"<tr>"
	+		"<th>Year</th>"
	+		"<th>Money</th>"
	+		"<th>Value</th>"
	FILL +=	"</tr>"
	for(var i=1; i <= y; i++){
		t = parseFloat(t+m);
		v = parseFloat(t*r);
		s = parseFloat(t+v);
		t = parseFloat(s);
		FILL +=	"<tr>"
		+		"<td>"+i+"</td>"
		+		"<td>"+Number(t).toLocaleString('en')+"</td>"
		+		"<td>"+Number(v).toLocaleString('en')+"</td>"
		+	"</tr>"
	}
	$("#table").html('');
	$("#table").append(FILL);

};

})

</script>



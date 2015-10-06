$(document).ready(function(){
    $('#bluezebra').DataTable({
    	"paging": true,
    	"ordering": true,
    	"searching": true,
    	"dom": '<"top"lf>rt<"#addbutton"><"bottom"ip><"clear">'
    });

	var table = $('#bluezebra').DataTable();

	$('#bluezebra tbody').on('click', '#update', function (){
		var number = this.parentNode.parentNode.id;
	    window.location="home/"+number+"/edit";
	});

	$('#bluezebra tbody').on('click', '#delete', function (){
	    var number = this.parentNode.parentNode.id;
		$.post('home/'+number, {"_method" : "DELETE"});
        window.location="home";
	});

	$("#addbutton").html("<button type='button' class='btn btn-labeled btn-default'><span class='btn-label'><i class='fa fa-plus'></i></span>Add</button>");

	$("#addbutton button").on('click', function (){
		window.location="home/create";
	});

	$(function() {
    $( "#birthday" ).datepicker({
    	dateFormat: "yy-mm-dd"
    });
  });
});
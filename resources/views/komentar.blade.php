<!DOCTYPE html>
<html>
<head>
<title>Ucapan Wedding</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
<style type="text/css">
body {
    background: transparent;
    font-family: 'Product Sans' !important;
}
.user_name{
    font-size:14px;
    font-weight: bold;
    font-
}
.comments-list .media{
    border-bottom: 1px dotted #ccc;
}
</style>
</head>
<body>
<br/>
<div class="container">
    <div class="row" id="create-item">
        <div class="col-md-12">
            <form data-toggle="validator" action="{{ route('item-ajax.store') }}" method="POST">
                <div class="form-group">
                    <textarea type="text" name="ucapan" id="ucapan" class="form-control" rows="4" placeholder="Tuliskan ucapan & doa" maxlength="100" data-error="Please enter title." required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <input type="text" name="nama" id="nama" class="form-control" readonly data-error="Please enter title." maxlength="100" required value="{{$tamu}}" />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <select class="form-control" name="kehadiran" id="kehadiran">
                        <option value="" disabled selected>--- Kehadiran ---</option>
                        <option value="Ya">Ya</option>
                        <option value="Mungkin">Mungkin</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn crud-submit btn-default btn-sm pull-right btn-block">K I R I M</button>
                </div>
            </form>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="comments-list">
            </div>    
        </div>
    </div>
    <ul id="pagination" class="pagination-sm"></ul>

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script type="text/javascript"> 
var url = "<?php echo route('item-ajax.index')?>";
var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;
manageData();

function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){
    	total_page = data.last_page;
    	current_page = data.current_page;

    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	            page = pageL;
                if(is_ajax_fire != 0){
	        	    getPageData();
                }
	        }
	    });
    	manageRow(data.data);
        is_ajax_fire = 1;
    });
}


$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url,
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}

function manageRow(data) {
    var	rows = '';
    var my_date_format = function (input) {
    var d = new Date(Date.parse(input.replace(/-/g, "/")));
    var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var date = d.getDate().toString() + " " + month[d.getMonth().toString()] + ", " + 
    d.getFullYear().toString();
    return (date);
}; 
$.each( data, function( key, value ){
    rows = rows + '<div class="media">';
    rows = rows + '<a class="media-left" href="#">';
    rows = rows + '<img src="https://www.seekpng.com/png/full/114-1149972_avatar-free-png-image-avatar-png.png" width="20px">';
    rows = rows + '</a>';
    rows = rows + '<div class="media-body">';
    rows = rows + '<h4 class="media-heading user_name">'+value.nama+'<p class="pull-right"><small>'+my_date_format(value.created_at)+'</small></p></h4>';
    rows = rows + ''+value.ucapan+'';
    rows = rows + '<p><small>Will you attend our wedding ? '+value.kehadiran+'</small></p>';
    rows = rows + '</div>';
    rows = rows + '</div>';
});
$(".comments-list").html(rows);
}

$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var nama = $('#nama').val();
    var kehadiran = $('#kehadiran').val();
    var ucapan = $('#ucapan').val();
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{nama:nama, kehadiran:kehadiran, ucapan:ucapan}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
    });
});

</script> 
</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List Tamu
                    <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm float-right">Tambah Tamu</button>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="tamu" class="col-sm-3 col-form-label">Tamu Dari</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="selectTamu">
                                            <option value="">-- Pilih Tamu --</option>
                                            <option value="Ayu">Ayu</option>
                                            <option value="Mamah">Mamah</option> 
                                            <option value="Reza">Reza</option> 
                                            <option value="Ayah">Ayah</option> 
                                            <option value="Ibu">Ibu</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tamu" class="col-sm-3 col-form-label">Tanggal</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="selectTanggal">
                                            <option value="">-- Pilih Tanggal --</option>
                                            <option value="02">02 Des 2023</option>
                                            <option value="16">16 Des 2023</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <h1 class="text-center" id="totalRead"></h1>
                                    <div ></div>
                                    <button class="btn btn-primary" id="filterRead" style="border-radius:0px 0px .25rem .25rem;">read</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card">
                                    <h1 class="text-center" id="totalUnread"></h1>
                                    <button class="btn btn-default" id="filterUnread" style="border-radius:0px 0px .25rem .25rem;">unread</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped" id="user_table">
                            <thead>
                            <tr>
                                <th width="25%">Nama Tamu</th>
                                <th width="20%">Telephone / WA</th>
                                <th width="20%">Tamu</th>
                                <th width="20%">Tanggal</th>
                                <th width="35%">Action</th>
                                <th width="35%">Send</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
                <div class="modal-body">
                    <span id="form_result"></span>
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Tamu :</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Telephone / WA :</label>
                            <input type="text" class="form-control" name="no_tlp" id="no_tlp">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tamu :</label>
                            <select class="form-control" name="tamu" id="tamu">
                                <option value="">-- Pilih Tamu --</option>
                                <option value="Ayu">Ayu</option>
                                <option value="Mamah">Mamah</option> 
                                <option value="Reza">Reza</option> 
                                <option value="Ayah">Ayah</option> 
                                <option value="Ibu">Ibu</option> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tanggal :</label>
                            <select class="form-control" name="tgl" id="tgl">
                                <option value="">-- Pilih Tanggal --</option>
                                <option value="02">02 Des 2023</option>
                                <option value="16">16 Des 2023</option>
                            </select>
                        </div>
                        <br />
                        <div class="form-group" align="center">
                            <input type="hidden" name="action" id="action" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  name="action_button" id="action_button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 align="center" style="margin:0;">Are you sure you want to remove this data?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('externalJs')
<script type="text/javascript">
    $(document).ready(function(){
        read();
        var dataTable = $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            order:[],
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
    
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });
    
                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    });
            },
            ajax:{
                url: "{{ route('list-tamu.index') }}",
            },
            columns:[{
                data: null,
                render: function (data, type, row) {
                    if (data.read == '1') {
                        return '<i class="fa fa-check-circle" style="color:#007bff;"></i> ' + data.nama;
                    } else {
                        return '<i class="fa fa-check" style="color: gray;"></i> ' + data.nama;
                    }
                }
            },
            {
                data: 'no_tlp',
                name: 'no_tlp'
            },
            {
                data: 'tamu',
                name: 'tamu'
            },
            {
                data: 'tgl',
                name: 'tgl',
                render: function(data) {
                    return data + ' Des 2023';
                }
            },
            {
                data: 'action',
                name: 'action',
                orderable: false
            }, 
            {
                data: 'send',
                name: 'send',
                orderable: false
            }
        ]
        });

        function fillSelectOptions(columnIndex, selectId) {
            var select = $('#' + selectId);
            select.append('<option value="">Semua</option>');  
            var dataInColumn = dataTable.column(columnIndex).data();
            dataTable.column(columnIndex).data().unique().sort().each(function(data, index) {
                select.append('<option value="' + data + '">' + data + '</option>');
            });
        }

        fillSelectOptions(2, 'selectTamu');
        fillSelectOptions(3, 'selectTanggal');

        $('#selectTamu, #selectTanggal').on('change', function() {
            var selectedTamu = $('#selectTamu').val();
            var selectedTanggal = $('#selectTanggal').val();
            dataTable.columns(2).search(selectedTamu).columns(3).search(selectedTanggal).draw();
        });

        function read(){
            $.ajax({
                url: "{{ route('list-tamu.index') }}",
                method: 'GET',
                success: function(response) {
                    const dataArray = response.data || [];
                    if (Array.isArray(dataArray)) {
                        const totalRead = dataArray.filter(item => item.read == '1').length;
                        const totalUnread = dataArray.filter(item => item.read == '').length;
                        document.getElementById('totalRead').innerHTML = `${totalRead}`;
                        document.getElementById('totalUnread').innerHTML = `${totalUnread}`;
                    } else {
                        document.getElementById('totalRead').innerHTML = '0';
                        document.getElementById('totalUnread').innerHTML = '0';
                    }
                },
                error: function(error) {
                    console.error('Gagal mengambil data:', error);
                }
            });
        }

        $('#filterRead').on('click', function() {
            $.ajax({
                url: "{{ route('list-tamu.search') }}",
                type: "POST",
                data: { read: '1' },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });

        $('#create_record').click(function(){
            $('#nama').val('');
            $('#no_tlp').val('');
            $('#hidden_id').val('');
            $('#tamu').val('');
            $('#tgl').val('');
            $('#action_button').val("Add");
            $('.modal-title').text("Tambah Tamu");
            $('#action').val("Add");
            $('#formModal').modal('show');
        });

        $('#sample_form').on('submit', function(event){
            event.preventDefault();
            if($('#action').val() == 'Add'){
                $.ajax({
                    url:"{{ route('list-tamu.store') }}",
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    success:function(data){
                        var html = '';
                        if(data.errors){
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++){
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
        
                        if(data.success){
                            html = '<div class="alert alert-success alert-dismissible fade show" role="alert">' + data.success + ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>';
                            $('#sample_form')[0].reset();
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                })
            }

            if($('#action').val() == "Edit"){
                $.ajax({
                    url:"{{ route('list-tamu.update') }}",
                    method:"POST",
                    data:new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:"json",
                    success:function(data){
                        var html = '';
                        if(data.errors){
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++){
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success){
                            html = '<div class="alert alert-success">' + data.success + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>';
                            $('#sample_form')[0].reset();
                            $('#store_image').html('');
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }
        });

        $(document).on('click', '.edit', function(){
            var id = $(this).attr('id');
            $('#form_result').html('');
            $.ajax({
                url:"/list-tamu/"+id+"/edit",
                dataType:"json",
                success:function(html){
                    $('#nama').val(html.data.nama);
                    $('#no_tlp').val(html.data.no_tlp);
                    $('#hidden_id').val(html.data.id);
                    var tamu = html.data.tamu;
                    $('#tamu option').each(function() {
                        if ($(this).val() == tamu) {
                            $(this).prop('selected', true);
                        }
                    });
                    var tanggal = html.data.tgl;
                    $('#tgl option').each(function() {
                        if ($(this).val() == tanggal) {
                            $(this).prop('selected', true);
                        }
                    });
                    $('.modal-title').text("Edit Tamu");
                    $('#action_button').val("Edit");
                    $('#action').val("Edit");
                    $('#formModal').modal('show');
                }
            })
        });

        var user_id;

        $(document).on('click', '.delete', function(){
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function(){
            $.ajax({
                url:"list-tamu/destroy/"+user_id,
                beforeSend:function(){
                    $('#ok_button').text('Deleting...');
                },
                success:function(data){
                    setTimeout(function(){
                    $('#confirmModal').modal('hide');
                    $('#user_table').DataTable().ajax.reload();
                    }, 2000);
                }
            })
        });

    });
</script>
@endsection
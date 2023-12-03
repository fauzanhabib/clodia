<!DOCTYPE html>
<html>
<head>
    <title>Laravel Datatables</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Data Clodia</h2>
    <table id="myTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>nolab</th>
                <th>mrpasien</th>
                <th>nmpasien</th>
                <th>jkelm</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    ...
                  </div>
                </div>
              </div>
        </tbody>
    </table>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
          var table = $('#myTable').DataTable({
              processing: true,
              serverSide: true,
            //   scrollX: true,
              responsive: false,
              ajax: "{{ route('clodia.index') }}",
              columns: [
                  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                  {data: 'nolab', name: 'nolab'},
                  {data: 'mrpasien', name: 'mrpasien'},
                  {data: 'nmpasien', name: 'nmpasien'},
                  {data: 'jkelm', name: 'jkelm'},
                  {data: 'action', name:'action'}
              ]
          });
        });
</script>
</html>

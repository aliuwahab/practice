<html>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" >

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<div class="text-right"> <a href="/" class="btn btn-primary">Back</a> </div>
    <table class="table table-striped" id="userstable">
        <thead>
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>STREET</td>
            <td>SUITE</td>
            <td>CITY</td>
            <td>ZIPCODE</td>
        </thead>

        <tbody>
        @foreach($users as $detail)
            <tr>
        <td>{{$detail->id}}</td>
        <td>{{$detail->username}}</td>
        <td>{{$detail->name}}</td>
        <td>{{$detail->email}}</td>
        <td>{{$detail->address->street}}</td>
        <td>{{$detail->address->suite}}</td>
        <td>{{$detail->address->city}}</td>
        <td>{{$detail->address->zipcode}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" defer></script>
<script>
    $(document).ready(function() {
        $('#userstable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4 ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3,4 ]
                    }
                },
            ],
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });
    } );
</script>
</body>

</html>
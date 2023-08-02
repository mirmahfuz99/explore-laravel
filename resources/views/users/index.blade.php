
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>

<!-- Your table to display user data -->
<table id="usersTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#usersTable').DataTable();
    });
</script>

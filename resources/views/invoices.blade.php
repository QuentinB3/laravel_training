<div>
    <h2> Invoices</h2>
    <a href="/invoices/new"><button> New Invoice</button></a>
    <table border=2 cellspacing=0 cellpadding=5>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Created At</td>
        </tr>
        @foreach ($all as $lyn)
        <tr>
            <td>{{ $lyn->id }}</td>
            <td>{{ $lyn->title }}</td>
            <td>{{ $lyn->created_at }}</td>
        </tr>
        @endforeach
    </table>
</div>
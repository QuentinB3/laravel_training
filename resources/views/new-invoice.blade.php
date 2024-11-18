<div>
    <form method="POST" action="/invoices/create">
        @csrf
        Invoice name : 
        <input name="title"/>
        <button>Save</button>
    </form>
</div>

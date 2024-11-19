<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        body {
            font-family: 'Arial';
        }
    </style>
</head>

<body>

    <div>
        <h1> All Users </h1>

        @for ($i = 0; $i < 10; $i++)
            <div>
                The current value is now {{ $i + 1 }}
                <x-forms.input-text />
                <x-forms.select />
            </div>
        @endfor
        <x-alert message="Test Message"/>
        <x-alert message="This Too"/>
        <x-alert message="What?"/>
        <x-alert message="Where"/>
        <x-blocks.header pageName="Toets" />
        <x-blocks.menu pageName="Toets" />
        <x-blocks.footer />
    </div>
</body>

</html>
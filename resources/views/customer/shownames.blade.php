<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
    <ol>
       @foreach($user as $customers)
             <li>
                {{ $customers->first_name}} <span style="text-transform:uppercase">{{ $customers->middle_init}}.</span>   {{ $customers->last_name }}     
             </li>
         @endforeach
    </ol>
</body>
</html>
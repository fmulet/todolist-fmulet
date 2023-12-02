{{-- resources/views/emails/welcome.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido a {{ config('app.name') }}</title>
</head>
<body>
    <h1>¡Hola {{ $user->name }}!</h1>
    <p>Te has registrado exitosamente en {{ config('app.name') }}. Estamos encantados de tenerte a bordo.</p>
</body>
</html>


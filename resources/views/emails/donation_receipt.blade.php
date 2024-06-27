<!-- resources/views/emails/donation_receipt.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Recibo de Donación</title>
</head>
<body>
    <h1>Gracias por tu donación, {{ $details['name'] }}!</h1>
    <p>Detalles de la donación:</p>
    <ul>
        <li>Monto: ${{ $details['amount'] }}</li>
        <li>Fecha: {{ $details['date'] }}</li>
    </ul>
    <p>Agradecemos tu apoyo a nuestra causa.</p>
</body>
</html>

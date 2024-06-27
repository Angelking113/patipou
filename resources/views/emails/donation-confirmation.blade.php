<!-- resources/views/emails/donation-confirmation.blade.php -->
<div>
    <p>Gracias por tu interés en apoyar nuestra causa. Aquí tienes un resumen de los detalles de tu donación:</p>
    <ul>
        <li><strong>Nombre:</strong> {{ $donation->name }}</li>
        <li><strong>Correo Electrónico:</strong> {{ $donation->email }}</li>
        <li><strong>Cantidad Donada:</strong> ${{ $donation->amount }}</li>
    </ul>
    <p>¡Gracias nuevamente!</p>
</div>

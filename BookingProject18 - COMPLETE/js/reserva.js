// SCRIPT DIA DE RESERVA

const appointmentDate = document.getElementById('appointment-date');

// Obtener la fecha actual
const today = new Date();

// Sumar 1 día a la fecha actual
const tomorrow = new Date();
tomorrow.setDate(today.getDate() + 1);

// Formatear la fecha en formato YYYY-MM-DD
const yyyy = tomorrow.getFullYear();
const mm = String(tomorrow.getMonth() + 1).padStart(2, '0'); // Enero es 0
const dd = String(tomorrow.getDate()).padStart(2, '0');

// Establecer el atributo min para el campo de fecha
appointmentDate.min = `${yyyy}-${mm}-${dd}`;
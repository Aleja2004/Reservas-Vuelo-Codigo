function downloadTicket(format) {
    // Obtener el elemento con la clase "ticket"
    const ticket = document.querySelector('.ticket');
  
    // Crear estilos CSS personalizados para la impresión
    const styles = `
      @media print {
        .no-print { display: none; }
      }
    `;
  
    // Crear un elemento <style> y agregar los estilos
    const styleElement = document.createElement('style');
    styleElement.innerHTML = styles;
  
    // Agregar el elemento <style> al <head> del documento
    document.head.appendChild(styleElement);
  
    // Agregar una clase "no-print" al elemento del botón de descarga actual
    event.target.classList.add('no-print');
  
    // Ocultar otros elementos que no deben aparecer en el boleto impreso
    const elementsToHide = document.querySelectorAll('.no-print');
    elementsToHide.forEach(element => {
      element.style.display = 'none';
    });
  
    // Imprimir el contenido del boleto
    window.print();
  
    // Restaurar los elementos y estilos ocultos después de la impresión
    event.target.classList.remove('no-print');
    elementsToHide.forEach(element => {
      element.style.display = '';
    });
    
  }
  
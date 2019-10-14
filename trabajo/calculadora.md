# Calculadora

- Debes realizar una calculadora en PHP.
- Toda la aplicación se construye sobre la clase App:
    - El método index muestra un formulario para realizar cálculos:
        - Operador 1
        - Operación
        - Operador 2

    - Operador 1 y 2 se recogen de una caja de texto.
    - Operación se recoge de un <select>. Debe poder recogerse suma, resta, multiplicación y división.
    - El método calcular debe:
        - Validar los datos. Si no son válidos deben almacenarse en sesión junto a un mensaje de error y devolverse a la página inicial.
        - Relizar el cálculo y mostrarlo sobre la página inicial.
    - Posible mejora:
        - Guardar un array con todas las operaciones realizadas y poder consultar dicho histórico.
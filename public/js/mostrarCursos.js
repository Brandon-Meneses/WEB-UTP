function updateCategoriaForm(inputName, category) {
    const todosRadio = document.querySelector('input[name="mostrar_todos"]');
    const categoryRadios = document.querySelectorAll('input[name="categoria"]');

    if (inputName === 'mostrar_todos' && todosRadio.checked) {
        categoryRadios.forEach(radio => {
            radio.checked = false;
        });
    } else if (inputName === 'categoria') {
        todosRadio.checked = false;
    }
    document.getElementById('categoriaForm').submit();
}
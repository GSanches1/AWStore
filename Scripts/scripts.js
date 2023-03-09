<script>
    const selectCategoria = document.getElementById('filtro-categoria');
    const produtos = document.querySelectorAll('.produto');

    selectCategoria.addEventListener('change', () => {
        const categoriaSelecionada = selectCategoria.value;
        produtos.forEach(produto => {
            produto.style.display = 'none';
            if (produto.classList.contains(categoriaSelecionada) || categoriaSelecionada === 'todos') {
                produto.style.display = 'block';
            }
        });
    });
</script>

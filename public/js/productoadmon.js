$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditProducto').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let nombre = button.data('nombre'); // data-nombre
      let descripcion = button.data('descripcion');
      let cod_marca = button.data('cod_marca');
      let cod_categoria = button.data('cod_categoria');
      let cod_submedida = button.data('cod_submedida');

      const modal = $(this);

      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #nombre').val(nombre); //value
      modal.find('.modal-body #descripcion').val(descripcion);
      modal.find('.modal-body #cod_marca').val(cod_marca);
      modal.find('.modal-body #cod_categoria').val(cod_categoria);
      modal.find('.modal-body #cod_submedida').val(cod_submedida);
   });
}
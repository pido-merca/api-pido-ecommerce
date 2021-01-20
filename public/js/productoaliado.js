$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditProducto').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let cod_producto_admon = button.data('cod_producto_admon'); // data-nombre
      let id_aliado = button.data('id_aliado');
      let cantidad = button.data('cantidad');
      let preciosubmedida = button.data('preciosubmedida');
      let stockminimo = button.data('stockminimo');
      let estado = button.data('estado');

      const modal = $(this);

      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #cod_producto_admon').val(cod_producto_admon); //value
      modal.find('.modal-body #id_aliado').val(id_aliado);
      modal.find('.modal-body #cantidad').val(cantidad);
      modal.find('.modal-body #preciosubmedida').val(preciosubmedida);
      modal.find('.modal-body #stockminimo').val(stockminimo);
      modal.find('.modal-body #estado').val(estado);
   });
}
  
$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditAliadoSubcategoria').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let cod_subcategoria = button.data('cod_subcategoria'); // data-nombre
      let cod_aliado = button.data('cod_aliado'); // data-nombre
      let estado = button.data('estado'); // data-nombre
      
      const modal = $(this);

      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #cod_subcategoria').val(cod_subcategoria); //value
      modal.find('.modal-body #cod_aliado').val(cod_aliado); //value
      modal.find('.modal-body #estado').val(estado); //value
   });
}
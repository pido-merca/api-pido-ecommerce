  
$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditSubcategoria').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let cod_categoria = button.data('cod_categoria'); // data-nombre
      let nombre_subcategoria = button.data('nombre_subcategoria'); // data-nombre
      let slug = button.data('slug'); // data-nombre
      let estado = button.data('estado'); // data-nombre
      
      const modal = $(this);
      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #cod_categoria').val(cod_categoria); //value
      modal.find('.modal-body #nombre_subcategoria').val(nombre_subcategoria); //value
       modal.find('.modal-body #slug').val(slug); //value
        modal.find('.modal-body #estado').val(estado); //value
         
   });
}
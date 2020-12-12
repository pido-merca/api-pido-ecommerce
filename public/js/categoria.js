$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditCategoria').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let name = button.data('nombre'); // data-nombre
      
      const modal = $(this);

      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #nombre').val(name); //value
   });
}
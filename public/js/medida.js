$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditMedida').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let nom_medida = button.data('nom_medida'); // data-nombre
      
      const modal = $(this);

      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #nom_medida').val(nom_medida); //value
   });
}
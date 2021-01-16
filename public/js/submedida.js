$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditSubmedida').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let nom_submedida = button.data('nom_submedida'); // data-nombre
      let cod_medida = button.data('cod_medida');

      const modal = $(this);

      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #nom_submedida').val(nom_submedida); //value
      modal.find('.modal-body #cod_medida').val(cod_medida);
   });
}
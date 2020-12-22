  
$(function() {
    editModal();
});

const editModal = () => {
   $('#modalEditAliado').on('show.bs.modal', function (event){
       //callback
      const button = $(event.relatedTarget);
      let id = button.data('id'); //data-id
      let nombre = button.data('nombre'); // data-nombre
      let slug = button.data('slug'); // data-slug
      let hora_inicio = button.data('hora_inicio'); // data-hora_inicio
      let hora_cierre = button.data('hora_cierre'); // data-camara_comercio
      let camara_comercio = button.data('camara_comercio'); // data-rut
      let rut = button.data('rut'); // data-nombre
      let cod_municipio = button.data('cod_municipio'); // data-cod_municipio
      let telefono = button.data('telefono'); // data-telefono
      let correo = button.data('correo'); // data-correo
      let fecha_inscripcion = button.data('fecha_inscripcion'); // data-fecha_inscripcion
      let cod_plan = button.data('cod_plan'); // data-cod_plan
      let imagen = button.data('imagen'); // data-imagen
      let estado = button.data('estado'); // data-estado
      
      const modal = $(this);

      modal.find('.modal-body #id').val(id); //value
      modal.find('.modal-body #nombre').val(nombre); //value
      modal.find('.modal-body #slug').val(slug); //value
      modal.find('.modal-body #hora_inicio').val(hora_inicio); //value
      modal.find('.modal-body #hora_cierre').val(hora_cierre); //value
      modal.find('.modal-body #camara_comercio').val(camara_comercio); //value
      modal.find('.modal-body #rut').val(rut); //value
      modal.find('.modal-body #cod_municipio').val(cod_municipio); //value
      modal.find('.modal-body #telefono').val(telefono); //value
      modal.find('.modal-body #correo').val(correo); //value
      modal.find('.modal-body #fecha_inscripcion').val(fecha_inscripcion); //value
      modal.find('.modal-body #cod_plan').val(cod_plan); //value
      modal.find('.modal-body #imagen').val(imagen); //value
      modal.find('.modal-body #estado').val(estado); //value
   });
}
// Can also be used with $(document).ready()
(function ($) {
  let regiones = [];
  $(document).ready( function (){
    let regionSelect = $('#region');
    let comunaSelect = $('#comuna');
    let capaSelect = $('#capa');
    regiones = JSON.parse($("#regionesJson").val());
    regionSelect.change(function(){
      comunaSelect
        .empty()
        .append(
          $('<option></option>')
            .attr("value", "")
            .text("Seleccione una comuna")
        );
      try{
        let comunas = regiones[this.value];
        if(comunas){
          comunas.forEach(function (value){
            comunaSelect.append(
              $("<option></option>")
                .attr("value", value['comuna'])
                .text(value['comuna'])
            );
          });
        }
      }catch (e) {
        console.error(e);
      }
    });
    $('#resultPerPage').change(function() {
      $('#resultPerPageHidden').val(this.value);
      $('#resultPerPageBottom').val(this.value);
    });

    $('#resultPerPageBottom').change(function() {
      $('#resultPerPageHidden').val(this.value);
      $('#resultPerPage').val(this.value);
    });

    regionSelect.change(function() {
      if(this.value !== ''){
        $('#filterRegionButtonText').html(this.value);
        $('#filterRegionDiv').removeClass('d-none');

        $('#filterComunaButtonText').html('');
        $('#filterComunaDiv').addClass('d-none');

        $('#limpiarTodoDiv').removeClass('d-none');
      } else {
        $('#btnFilterHideRegion').click();
      }
    });

    comunaSelect.change(function() {
      if(this.value !== ''){
        $('#filterComunaButtonText').html(this.value);
        $('#filterComunaDiv').removeClass('d-none');
        $('#limpiarTodoDiv').removeClass('d-none');
      } else {
        $('#btnFilterHideComuna').click();
      }
    });

    capaSelect.change(function() {
      if(this.value !== ''){
        $('#filterCapaButtonText').html(this.value);
        $('#filterCapaDiv').removeClass('d-none');
        $('#limpiarTodoDiv').removeClass('d-none');
      } else {
        $('#btnFilterHideCapa').click();
      }
    });


    //Hides the filters divs

    $('#btnFilterHideRegion').click(function(){
      regionSelect.val('');
      $('#filterRegionDiv').addClass('d-none');
      $('#filterRegionButtonText').html('');

      comunaSelect.val('');
      $('#filterComunaDiv').addClass('d-none');

      if($('#filterCapaDiv').hasClass('d-none')){
        $('#limpiarTodoDiv').addClass('d-none');
      }

    });
    $('#btnFilterHideComuna').click(function(){
      comunaSelect.val('');
      $('#filterComunaDiv').addClass('d-none');

    });
    $('#btnFilterHideCapa').click(function(){
      capaSelect.val('');
      $('#filterCapaDiv').addClass('d-none');

      if($('#filterRegionDiv').hasClass('d-none') && $('#filterComunaDiv').hasClass('d-none')){
        $('#limpiarTodoDiv').addClass('d-none');
      }

    });
    $('#btnFilterHideAll').click(function(){
      regionSelect.val('');
      comunaSelect.val('');
      capaSelect.val('');

      $('#filterRegionButtonText').html('');
      $('#filterComunaButtonText').html('');
      $('#filterCapaButtonText').html('');

      $('#filterRegionDiv').addClass('d-none');
      $('#filterCapaDiv').addClass('d-none');
      $('#filterComunaDiv').addClass('d-none');
      $('#limpiarTodoDiv').addClass('d-none');

      $('#patrimonio-search-input').val('');
    });
  });
}(jQuery));

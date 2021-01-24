$(document).ready(function() {
    // Init Datatable
    $('#dataTable').DataTable();

    // Init TinyMCE
    tinymce.init({
        selector: 'textarea',
        plugins: 'pagebreak',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | pagebreak',
        menubar: false,
        pagebreak_split_block: true
    });

    // Display form rombel wali kelas
    let formRombelWaliKelas = $('select[name="id_rombel"]').closest('.form-group');
    $('select[name="jenis_ptk"]').val() == 'guru kelas' ? formRombelWaliKelas.removeClass('hide') : formRombelWaliKelas.addClass('hide');
    $('select[name="jenis_ptk"]').on('change', function(){
        let jenis_ptk = $(this).val();
        if(jenis_ptk == 'guru kelas'){
            formRombelWaliKelas.removeClass('hide');
        } else{
            formRombelWaliKelas.addClass('hide');
            $('select[name="id_rombel"]').val('');
        }
    });
});
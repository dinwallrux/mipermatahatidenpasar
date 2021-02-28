$(document).ready(function() {
    // Init Datatable
    $('#dataTable').DataTable();

    // Init TinyMCE
    tinymce.init({
        selector: 'textarea',
        plugins: 'pagebreak lists',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | pagebreak | numlist bullist',
        menubar: false,
        pagebreak_split_block: true
    });

    // Display form rombel wali kelas
    let tendik = $('.tenaga-pendidik-form');
    let formRombelWaliKelas = tendik.find('select[name="rombel_wali_kelas"]').closest('.form-group');
    tendik.find('select[name="jenis_ptk"]').val() == 'guru kelas' ? formRombelWaliKelas.removeClass('hide') : formRombelWaliKelas.addClass('hide');
    tendik.find('select[name="jenis_ptk"]').on('change', function(){
        let jenis_ptk = $(this).val();
        if(jenis_ptk == 'guru kelas'){
            formRombelWaliKelas.removeClass('hide');
        } else{
            formRombelWaliKelas.addClass('hide');
            $('select[name="rombel_wali_kelas"]').val(0);
        }
    });
});
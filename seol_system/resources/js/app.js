// import './bootstrap';
import Dropzone from "dropzone";

Dropzone.autoDiscover = false;
// Configuración del dropzone
const dropzonePDF = new Dropzone('#dropzoneDocx', {
    dictDefaultMessage: 'Sube tu plantilla de Word aquí',
    acceptedFiles: '.docx',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
        // En caso que tenga value, lo tomará para llenar los atributos de dropzone
        if (document.querySelector('[name="plantila"]').value.trim()) {
            const pdfPublicada = {};

            pdfPublicada.size = 1234;
            pdfPublicada.name = document.querySelector('[name="plantilla"]').value;

            this.options.addedfile.call(this, pdfPublicada);
            this.options.thumbnail.call(this, pdfPublicada, '/uploads/${docxPublicada.name}');

            pdfPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});
dropzonePDF.on('success', function (file, response) {
    // Asigna el value del Docx (nombre) en el input oculto de create.blade.php
    console.log(response);
    document.querySelector('[name="plantilla"]').value = response.pdf;
});

dropzonePDF.on('removedfile', function () {
    // Para resetear el valor cuando se elimine el Docx
    document.querySelector('[name="plantilla"]').value = '';
});
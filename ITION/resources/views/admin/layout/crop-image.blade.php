<script src="{{ asset('js/custom_file_input.js')}}"></script>
<script src="{{ asset('js/cropper.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/cropper.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<style type="text/css">
    img {
    display: block;
    max-width: 100%;
    }
    .preview {
    overflow: hidden;
    width: 160px; 
    height: 160px;
    margin: 10px;
    border: 1px solid red;
    }
    .modal-lg{
    max-width: 1000px !important;
    }
</style>

<!--popup
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="modalLabel">Laravel Cropper Js - Crop Image Before Upload - Tutsmake.com</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
             </button>
          </div>
          <div class="modal-body">
             <div class="img-container">
                <div class="row">
                   <div class="col-md-8">
                      <img id="foto" src="https://avatars0.githubusercontent.com/u/3456749">
                   </div>
                   <div class="col-md-4">
                      <div class="preview"></div>
                   </div>
                </div>
             </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
             <button type="button" class="btn btn-primary" id="crop">Crop</button>
          </div>
       </div>
    </div>
 </div>
 -->

<!-- halaman script -->
<script>

/*var $modal = $('#modal');
var foto = document.getElementById('foto');
var cropper;
$("body").on("change", ".foto", function(e){
var files = e.target.files;
var done = function (url) {
foto.src = url;
$modal.modal('show');
};
var reader;
var file;
var url;
if (files && files.length > 0) {
file = files[0];
if (URL) {
done(URL.createObjectURL(file));
} else if (FileReader) {
reader = new FileReader();
reader.onload = function (e) {
done(reader.result);
};
reader.readAsDataURL(file);
}
}
});
$modal.on('shown.bs.modal', function () {
cropper = new Cropper(foto, {
aspectRatio: 1,
viewMode: 3,
preview: '.preview'
});
}).on('hidden.bs.modal', function () {
cropper.destroy();
cropper = null;
});
$("#crop").click(function(){
canvas = cropper.getCroppedCanvas({
width: 160,
height: 160,
});
canvas.toBlob(function(blob) {
url = URL.createObjectURL(blob);
var reader = new FileReader();
reader.readAsDataURL(blob); 
reader.onloadend = function() {
var base64data = reader.result; 
$.ajax({
type: "POST",
dataType: "json",
url: "crop-image-upload",
data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
success: function(data){
$modal.modal('hide');
alert("Crop image successfully uploaded");
}
});
}
});
})*/
 </script>
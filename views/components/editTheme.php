<div class="modal fade" id="themeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar tema</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?PHP constant('URL')."/editcourse/theme?idc=".$course['idCourse']."idt=".$theme['id_tema']?>" enctype="multipart/form-data" method="POST">
                <div class="modal-body">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Nombre del curso">
                    </div>         

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" >Guardar Cambios</button>
                </div>
            </form>

        </div>
    </div>
</div>
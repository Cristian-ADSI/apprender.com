<div class="modal fade" id="themeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar tema</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?PHP echo constant('URL')."editcourse/theme?idc=".$course['idCourse']?>" method="POST">
                <div class="modal-body">

                    <div class="mb-3">
                        <input id="inputThemeName" type="text" class="form-control" name="nombre" placeholder="Nombre del curso">
                    </div>
                    <div class="mb-3" style="visibility: hidden;">
                        <input id="inputThemeId" type="text" class="form-control" name="id" placeholder="Nombre del tema">
                    </div>        

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                </div>
            </form>

        </div>
    </div>
</div>
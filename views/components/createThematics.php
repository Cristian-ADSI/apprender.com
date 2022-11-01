<div class="modal fade" id="newThematics" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Tematica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?PHP 
            echo constant('URL')."editcourse/newThematic?idc=".$course['idCourse']."&idt=".$theme['id_tema']
            ?>" 
            method="POST">
                <div class="modal-body">

                    <div class="mb-3">
                        <input id="inputThematicName" type="text" class="form-control" name="nombre" placeholder="Nombre de la tematica">
                    </div>

                    <div class="mb-3">
                        <input id="inputThematicDesc" type="text" class="form-control" name="descripcion" placeholder="descripcion">
                    </div>

                    <div class="mb-3">
                        <input id="inputThematicVideo" type="text" class="form-control" name="video" placeholder="Link del recurso">
                    </div> 
                    
                    <div class="mb-3" style="visibility: hidden;">
                        <input id="currentThemeId" type="text" class="form-control" name="id">
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
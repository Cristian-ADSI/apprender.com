<div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form action="<?PHP constant('URL')?>/app/createCourse" enctype="multipart/form-data" method="POST">
                <div class="modal-body">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre del curso">
                    </div>

                    <div class="mb-3">
                        <label for="startDate" class="form-label">Fecha Inicial</label>
                        <input id="startDate" type="date" class="form-control" name="fecha_inicial">
                    </div>


                    <div class="mb-3">
                        <label for="endDate" class="form-label">Fecha Final</label>
                        <input id="endDate" type="date" class="form-control" name="fecha_final">
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="number">$</label>
                        <input type="number" class="form-control" name="valor" placeholder="Valor del curso">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="courseDesc">Descripcion del curso</label>
                        <textarea class="form-control mb-3" id="courseDesc" name="descripcion"></textarea>

                        <label class="form-label" for="courseImage">Caratula</label>
                        <input id="courseImage" type="file" name="imagen">
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
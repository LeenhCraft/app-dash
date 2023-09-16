<?php headerApp('Template/header_dash', $data); ?>
<?php
if ($data['permisos']['perm_w'] == 1) :
?>
    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
            <div class="row h-100">
                <div class="col-sm-5">
                    <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                        <!-- <img src="../../assets/img/illustrations/sitting-girl-with-laptop-dark.png" class="img-fluid" alt="Image" width="120" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png"> -->
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="card-body text-sm-end text-center ps-sm-0">
                        <button class="btn btn-primary ft-b mb-3 text-nowrap" type="button" onclick="openModal();">
                            <i class='bx bx-plus-circle'></i> Nuevo Permisos
                        </button>
                        <p class="mb-0">Agregar un permiso si no existe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
?>
<div class="card">
    <div class="card-header"></div>
    <div class="car-body">
        <div class="table-responsive text-nowrap mb-4">
            <table id="sis_permisos" class="table table-hover" width="100%">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Rol</th>
                        <th>Menu</th>
                        <th>Sub Menu</th>
                        <th>Leer</th>
                        <th>Escribir</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
// if ($data['permisos']['perm_w'] == 1 || $data['permisos']['perm_u'] == 1) :
getModal('mdlPermisos', $data);
// endif;
footerApp('Template/footer_dash', $data);
?>
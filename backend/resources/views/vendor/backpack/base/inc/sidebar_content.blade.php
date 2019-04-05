<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href='{{ backpack_url('departamento') }}'><span>Departamentos</span></a></li>
<li><a href='{{ backpack_url('cargo') }}'><span>Cargos</span></a></li>
<li><a href='{{ backpack_url('empleado') }}'><span>Empleados</span></a></li>
<li><a href='{{ backpack_url('asignacion') }}'><span>Cargos Empleados</span></a></li>
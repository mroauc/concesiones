<li class="nav-item">
    <a href="{{ route('home') }}"
       class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
        <p>Inicio</p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="{{ route('documentoContables.index') }}"
       class="nav-link {{ Request::is('documentoContables*') ? 'active' : '' }}">
        <p>Facturas</p>
    </a>
</li> --}}

<li class="nav-item has-treeview">
    <a class="nav-link">
        <p>
            Módulo Venta<i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" data-widget="treeview">
        <li class="nav-item">
            <a
               class="nav-link {{ Request::is('documentoContables*') ? 'active' : '' }}">
                <p>Emisión de Facturas</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item has-treeview">
    <a class="nav-link">
        <p>
            Módulo de Compra<i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" data-widget="treeview">
        <li class="nav-item">
            {{-- <a --}}
            <a
               class="nav-link {{ Request::is('documentoCompra*') ? 'active' : '' }}">
                <p>Factura Compra</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview">
    <a class="nav-link">
        <p>
            Contabilidad<i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" data-widget="treeview">
        <li class="nav-item">
            <a
               class="nav-link {{ Request::is('centroDeNegocios*') ? 'active' : '' }} pl-4">
                <p>Centro De Negocios</p>
            </a>
        </li>
        
        
    </ul>
</li>

<script>
    $( ".headerSub-menu" ).click(function() {
        var hijosLi = $(this).children("li");
        var flechaOpcion = $(this).find(".fa-chevron-right");
        console.log(flechaOpcion);
        $.each(hijosLi, (index, item) => {
            var opcion = $(this).children("li").eq(index);
            if(opcion.css("display") === "none"){
                flechaOpcion.css("transform", 'rotate(90deg)')
                opcion.show();
            }
            else{
                flechaOpcion.css("transform", 'rotate(0deg)')
                opcion.hide();
            }
            
        });
    });

    $('#opcionCRM').click(function(){
        $('#menuCRM').show();
        $('#menuERP').hide();
    });
</script>


{{-- <li class="nav-item">
    <a href="{{ route('vendedors.index') }}"
       class="nav-link {{ Request::is('vendedors*') ? 'active' : '' }}">
        <p>Vendedores</p>
    </a>
</li> --}}


{{-- <li class="nav-item">
    <a href="{{ route('bancos.index') }}"
       class="nav-link {{ Request::is('bancos*') ? 'active' : '' }}">
        <p>Bancos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('isapres.index') }}"
       class="nav-link {{ Request::is('isapres*') ? 'active' : '' }}">
        <p>Isapres</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('afps.index') }}"
       class="nav-link {{ Request::is('afps*') ? 'active' : '' }}">
        <p>Afps</p>
    </a>
</li> --}}


<li class="nav-item">
    <a
       class="nav-link {{ Request::is('servicios*') ? 'active' : '' }}">
        <p>Servicios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('representative.index')}}"
       class="nav-link {{ Request::is('representative*') ? 'active' : '' }}">
        <p>Representantes</p>
    </a>
</li>



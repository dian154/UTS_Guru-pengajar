<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()->is('pemesanan') ? 'active' : '' }}"><a href="/pemesanan"><i class="fa  fa-institution"></i> <span>Pilihan Paket Belajar</span></a></li>
        <li class="{{request()->is('stock_pemesanan') ? 'active' : '' }}"><a href="/stock_pemesanan"><i class="fa   fa-comments"></i> <span>Informasi Guru Pengajar</span></a></li>
        <li class="{{request()->is('barang_masuk') ? 'active' : '' }}"><a href="/barang_masuk"><i class="fa  fa-calendar-check-o"></i> <span>Jadwal Pembelajaran</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
      
      </ul>